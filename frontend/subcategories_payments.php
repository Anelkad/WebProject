<?php
$servername="localhost";
$username="root";
$password="";
$dbname="final";
$conn=mysqli_connect($servername, $username, $password, $dbname);
$categories=array();
$sql=mysqli_query($conn, 'SELECT  `title`, `image`, `id` FROM `categories`');
$i=0;
while($row=mysqli_fetch_array($sql)){
    $categories[$i]['title']=$row['title'];
    $categories[$i]['image']=$row['image'];
    $categories[$i]['id']=$row['id'];
    $i++;
}
if(isset($_GET['category_id'])){
    $category_id=$_GET['category_id'];
}
$sql=mysqli_query($conn, "SELECT  title, img, id FROM subcategories WHERE category_id='$category_id'");
$subcategories=array();
$i=0;
while($row=mysqli_fetch_array($sql)){
    $subcategories[$i]['title']=$row['title'];
    $subcategories[$i]['img']=$row['img'];
    $subcategories[$i]['id']=$row['id'];
    $i++;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Платежи</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="./style/Aidana/payments.css" rel="stylesheet">
</head>

<body>
    <div class="header">
        <div class="menu">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="35" height="35"><path fill="none" d="M0 0h24v24H0z"/><path d="M3 4h18v2H3V4zm0 7h18v2H3v-2zm0 7h18v2H3v-2z" fill="rgba(232,2,2,1)"/></svg>
        </div>
        <div class="logo">
            <img class="logo-img" src="https://avatars.mds.yandex.net/i?id=df07a806cd093ad9efc312b67f8e0325-6503679-images-thumbs&n=13" width="100px">
            <p class="logo-text">Платежи</p>
        </div>
        <div class="location">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="35" height="35"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 20.9l4.95-4.95a7 7 0 1 0-9.9 0L12 20.9zm0 2.828l-6.364-6.364a9 9 0 1 1 12.728 0L12 23.728zM12 13a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 2a4 4 0 1 1 0-8 4 4 0 0 1 0 8z" fill="rgba(232,2,2,1)"/></svg>
        </div>
        <div class="search-container">
            <div class="search"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30"><path fill="none" d="M0 0h24v24H0z"/><path d="M18.031 16.617l4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15z" fill="rgba(232,2,2,1)"/></svg></div>
            <form>
                <input type="text" placeholder="Что хотите оплатить?">
            </form>

        </div>
    </div>
    <div class="main">
    <?php foreach($subcategories as $item):?>
        <a style="text-decoration:none; color:black" href="data_payments.php?subcategory_id=<?php echo $item['id'];?>" class="main-item"><svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><?php echo $item['img'];?></svg><?php echo $item['title'];?><i class="ri-arrow-right-s-line"></i></a> 
        <?php endforeach;?>
            
</div>
    <div class="footer">
            <a class="footer-item"><svg class="footer-text" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M19 21H5a1 1 0 0 1-1-1v-9H1l10.327-9.388a1 1 0 0 1 1.346 0L23 11h-3v9a1 1 0 0 1-1 1zm-6-2h5V9.157l-6-5.454-6 5.454V19h5v-6h2v6z" fill="rgba(232,2,2,1)"/></svg>Главная</a>
            <a class="footer-item"><svg class="footer-text" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M16 17v-1h-3v-3h3v2h2v2h-1v2h-2v2h-2v-3h2v-1h1zm5 4h-4v-2h2v-2h2v4zM3 3h8v8H3V3zm2 2v4h4V5H5zm8-2h8v8h-8V3zm2 2v4h4V5h-4zM3 13h8v8H3v-8zm2 2v4h4v-4H5zm13-2h3v2h-3v-2zM6 6h2v2H6V6zm0 10h2v2H6v-2zM16 6h2v2h-2V6z" fill="rgba(232,2,2,1)"/></svg>Kaspi QR</a>
            <a class="footer-item"><svg class="footer-text" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M6.455 19L2 22.5V4a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H6.455zm-.692-2H20V5H4v13.385L5.763 17zM11 10h2v2h-2v-2zm-4 0h2v2H7v-2zm8 0h2v2h-2v-2z" fill="rgba(232,2,2,1)"/></svg>Сообщения</a>
            <a class="footer-item"><svg class="footer-text" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M5 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm14 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-7 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" fill="rgba(232,2,2,1)"/></svg>Сервисы</a>
    </div>
</body>
</html>