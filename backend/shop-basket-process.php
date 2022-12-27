<?php
include("config.php");
if(isset($_GET["pId"])){
    $id=$_GET["pId"];
    
    if(isset($_GET['action']) && $_GET['action']=="add"){
        $id=$_GET['pId']; 
        $query = mysqli_query($mysqli, "SELECT * FROM `shop-product` WHERE `id`=$id");

        while($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
        if(!isset($_SESSION['cart'])){
            $_SESSION['cart']=array();
            
        }
        if(isset($_SESSION['cart'][$id])){
            $_SESSION['cart'][$id]['quant']++;
        }else{
            $_SESSION['cart'][$result[0]["id"]]=array(
                "id" => $result[0]["id"],
                "ctgId" => $result[0]["categoryId"],
                "name" => $result[0]["name"],
                "price" => $result[0]["price"],
                "description" => $result[0]["description"],
                "img_url" => $result[0]["imageURL"],
                "quant" => 1

            );
        }
        if (!$result) {
            print("something get wrong!");
        }
    }elseif(isset($_GET['action']) && $_GET['action']=="inc") {
        if(isset($_SESSION['cart'][$id])){
            $_SESSION['cart'][$id]['quant']++;
        }else{
            $message="There is no such product in the cart with id $id";
        }
    }elseif(isset($_GET['action']) && $_GET['action']=="dec"){
        if(isset($_SESSION['cart'][$id])){
            if($_SESSION['cart'][$id]['quant']>1){
                $_SESSION['cart'][$id]['quant']--;
            }else{
                unset($_SESSION['cart'][$id]);
            }
        }else{
            $message="There is no such product in the cart with id $id";
        }
    }elseif(isset($_GET['action']) && $_GET['action']=="del"){
        if(isset($_SESSION['cart'][$id])){
            unset($_SESSION['cart'][$id]);
        }else{
            $message="There is no such product in the cart with id $id";
        }
    }
    

    
}
if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0){
    $cart=$_SESSION['cart'];
    $total_price=0;
    foreach($cart as $key => $value){
        $q=intval($value['quant']);
        $p=intval($value['price']);
        $total_price+= $q*$p;
    }
}


?>