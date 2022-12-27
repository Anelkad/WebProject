<?php
include("../backend/shop-category-process.php");
// var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/Aru/shop.css">
    <link rel="stylesheet" href="./style/Aru/shop-category.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="mainPage.css"> -->
    <title>Category</title>
</head>
<body style="margin: 0;padding: 0;">
    <header>
        <img class="logo" src="https://kaspi.kz/img/Logo.svg" alt="">
        
        <p>Клиентам</p>
        <p>Бизнесу</p>
        <p>Kaspi Гид</p>
    </header>
    <div class="search-block" style="padding-top: 45px;">
        <form action="/" method="post">
            <a href="http://localhost/WebKaspiProject/frontend/shop.php">Магазин</a>
            <div class="search-bar-wrapper">
                <input class="search-bar__input" type="search" placeholder="Поиск товара" maxlength="256">
                <button class="search-button" type="submit">
                    <img src="./image/icons8-поиск-60.png" alt="">
                </button>
            </div>
        </form>
        
    </div>
    
    <div class="catalog-wrapper">
        <?php
        foreach($resultCatalog as $key=>$value){
            $name=$value['name'];
            echo "<a href='http://localhost/WebKaspiProject/frontend/shop-category.php'>";
            echo "$name";
            echo "</a>";
        }
        ?>
        
        
    </div>

    <div class="main-category-wrapper">
        <div class="sidebar-category">
            <details>
                <summary>Все категории</summary>
                <ul>
                    <a href="#1">
                        <li>
                            Спорт, Туризм
                        </li>
                    </a>
                    <a href="#2">
                        <li>
                            Красота, Здоровье
                        </li>
                    </a>
                    <a href="#3">
                        <li>
                            Автотовары
                        </li>
                    </a>
                    <a href="#4">
                        <li>
                            Детские товары
                        </li>
                    </a>
                    <a href="#5">
                        <li>
                            Компьютеры
                        </li>
                    </a>
                </ul>
            </details>
        </div>
        <div class="main-category">
            <?php
            foreach($resultCatalog as $key=>$value){
                echo "<div class='category-block'>";
                echo "<h2 class='category-name' id=".$value['id'].">".$value['name']."</h2>";
                    foreach($resultCategory as $key2=>$value2){
                        if($value2['catalogId']==$value['id']){
                            echo "<a href='http://localhost/WebKaspiProject/frontend/shop-product.php?ctgId=".$value2['id']."'>".$value2['name']."</a><br>";
                        }
                    }
                echo"</div>";
            }
            ?>
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