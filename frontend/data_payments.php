<?php
session_start();
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
if(isset($_GET['subcategory_id'])){
    $subcategory_id=$_GET['subcategory_id'];
    $_SESSION['subcategory_id']=$subcategory_id;
}
$sql=mysqli_query($conn, "SELECT  title, img, id FROM subcategories WHERE id='$subcategory_id'");
$subcategories=array();

while($row=mysqli_fetch_array($sql)){
    $subcategories['title']=$row['title'];
    $subcategories['img']=$row['img'];
    $subcategories['id']=$row['id'];
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
    <link href="style/Aidana/3.css" rel="stylesheet">
</head>

<body>
    <div class="header">
        <div class="logo">
            <p class="logo-text"><?php echo $subcategories['title'];?></p>
        </div>
    </div>
    <div class="main">
            <form action="confirm_payment.php" method="post">
                <input class="text" color="blue" placeholder="Номер лицевого счета" type="text" name="account_number">
                <p id="notice">Указан на бумажной квитанции</p>
                <p id="commision">Комиссия 0 ₸</p>
                <button class="btn" type="submit">Проверить</button>
            </form>
    </div>
    
</body>

</html>