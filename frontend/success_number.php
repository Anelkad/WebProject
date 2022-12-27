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
                users.phone_number
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
                $my_user['phone_number'] = $row['phone_number'];
                $my_user['first_name'] = $row['first_name'];
                $my_user['last_name'] = $row['last_name'];
             }

           
            $my_user_id = $my_user['id'];
            
            $new_number = $_POST['new_number'];

            $notsuccess = empty($new_number);
            $pattern="/8[0-9]{3}[0-9]{4}[0-9]{3}/";
            $wrongnumber = !preg_match($pattern, $new_number) || strlen($new_number)!=11;

            if ($notsuccess){
                $ans = '<h1>Извините</h1>
                <p>Вы не заполнили все данные.  
                <a href="confirm_number.php">Вернуться?</a></p>';
            }
            else
            if ($wrongnumber){
                $ans = '<h1>Извините</h1>
                <p>Ваш телефон неверный.  
                <a href="confirm_number.php">Вернуться?</a></p>';
            }
            else{

                mysqli_query($conn, "UPDATE users SET phone_number = $new_number WHERE id='$my_user_id'");
                $ans = "<div id=\"green\">
                Ваш номер телефона изменен.<br>
                </div>
                &nbsp;
                &nbsp;
                &nbsp;
                <a href=\"profile.php\"><div id=\"button\">Вернуться в профиль</div></a>";
            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/Anel & Manshuk/confirm.css">
    <title>Изменить номер телефона</title>
</head>
<body>
    <div id="head">
        Новый номер телефона
    </div>
    <div id="main">
        <?php echo $ans;?>
    </div>
</body>
</html>