<?php

if($_POST['search']){
    include("config.php");
    $name= $_POST['search'];
    $query = mysqli_query($mysqli, "SELECT * FROM `shop-product` WHERE `name` LIKE '%$name%';");

    while($row = mysqli_fetch_assoc($query)){
        $filterProduct[] = $row;
    }

}

?>