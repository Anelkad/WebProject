<?php	
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "final";
            
            $my_user = array();

            session_start();
            $total_price = $_GET['totalPrice'];
            $conn = mysqli_connect($servername, $username, $password, $dbname);
           
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }
            
            try { 
                $sql = "SELECT users.first_name, 
                users.last_name,
                users.card_account,
                users.card_number,
                users.img
                FROM users
                INNER JOIN my_user
                ON my_user.user_id = users.id AND my_user.id = 1";
               $result = mysqli_query($conn, $sql); 
            } catch (mysqli_sql_exception $e) { 
               var_dump($e);
               exit; 
            } 
            
            while ($row = mysqli_fetch_array($result)) {
                $my_user['card_account'] = $row['card_account'];
             }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/Anel & Manshuk/confirm.css">
    <title>Подтверждение</title>
</head>
<body>
    <div id="head">
        Каспи Магазин
    </div>
    <div id="main">
        <span id="title">Каспи Магазин</span>
        <hr>
        Вы оплачиваете:
        <table>
        <?php 
        if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0){
            foreach($_SESSION['cart'] as $key=>$value){
                $id=$value['id'];
                $image=$value['img_url'];
                $name=$value["name"];
                $price=$value["price"];
                $desc=$value["description"];
                $q=$value["quant"];
        
        ?>  
            <tr>
                <td class="gray"><?php echo $name.' ×'.$q;?></td>
                <td><?php echo "$price";?> ₸</td>
                
            </tr>
        <?php 
            }
        }
        ?>  
        </table>

        <hr>
        К оплате: <span id="right"><?php echo $total_price;?> ₸</span>
        <hr>
        <br>
        <hr>
        <div class="card">
            <img src="./image/gold.png" align="left">
            <span class="top-text">Kaspi Gold</span>
            <span class="sum"><?php echo $my_user['card_account'];?> ₸</span>
        </div>
        <hr>
       <p align="center" class="gray">Комиссия 0 ₸</p>

       <a href="success_shop.php?totalPrice=<?php echo $total_price;?>">
       <div id="button">Подтвердить и оплатить <?php echo $total_price;?> ₸</div></a>
    </div>
</body>
</html>