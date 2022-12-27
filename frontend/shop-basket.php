<?php
session_start();
include("../backend/shop-basket-process.php");

if((isset($_SESSION['cart']) && count($_SESSION['cart'])==0)||(!isset($_SESSION['cart']))){
    $total_price=0;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/Aru/shop.css">
    <link rel="stylesheet" href="./style/Aru/shop-basket.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="mainPage.css"> -->
    <title>Корзина</title>
</head>
<body>
    <header>
        <img class="logo" src="https://kaspi.kz/img/Logo.svg" alt="">
        
        <p>Клиентам</p>
        <p>Бизнесу</p>
        <p>Kaspi Гид</p>
    </header>
    <div class="header" style="padding-top: 45px;">
        <a href="./shop.php"><img src="./image/goback.png" alt=""></a>
        <h1>Корзина</h1>
    </div>

    <div class="products-wrapper">
        <?php 
        if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0){
            foreach($_SESSION['cart'] as $key=>$value){
                $id=$value['id'];
                $image=$value['img_url'];
                $name=$value["name"];
                $price=$value["price"];
                $desc=$value["description"];
                $q=$value["quant"];
        
        ?>
        <div class="product-detail">
            <div class="image-block">
                <img src=<?php echo"$image";?> alt="">
            </div>
            <div class="desc-block">
                <p class="desc-name"><?php echo "$name";?></p>
                    
                <p class="price1">Цена</p>
                <p class="price2"><?php echo "$price";?> т</p>
                <div class="change-quantity">
                    <a href=<?php echo"./shop-basket.php?pId=$id&action=dec";?> >-</a>
                    <p><?php echo $q;?></p>
                    <a href=<?php echo"./shop-basket.php?pId=$id&action=inc";?> >+</a>
                </div>
            </div>
        </div>
        <?php 
            }
        }
        ?>  
        
        <div class="submit-wrapper">
            <form action="" method="POST">
                <input class="submit-button" type="submit" value="Оформить и оплатить <?php echo $total_price?>т">
            </form>
        </div>
        
    </div>
    <footer>
        <div class="footerAll">
            <div class="footerIn">
                <p>Продукты Kaspi.kz</p>
                <a href="">Kaspi Gold</a><br>
                <a href="">Kaspi Gold для ребенка</a><br>
                <a href="">Kaspi Red</a><br>
                <a href="">Kaspi Депозит</a><br>
                <a href="">Кредит на Покупки</a><br>
                <a href="">Кредит на ИП</a><br>
                <a href="">Кредит Наличными</a><br>
            </div>
            <div class="footerIn">
                <p>Сервисы Kaspi.kz</p>
                <a href="">Магазин</a><br>
                <a href="">Travel</a><br>
                <a href="">Платежи</a><br>
                <a href="">Мой банк</a><br>
                <a href="">Переводы</a><br>
                <a href="">Акции</a><br>
                <a href="">Госуслуги</a><br>
                <a href="">Kaspi Гид</a><br>
            </div>
            <div class="footerIn">
                <p>Для Бизнеса</p>
                <a href="">Kaspi Pay</a><br>
                <a href="">Бизнес Кредит</a><br>
                <a href="">Кредит для ИП</a><br>
                <a href="">Продавать в Интернет-магазине на Kaspi.kz</a><br>
                <a href="">Принимать платежи с Kaspi.kz</a><br>
                <a href="">Kaspi Гид</a><br>
                <a href="">Кабинет партнера Kaspi Pay</a><br>
            </div>
            <div class="footerIn">
                <p style="font-weight:100;">9999 Бесплатно с мобильного</p>
                <a href="">Пользовательское соглашение</a><br>
                <a href="">Вакансии</a><br>
                <a href="">Investor Relations</a><br>
                
            </div>
        </div>

        <div class="additional">
            <div class="socialImg">
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
            </div>
        </div>
    </footer>
</body>
</html>