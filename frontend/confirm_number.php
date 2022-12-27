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
                users.password,
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
                $my_user['password'] = $row['password'];
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
    <link rel="stylesheet" href="./style/Anel & Manshuk/confirm.css">
    <title>Подтверждение</title>
</head>

<body>
    <div id="head">
        <a href="profile.php"><img src="./image/back-button.png"  id="back" align="left"></a>
        Изменение номера телефона
    </div>
    <div id="main">
        <div class="white number">
            Введите новый номер:
        </div>
        <form action="success_number.php" method="post">
        <div class="card white">
            <input placeholder="Пример: 81234567890" name="new_number">
        </div>
        <button type="submit">Продолжить</button>
    </div>
</body>

</html>