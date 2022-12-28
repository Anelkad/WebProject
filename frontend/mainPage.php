<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mainPage.css">
    <link rel="stylesheet" href="./style/Anel & Manshuk/confirm.css">
    <title>Document</title>
</head>
<body>
    
    <header>
        <img class="logo" src="https://kaspi.kz/img/Logo.svg" alt="">
        
        <p>Клиентам</p>
        <p>Бизнесу</p>
        <p>Kaspi Гид</p>
        <a href="profile.php"><p>Профиль</p></a>
    </header>
    

    <div class="mainImg">
        <img class="first" src="https://kaspi.kz/img/main_logo.svg" alt="">
        <img class="second" src="https://kaspi.kz/img/phone-3x-n.png" alt="">
    </div>

    <h1>Сервисы Kaspi.kz</h1>

    <div class="services">
        <div>
            <p>Магазин</p>
            <p class="mainS">Покупки в рассрочку с бесплатной доставкой</p>
            <nav>
                <img class="service" style="margin-left: -10px; margin-top: -20px;" src="https://kaspi.kz/img/service-1.svg" alt="">
                <button onClick="moveToStore()" style="margin-top: 35px;">Купить</button>
            </nav>
        </div>
        <div>
            <p>Платежи</p>
            <p class="mainS">Без комиссий, более 10 000 услуг</p>
            <nav>
                <img class="service" style="margin-left: -10px;" src="https://kaspi.kz/img/payments.svg" alt="">
                <button onClick="moveToPayments()">Оплатить услуги</button>
            </nav>
        </div>
        <div>
            <p>Мой банк</p>
            <p class="mainS">Kaspi Red, Депозиты и кредиты онлайн</p>
            <nav>
                <img class="service" style="margin-left: -10px;" src="https://kaspi.kz/img/mybank.svg" alt="">
                <button onClick="moveToMyBank()">Перейти в Мой Банк</button>
            </nav>
        </div>
        <div>
            <p>Переводы</p>
            <p class="mainS">Без комиссий на Kaspi Gold</p>
            <nav style="margin-top: 20%;">
                <img class="service" style="margin-left: -10px;" src="https://kaspi.kz/img/transfers.svg" alt="">
                <button onClick="moveToTransfers()">Совершить Перевод</button>
            </nav>
        </div>
    </div>



    <h1>Продукты Kaspi.kz</h1>

    <div class="products">

        <div>
            <img class="imgInProducts" src="https://kaspi.kz/img/gold.svg" alt="">
            <p class="from">Kaspi Gold</p>
            <p class="center">Переводы, платежи, снятия без комиссий</p>
            <a href="register.php" class="linkProducts">Открыть Kaspi Gold онлайн</a>

        </div>
        <div>
            
            <img class="imgInProducts" src="https://kaspi.kz/img/red.svg" alt="">              
            <p class="from">Kaspi Red</p>
            <p class="center">Покупки в рассрочку 0% в магазинах Вашего города</p>
            <a href="" class="linkProducts">Открыть Kaspi Red онлайн</a>
        </div>
        <div>
            <img class="imgInProducts" src="https://kaspi.kz/img/gold.svg" alt="">  
            <p class="from">Kaspi Gold для ребенка</p>
            <p class="center">Деньги на карманные расходы и контроль трат</p>
            <a href="register.php" class="linkProducts">Открыть Kaspi Gold для ребенка</a>
        </div>
        <div>
            <img class="imgInProducts" src="https://kaspi.kz/img/kredit.svg" alt="">         
            <p class="from">Кредит на Покупки</p>
            <p class="center">Кредит или рассрочка 0%. Одобрение за 1 минуту.</p>
            <a href="" class="linkProducts">Оформить кредит на покупки</a>
        </div>
        <div>
            <img class="imgInProducts" src="https://kaspi.kz/img/deposit.svg" alt="">           
            <p class="from">Kaspi Депозит</p>
            <p class="center">Снятия и пополнения без комиссий. Сумма депозита от 1 000 Т.</p>
            <a href="" class="linkProducts">Открыть Kaspi Депозит</a>
        </div>
        <div>
            <img class="imgInProducts" src="https://kaspi.kz/img/KN_entrep.svg" alt="">                
            <p class="from">Кредит для ИП</p>
            <p class="center">До 2 млн тенге. Без налога и документов</p>
            <a href="" class="linkProducts">Оформить Кредит для ИП</a>
        </div>
        <div>
            
            <img class="imgInProducts" src="https://kaspi.kz/img/KN.svg" alt="">                
            <p class="from">Кредит Наличными</p>
            <p class="center">Одобрение онлайн за 1 минуту. Снятие денег в банкомате</p>
            <a href="data_payments.php" class="linkProducts">Получить Кредит Наличными</a>
        </div>
    </div>

    <h1>Для Бизнеса</h1>
    <div class="blocks">
        <div class="left">
            <img src="https://kaspi.kz/img/entrep-phone-2x.png" alt="" class="phone">
            <img class="imgInLeft" src="https://kaspi.kz/img/kaspipay_icon.svg" alt="">
            <p style="font-size:22px;">Kaspi Pay. Приложение для бизнеса</p>

            <p style="font-size:15px;">Принимайте оплату с </p>

            <div class="divIcons">
                <img src="https://kaspi.kz/img/gold.svg" alt="" class="icons">
                <img src="https://kaspi.kz/img/red.svg" alt="" class="icons">
                <img src="https://kaspi.kz/img/kredit.svg" alt="" class="icons">
            </div>
            <button class="leftButton">Покдлючиться</button>
        </div>
        <div class="right">
            <div>
                <img class="imgInProducts" src="https://kaspi.kz/img/business.svg" alt="">
                <p class="from">Бизнес Кредит</p>
                <p class="center">Без залога и документов. Онлайн за одну минуту</p>
                <a href="" class="linkProducts">Подробнее</a>
            
            </div>
            <div>
                <img class="imgInProducts" src="https://kaspi.kz/img/actions-sales.svg" alt="">
                <p class="from">Акции Kaspi QR</p>
                <p class="center">Участвуйте в акциях и увеличивайте свои продажи</p>
                <a href="" class="linkProducts">Принять участие</a>
            </div>
        </div>

        <div class="secondBlock">
            <h1>Принимайте оплату с Kaspi Pay</h1>
            <img src="https://kaspi.kz/img/smart-POS-2x.png" alt="">
            <img src="https://kaspi.kz/img/POS_mobapp-2x.png" alt="">
            <img src="https://kaspi.kz/img/QR-display-2x.png" alt="">
            
            <div class="payment">
                <p>Smart POS</p>
                <p>Мобильный POS</p>
                <p>QR Дисплей</p>
            </div>
            <a class="linkProducts" href="">Принимать оплату с Kaspi Pay</a>
        </div>

        <div class="thirdBlock">

            <h1>Стать Партнером</h1>

            <div class="partnerBlocks">
                <div>
                    <img src="https://kaspi.kz/img/cart.svg" alt="">
                    <p style="font-size:20px; margin:15px 5px;" >Продавать в Интернет-магазине на Kaspi.kz</p>
                    <p style="font-size:13px;">Около 11 млн покупателей, доставка товаров по всему Казахстану, возможность продавать в кредит и рассрочку.</p>
                    <a href="" class="linkProducts">Начать продавать в Интернет-магазине</a>
                </div>
                <div>
                    <img src="https://kaspi.kz/img/kaspipay_icon.svg" alt="">
                    <p style="font-size:20px; margin:25px 5px;">Продавать с Kaspi Pay</p>
                    <p style="font-size:13.5px;">Принимайте оплату с Kaspi Gold, Red и Kredit. Откройте счет онлайн бесплатно и получите мобильный POS за 5 минут.</p>
                    <a href="" class="linkProducts">Начать продавать с Kaspi Pay</a>
                </div>
            </div>
        </div>

        
    </div>
    
    <h2 style="margin: 150px 0 50px 0; font-size: 30px;">Войдите, чтобы перейти в приложение Kaspi.kz</h2>
    <div id="main">
        <form action="success_login.php" method="post">
        <div class="card white">
            <input placeholder="Номер телефона например 81234567890" name="phone_number">
        </div>
        <div class="card white">
            <input placeholder="Пароль" name="password">
        </div>
        <button class="continue" type="submit">Продолжить</button>
        <a href="register.php" style="font-size: 15px; margin: 20px 0;">Если нет аккаунта, можете зарегистрироваться перейдя по ссылке</a>
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
                <a href="./shop.php">Магазин</a><br>
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
    </footer>
    
    <script>
        function moveToTransfers() {
            window.location.href = "transfers.php";
        }


        function moveToMyBank() {
            window.location.href = "mybank.php";
        }

        function moveToPayments() {
            window.location.href = "categories_payments1.php";
        }

        function moveToStore() {
            window.location.href = "shop.php";
        }
    </script>
</body>
</html>