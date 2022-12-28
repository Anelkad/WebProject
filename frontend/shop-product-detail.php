<?php
session_start();
include("../backend/shop-product-detail-process.php");
// print($_GET['ctgId']);
// var_dump($result);
$userName=$_SESSION['userName']; 
$id=$resultProduct[0]['id'];
$pName=$resultProduct[0]['name'];
$image=$resultProduct[0]['imageURL'];
$price=$resultProduct[0]['price'];
$desc=$resultProduct[0]['description'];
if(empty($resultFeedbackCnt[0]['COUNT(*)'])){
    $cnt=0;
}else{
    $cnt=$resultFeedbackCnt[0]['COUNT(*)'];
}
if(!isset($resultFeedback) || empty($resultFeedback)){
    $resultFeedback=[];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/Aru/shop.css">
    <link rel="stylesheet" href="./style/Aru/shop-product-detail.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="mainPage.css"> -->
    <title>Products</title>
</head>
<body style="margin: 0;padding: 0; background-color: #fbfbfb;">
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

    <div class="main-product-description-block">
        <div class="product-detail-wrapper">
            <div class="product-image">
                <img src=<?php echo"$image";?> alt="">
            </div>
            <div class="product-description">
                <?php echo"<h1>$pName</h1>"?>
                <div class="product-rating">
                    <img src="./image/rating2.png" alt="">
                    <a href=""><?php echo"($cnt отзывов)";?></a>
                </div>
                <p class="price1">Цена</p>
                <p class="price2"><?php echo"$price";?> т</p>
                <a class="gotobasket" href=<?php echo "./shop-basket.php?pId=$id&action=add"?>>Добавить в корзину</a>
                <p class="description">
                    <?php echo"$desc";?>
                </p>
            </div>
        </div>
        <div class="product-rating-wrapper">
            <h1>Отзывы о продукте</h1>
            <form action=<?php echo "./shop-product-detail.php?pId=$id&userName=$userName"?> method="POST" class="create-feedback">
                <label for="">Оставьте отзыв:</label>
                <input type="text" id="content" name="content"><br>
                <label for="">Поставьте оценку:</label>
                <select id="selectId" name="selectId">
                    <option value=""></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select><br>
                <input class="submit" type="submit">
            </form>
            <?php
            foreach($resultFeedback as $key=>$value){
                if($value['rating']==5){
                    $image="./image/rating5.png";
                }elseif($value['rating']==4){
                    $image="./image/rating4.png";
                }elseif($value['rating']==3){
                    $image="./image/rating3.png";
                }elseif($value['rating']==2){
                    $image="./image/rating2.png";
                }else{
                    $image="./image/rating1.png";
                }
                $name=$value['userName'];
                $content=$value['content'];
            
            ?>
            <div class="feedback">
                <div class="feed">
                    <img src=<?php echo "$image";?> alt="">
                    <p> <?php echo $name; ?></p>
                </div>
                <div class="back">
                    <p> <?php echo $content; ?> </p>
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