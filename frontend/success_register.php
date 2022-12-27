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
            
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $phone_number = $_POST['phone_number'];
            $password = $_POST['password'];

            $cards = array();
            $cards[0] = "4111101000000046";
            $cards[1] = "4111111111100056";
            $cards[2] = "4111111111100072";
            $cards[3] = "4111111111100080";
            $cards[4] = "4111111111100221";

            $notsuccess = empty($first_name) || empty($last_name) || empty($phone_number) || empty($password);
            $login_exist = False;

            if (!empty($phone_number)){
            $sql=mysqli_query($conn, "SELECT id FROM users WHERE phone_number='$phone_number'");
            if ($sql){
                if(mysqli_num_rows($sql)>0){
                    $login_exist = True;
                }
                }
            }

            if ($notsuccess){
                $ans = '<h1>Извините</h1>
                <p>Вы не заполнили все данные.  
                <a href="register.html">Вернуться?</a></p>';
            }
            else
            if($login_exist){
                $ans = '<h1>Извините</h1>
                <p>Ваш номер телефона уже зарегистрирован.  
                <a href="register.html">Вернуться?</a></p>';
            }
            else{
                if (!isset($_SESSION['random'])){
                    $_SESSION['random']=0;
                    $random = 0;
                    }
                    else{
                        $_SESSION['random']++;
                        $random = $_SESSION['random'];
                    }
                    
                $cardnumber = $cards[$random % 5];
                $result = mysqli_query($conn, "INSERT INTO users (first_name, last_name, phone_number, card_account, card_number, bonus_account, password, img) VALUES ('$first_name', '$last_name', '$phone_number', 10000, '$cardnumber',1000,'$password', \"./image/profilephoto.png\")");

                $id = mysqli_insert_id($conn);
                $_SESSION['userName']= $first_name;

                mysqli_query($conn, "UPDATE my_user SET user_id = '$id' WHERE id=1");

                $ans = "<div id=\"green\">
                Вы успешно зарегистрировались.<br>
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
</head>
<body>
    <div id="head">
        Регистрация
    </div>
    <div id="main">
        <?php echo $ans;?>
    </div>
</body>
</html>