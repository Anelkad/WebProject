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
                users.card_account,
                users.card_number,
                users.bonus_account
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
                $my_user['card_number'] = $row['card_number'];
                $my_user['bonus_account'] = $row['bonus_account'];
             }

            $cardnumber = substr($my_user['card_number'], -4);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/Anel & Manshuk/mybank.css">
    <title>My Bank</title>
</head>
<body>
    <div id="head">
        <img src="./image/back-button.png" id="back" align="left">
        <img src="./image/Logo.png" width="50">
        <span id="title">Мой Банк</span>
    </div>
    <div id="main">
        <div class="card">
            <img src="./image/gold.png" align="left">
            <span class="top-text">Kaspi Gold</span>
            <span class="sum"><?php echo $my_user['card_account']; ?> ₸</span>
            <p class="gray">*<?php echo $cardnumber;?></p>
            
        </div>
        <div class="card">
            <img src="./image/bonus.png" align="left">
            <span class="top-text">Kaspi Бонус</span>
            <span class="sum"><?php echo $my_user['bonus_account']; ?> Б</span>

        </div>
    </div>
    <div id="footer">
        <div class="categories">
            <img src="./image/mainpage.png" width="32px">
            <span>Главная</span>
        </div>
        <div class="categories">
            <img src="./image/qr.png" width="32px">
            <span>Kaspi QR</span>
        </div>
        <div class="categories">
            <img src="./image/message.png" width="32px">
            <span>Сообщения</span>
        </div>
        <div class="categories">
            <img src="./image/services.png" width="32px">
            <span>Сервисы</span>
        </div>
        
    </div>
</body>
</html>