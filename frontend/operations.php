<?php	
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "final";
            
            $my_user = array();

            $conn = mysqli_connect($servername, $username, $password, $dbname);
           
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }
            
            try { 
                $sql = "SELECT users.id,
                users.first_name, 
                users.last_name,
                users.card_account,
                users.card_number
                FROM users
                INNER JOIN my_user
                ON my_user.user_id = users.id AND my_user.id = 1";
               $result = mysqli_query($conn, $sql); 
            } catch (mysqli_sql_exception $e) { 
               var_dump($e);
               exit; 
            } 
            
            while ($row = mysqli_fetch_array($result)) {
                $my_user['id'] = $row['id'];
                $my_user['card_account'] = $row['card_account'];
                $my_user['card_number'] = $row['card_number'];
                $my_user['first_name'] = $row['first_name'];
                $my_user['last_name'] = $row['last_name'];
             }
        
       $cardnumber =  $my_user['card_number'];
       $cardnumber = substr($cardnumber, -4);
       $my_user_id = $my_user['id'];

       $sql=mysqli_query($conn, "SELECT payment_type, receiver, sign, payment_amount, img, bonus_added FROM operations WHERE payer_id='$my_user_id'");
       $operations=array();
       $i=0;
       while($row=mysqli_fetch_array($sql)){
            $operations[$i]['payment_amount']=$row['payment_amount'];
            $operations[$i]['payment_type']=$row['payment_type'];
            $operations[$i]['receiver']=$row['receiver'];
            $operations[$i]['sign']=$row['sign'];
            $operations[$i]['img']=$row['img'];
            $operations[$i]['bonus_added']=$row['bonus_added'];
            $i++;
       }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/Anel & Manshuk/operations.css">
    <title>My Bank</title>
</head>
<body>
    <div id="head">
        <img src="./image/back-button.png" id="back" align="left">
        <img src="./image/Logo.png" width="50">
        <span id="title">Мой Банк</span>
    </div>
    <div id="main">
        <div id="card-detail">
            <br><span id="card">Kaspi Gold *<?php echo $cardnumber;?></span><br>
            <br><span id="available">Доступно</span><br>
            <br><span id="sum"><?php echo $my_user['card_account']?> ₸</span><br><br>
        </div>
        <div id="category">
            <div id="nav"><span>Действия</span></div>
            <div id="content"><span>Инфо</span></div>
            <div id="aside"><span id="red">Выписка</span>   </div>       
        </div>

        <div id="operations">

        <?php foreach($operations as $item):?>
            <div class="operation">
                <img class="photos" src=<?php echo $item['img'];?>>
                <div class="textss">
                <div class="texts">
                    <span class="text1"><?php echo $item['receiver'];?></span>
                    <span class="text2"><?php echo $item['payment_type'];?></span>
                </div>
                <span class="operation-sum"><?php echo $item['sign'].' '.$item['payment_amount'];?> ₸
                <br> <?php
                if ($item['bonus_added']>0){
                    echo '<span class="bonus">';
                    echo '+ '.$item['bonus_added'].' Б';
                    echo '</span>';
                    } ?></span>
                </div>
            </div>
        <?php endforeach;?>

        </div>
    </div>
</body>
</html>