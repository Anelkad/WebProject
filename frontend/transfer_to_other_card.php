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
                $sql = "SELECT users.first_name, 
                users.last_name,
                users.card_account
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
                $my_user['first_name'] = $row['first_name'];
                $my_user['last_name'] = $row['last_name'];
             }
         
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/Anel & Manshuk/transfer.css">
    <title>My Bank</title>
</head>
<body>
    <div id="head">
        Карта другого банка
    </div>
    <div id="main">
        <div class="card">
            <img src="./image/gold.png" align="left">
            <span class="top-text">Kaspi Gold</span>
            <span class="sum"><?php echo $my_user['card_account'];?> ₸</span>
        </div>

        <form action="confirm_transfer_other.php" method="post">
        <div class="card">
            <input placeholder="Карта получателя" name="cardnumber">
        </div>

        <div id="amount">
            <input id="sum" placeholder="0 ₸" name="total">
        </div>

        <p align="center" class="gray">Комиссия 150 ₸</p>

        <button type="submit" id="button">Перевести</button>
    </div>
</body>
</html>