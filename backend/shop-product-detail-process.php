<?php

if($_GET['pId']){
    include("config.php");
    $pId=intval($_GET['pId']);
    $query = mysqli_query($mysqli, "SELECT * FROM `shop-product` WHERE `id`=$pId;");

    while($row = mysqli_fetch_assoc($query)){
        $resultProduct[] = $row;
    }
    $query2 = mysqli_query($mysqli, "SELECT * FROM `shop-feedback` WHERE `productId`=$pId;");

    while($row = mysqli_fetch_assoc($query2)){
        $resultFeedback[] = $row;
    }
    $query4 = mysqli_query($mysqli, "SELECT * FROM `shop-catalog`;");

    while($row = mysqli_fetch_assoc($query4)){
        $resultCatalog[] = $row;
    }
    $query5 = mysqli_query($mysqli, "SELECT COUNT(*) FROM `shop-feedback` WHERE `productId`=$pId;");

    while($row = mysqli_fetch_assoc($query2)){
        $resultFeedbackCnt[] = $row;
        var_dump($resultFeedbackCnt);
    }
    
}


?>