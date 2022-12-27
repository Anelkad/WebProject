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

            session_start();
            $total = $_SESSION['transfer_amount'];
            $my_user_id = $my_user['id'];
            $date = date('d.m.Y H:i:s');

            if(isset($_GET['sender_id'])){
                $sender_id = $_GET['sender_id'];
                mysqli_query($conn, "UPDATE users SET card_account = card_account - $total WHERE id=$sender_id");
                mysqli_query($conn, "INSERT INTO operations (payer_id, payment_type, receiver, sign, date, payment_amount, img) VALUES ('$my_user_id','Перевод','На карту другого банка','-','$date','$total','\"./image/user.png\"')");
                
                $ans = "<div id=\"green\">
                Ваш перевод совершен.<br>
                <span id=\"big\">$total ₸</span>
                </div>
                &nbsp;
        
                <a href=\"operations.php\"><div class=\"card white\">
                    <span  class=\"top-text\">Показать историю</span>
                </div></a>
                
                &nbsp;
                <a href=\"transfers.html\"><div id=\"button\">Вернуться в переводы</div></a>";
            }else
            if(isset($_GET['recipient_id']) && $my_user_id!=$_GET['recipient_id']){
                $recipient_id = $_GET['recipient_id'];
                $recipient = array();

                try { 
                    $sql = "SELECT id,
                    first_name, 
                    last_name
                    FROM users
                    WHERE id = '$recipient_id'";
                   $result = mysqli_query($conn, $sql); 
                } catch (mysqli_sql_exception $e) { 
                   var_dump($e);
                   exit; 
                } 
                
                while ($row = mysqli_fetch_array($result)) {
                    $recipient['id'] = $row['id'];
                    $recipient['first_name'] = $row['first_name'];
                    $recipient['last_name'] = $row['last_name'];
                 }
                
                $recipient_fullname = $recipient['first_name'].' '.$recipient['last_name'];
                $sender_fullname = $my_user['first_name'].' '.$my_user['last_name'];

                mysqli_query($conn, "UPDATE users SET card_account = card_account + $total WHERE id=$recipient_id");
                mysqli_query($conn, "UPDATE users SET card_account = card_account - $total WHERE id=$my_user_id");

                mysqli_query($conn, "INSERT INTO operations (payer_id, payment_type, receiver, sign, date, payment_amount, img) VALUES ('$my_user_id','Переводы','$recipient_fullname','-','$date','$total','\"./image/user.png\"')");
                mysqli_query($conn, "INSERT INTO operations (payer_id, payment_type, receiver, sign, date, payment_amount, img) VALUES ('$recipient_id','Пополнения','$sender_fullname','+','$date','$total','\"./image/coins.png\"')");
                

                $ans = "<div id=\"green\">
                Ваш перевод совершен.<br>
                <span id=\"big\">$total ₸</span>
                </div>
                &nbsp;
        
                <a href=\"operations.php\"><div class=\"card white\">
                    <span  class=\"top-text\">Показать историю</span>
                </div></a>
                
                &nbsp;
                <a href=\"transfers.html\"><div id=\"button\">Вернуться в переводы</div></a>";
            }

            else {
                $ans = '<h1>Извините</h1>
                <p>Похоже что-то пошло не так.  
                <a href="transfer_to_kaspi_card.php">Вернуться?</a></p>';
            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/Anel & Manshuk/confirm.css">
    <title>Успешный перевод</title>
</head>
<body>
    <div id="head">
        Переводы
    </div>
    <div id="main">
        <?php echo $ans;?>
    </div>
</body>
</html>