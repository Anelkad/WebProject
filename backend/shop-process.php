<?php

include("config.php");

$query = mysqli_query($mysqli, "SELECT * FROM `shop-catalog`;");



while($row = mysqli_fetch_assoc($query)){
    $result[] = $row;
}

?>