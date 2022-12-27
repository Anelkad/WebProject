
<?php

if($_GET['ctgId']){
    include("config.php");
    $ctgId=intval($_GET['ctgId']);
    $query = mysqli_query($mysqli, "SELECT * FROM `shop-category` WHERE `id`=$ctgId;");

    while($row = mysqli_fetch_assoc($query)){
        $resultCategoryName[] = $row;
    }
    $ctId=$resultCategoryName[0]['catalogId'];
    $query2 = mysqli_query($mysqli, "SELECT * FROM `shop-catalog` WHERE `id`=$ctId;");

    while($row = mysqli_fetch_assoc($query2)){
        $resultCatalogName[] = $row;
    }
    $query3 = mysqli_query($mysqli, "SELECT * FROM `shop-product` WHERE `categoryId`=$ctgId;");

    while($row = mysqli_fetch_assoc($query3)){
        $resultProduct[] = $row;
    }

    $query4 = mysqli_query($mysqli, "SELECT * FROM `shop-catalog`;");

    while($row = mysqli_fetch_assoc($query4)){
        $resultCatalog[] = $row;
    }
}


?>