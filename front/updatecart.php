<?php
include_once($_SERVER["DOCUMENT_ROOT"]."/phpcrud/bootstrap.php");
use Bitm\Product\Product;
use Bitm\Utility\Utility;
use Bitm\Cart\Cart;

$cart = new Cart();
$result = $cart->updateQty($_POST['qty'],$_POST['product_id'],$_SESSION['guest_user']);

if($result){
    //message
    header('location:cart.php');
}else{
    //message
}

