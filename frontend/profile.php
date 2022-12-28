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
                $my_user['img'] = $row['img'];
             }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/Anel & Manshuk/profile.css">
    <title>My Bank</title>
</head>
<body>
    <div id="head">
        <a href="mainPage.php"><img src="./image/left.png" id="back" align="left"></a>
        <span id="title">Настройки</span>
    </div>
    <div id="main">
        <div id="profile-photo">
            <img id="photo" src=<?php echo $my_user['img']; ?>>
        </div>
        <a href="confirm_image.php"><div id="setting">
            <span>Добавить фото</span>
        </div></a>
        <br><br>
        <div id="setting">
            <span>Push-уведомления</span>
        </div>
        <br>
        <div id="setting">
            <span>Язык приложения</span><br>
            <span class="text2">Русский</span>
        </div>
        <br><br>
        <a href="confirm_password.php"><div id="setting">
            <span>Изменить пароль</span>
        </div></a>
        <div id="setting">
            <span>Изменить код быстрого доступа</span>
        </div>
        <div id="setting">
            <span>Отключить код быстрого доступа</span>
        </div>
        <div id="setting">
            <span>Блокирование скриншотов</span><br>
            <span class="text2">Скриншоты с конфиденциальной информацией заблокированы</span>
        </div>
        <br>
        <a href="confirm_number.php"><div id="setting">
            <span>Изменить номер телефона</span>
        </div></a>
        <br><br>
        <a href="mainPage.php" id="logout">
            <span>Вернуться на главную</span>
        </a><br><br><br>
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