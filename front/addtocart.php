<?php
include_once($_SERVER["DOCUMENT_ROOT"]."/phpcrud/bootstrap.php");
$query = "SELECT * FROM carts ";
$sth = $conn->prepare($query);
$sth->execute();
$carts = $sth->fetchAll(PDO::FETCH_ASSOC);

$product_id=$_GET['product_id'];

$sid=session_id();

//echo $sId."pk";

$picture=$_GET['picture'];
$product_title=$_GET['product_title'];
$unite_price=$_GET{'unite_price'};
$qty=1;
$total_price=$unite_price * $qty;




$query = "INSERT INTO `carts` 
(`id`,
 `sId`, 
 `product_id`,
  `picture`, 
  `product_title`, 
  `qty`, 
  `unite_price`, 
  `total_price`) 
  VALUES 
  (NULL, 
  :sId,
  :product_id, 
  :picture, 
  :product_title, 
  :qty,
  :unite_price, 
  :total_price) on duplicate key update qty=qty+1 , total_price=qty*unit_price;";

$sth = $conn->prepare($query);

$sth->bindParam(':sId',$sId);
$sth->bindParam(':product_id',$product_id);
$sth->bindParam(':picture',$picture);
$sth->bindParam(':product_title',$product_title);
$sth->bindParam(':qty',$qty);
$sth->bindParam(':unit_price',$unit_price);
$sth->bindParam(':total_price',$total_price);

$result = $sth->execute();

header("location:index.php");
?>

