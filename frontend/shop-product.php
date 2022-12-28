<?php
include("../backend/shop-product-process.php");
// print($_GET['ctgId']);
// var_dump($result);
?>
<!-- http://localhost/WebKaspiProject/frontend/shop.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/Aru/shop.css">
    <link rel="stylesheet" href="./style/Aru/shop-product.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="mainPage.css"> -->
    <title>Products</title>
</head>
<body style="margin: 0;padding: 0;">
    <header>
        <img class="logo" src="https://kaspi.kz/img/Logo.svg" alt="">
        
        <p>Клиентам</p>
        <p>Бизнесу</p>
        <p>Kaspi Гид</p>
    </header>
    <div class="search-block" style="padding-top: 45px;">
        <form action="search.php" method="post">
            <a href="./shop.php">Магазин</a>
            <div class="search-bar-wrapper">
                <input class="search-bar__input" name="search" type="search" placeholder="Поиск товара" maxlength="256">
                <button class="search-button" onClick="moveToSearch()" type="submit">
                    <img src="./image/icons8-поиск-60.png" alt="">
                </button>
            </div>
        </form>
        
    </div>
    
    <div class="catalog-wrapper">
        <?php
        foreach($resultCatalog as $key=>$value){
            $name=$value['name'];
            echo "<a href='./shop-category.php'>";
            echo "$name";
            echo "</a>";
        }
        ?>
        
        
    </div>
    <div class="main-products-wrapper">
        <div class="sidebar-products-wrapper">
            <p>Все категории</p>
            <details>
                <summary>Категория</summary>
                <details>
                    <?php
                    echo "<summary style='padding-left: 20px;'>".$resultCatalogName[0]['name']."</summary>";
                    echo "<ul style='padding-left: 60px;'>";
                        echo "<li >".$resultCategoryName[0]['name']."</li>";
                    echo "</ul>";
                    ?>
                </details>
            </details>
        </div>
        <div class="products-wrapper">
            <?php
            foreach($resultProduct as $key=>$value){
            $id=$value['id'];
            $img=$value['imageURL'];
            $name=$value['name'];
            $price=$value['price'];
            ?>
            <div class="product-wrapper">
                <div class="img-wrapper">
                    <img src=<?php echo "$img";?> alt="">
                </div>
                <div class="product-description">
                    <a href=<?php echo"./shop-product-detail.php?pId=".$id?> class="product-name"><p><?php echo"$name";?></p></a>
                    <div class="product-rating">
                        <img src="./image/rating2.png" alt="">
                        <a href=<?php echo"./shop-product-detail.php?pId=".$id?> >(1 отзывов)</a>
                    </div>
                    <p class="price1">Цена</p>
                    <p class="price2"><?php echo"$price"?> т</p>
                </div>
            </div>
            <?php
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