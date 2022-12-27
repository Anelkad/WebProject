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
                $my_user['id'] = $row['id'];
                $my_user['card_account'] = $row['card_account'];
                $my_user['first_name'] = $row['first_name'];
                $my_user['last_name'] = $row['last_name'];
             }

            $total = $_GET['totalPrice'];
            $my_user_id = $my_user['id'];
            $date = date('d.m.Y H:i:s');

            if($my_user['card_account']<$total){
                $ans = '<h1>Извините</h1>
                <p>У Вас недостаточно средств для покупки.  
                <a href="shop-basket.php">Вернуться?</a></p>';
            }
            else
            {
                $bonus = $total/100;
                $type = 'Покупка в магазине';
                mysqli_query($conn, "UPDATE users SET card_account = card_account - $total WHERE id=$my_user_id");
                mysqli_query($conn, "UPDATE users SET bonus_account = bonus_account + $bonus WHERE id=$my_user_id");
                mysqli_query($conn, "INSERT INTO operations (payer_id, payment_type, receiver, sign, date, payment_amount, img, bonus_added) VALUES ('$my_user_id','Покупка','$type','-','$date','$total','\"./image/shopicon.jpg\"','$bonus')");
                $ans = "<div id=\"green\">
                Ваша покупка совершена.<br>
                <span id=\"big\">$total ₸</span>
                </div>
                &nbsp;
        
                <a href=\"operations.php\"><div class=\"card white\">
                    <span  class=\"top-text\">Показать историю</span>
                </div></a>
                
                &nbsp;
                <a href=\"shop.php\"><div id=\"button\">Вернуться в магазин</div></a>";
            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/Anel & Manshuk/confirm.css">
    <title>Магазин</title>
</head>
<body>
    <div id="head">
        Покупка
    </div>
    <div id="main">
        <?php echo $ans;?>
    </div>
</body>
</html>