<?php
include("config.php");
if(isset($_GET['pId']) && isset($_GET['userName'])){
    $a=$_GET['pId'];
    $b=$_GET['userName'];
    if(isset($_POST['selectId'])){
        $c=$_POST['content'];
        $d=intval($_POST['selectId']);
        $query = mysqli_query($mysqli, "INSERT INTO `shop-feedback`(id,productId,userName,content,rating) VALUES (null,$a,'$b','$c',$d);");
    }
}

if($_GET['pId']){
    
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

    while($row = mysqli_fetch_assoc($query5)){
        $resultFeedbackCnt[] = $row;
        // var_dump($resultFeedbackCnt);
    }
    
}


?>