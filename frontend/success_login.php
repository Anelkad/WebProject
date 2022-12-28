<?php	
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "final";

            $conn = mysqli_connect($servername, $username, $password, $dbname);
           
            session_start();

            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }
            
            $phone_number = $_POST['phone_number'];
            $password = $_POST['password'];

            $notsuccess = empty($phone_number) || empty($password);

            $login_exist = False;

            if (!empty($phone_number)){
            $sql=mysqli_query($conn, "SELECT id, password, first_name FROM users WHERE phone_number='$phone_number'");
            
            if ($sql){
                if(mysqli_num_rows($sql)>0){
                    $login_exist = True;
                    while ($row = mysqli_fetch_array($sql)) {
                        $my_user['password'] = $row['password'];
                        $my_user['id'] = $row['id'];
                        $my_user['first_name'] = $row['first_name'];
                    }
                    $user_password = $my_user['password'];
                    $user_id = $my_user['id'];
                }
              }
            }

            if ($notsuccess){
                $ans = '<h1>Извините</h1>
                <p>Вы не заполнили все данные.  
                <a href="login.html">Вернуться?</a></p>';
            }
            else
            if(!$login_exist){
                $ans = '<h1>Извините</h1>
                <p>Ваш номер телефона не зарегистрирован.  
                <a href="register.html">Зарегистрироваться?</a></p>';
            }
            else
            if($password!=$user_password){
                $ans = '<h1>Извините</h1>
                <p>Вы ввели неверный пароль.  
                <a href="login.html">Вернуться?</a></p>';
            }
            else
            {
                mysqli_query($conn, "UPDATE my_user SET user_id = '$user_id' WHERE id=1");
                $_SESSION['userName']= $my_user['first_name'];

                $ans = "<div id=\"green\">
                Вы успешно вошли.<br>
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
    <title>Регистрация</title>
    <style>
        
    </style>
</head>
<body>
    <div id="main">
        <?php echo $ans;?>
    </div>
</body>
</html>