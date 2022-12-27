<?php

include("config.php");

$query = mysqli_query($mysqli, "SELECT * FROM `shop-category`;");

while($row = mysqli_fetch_assoc($query)){
    $resultCategory[] = $row;
}
$query2 = mysqli_query($mysqli, "SELECT * FROM `shop-catalog`;");

while($row = mysqli_fetch_assoc($query2)){
    $resultCatalog[] = $row;
}

?>