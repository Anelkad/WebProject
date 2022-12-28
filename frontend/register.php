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
        <a href="mainPage.php"><img src="./image/back-button.png"  id="back" align="left"></a>
        Регистрация
    </div>
    <div id="main">
        <form action="success_register.php" method="post">
        <div class="card white">
            <input placeholder="Имя" name="first_name">
        </div>
        <div class="card white">
            <input placeholder="Фамилия" name="last_name">
        </div>
        <div class="card white">
            <input placeholder="Номер телефона например 81234567890" name="phone_number">
        </div>
        <div class="card white">
            <input placeholder="Пароль" name="password">
        </div>
        <p class="gray">&nbsp;Не менее 8 символов</p>
        <button class="continue" type="submit">Продолжить</button>
    </div>
</body>

</html>