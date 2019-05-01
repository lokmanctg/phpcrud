<?php
include_once($_SERVER["DOCUMENT_ROOT"]."/phpcrud/bootstrap.php");
use Bitm\Product\Product;
use Bitm\Utility\Utility;
use Bitm\Cart\Cart;

$cart = new Cart();
$result = $cart->delete($_GET['product_id']);

if($result){
    //success message
}else{
    //fail message
}
header('location:cart.php');