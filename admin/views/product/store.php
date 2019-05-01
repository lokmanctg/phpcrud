<?php


include_once($_SERVER["DOCUMENT_ROOT"]."/phpcrud/bootstrap.php");
use Bitm\Utility\Message;
use Bitm\Utility\Utility;
//collect the data
$title = $_POST['title'];
$mrp = $_POST['mrp'];
//$promotional_message = $_POST['promotional_message'];


$is_uploaded = false;
if($_FILES['picture']['size']>0) {
    $target_file = $_FILES['picture']['tmp_name'];
    $filename = time() . "_" . $_FILES['picture']['name'];
    $dest_file = $_SERVER['DOCUMENT_ROOT'] . '/phpcrud/uploads/' . $filename;
    // echo $_FILES['picture']['tmp_name'];
//echo $_FILES['picture']['size'];
    $is_uploaded = move_uploaded_file($target_file, $dest_file);
}
if ($is_uploaded){
    $dest_filename = $filename;
}
else{
    $dest_filename = "";
}




$query = "INSERT INTO `products` (
`id`,
 `brand_id`, 
 `lebel_id`, 
 `title`, 
 `picture`, 
 `short_description`, 
 `description`, 
 `total_sales`, 
 `product_type`, 
 `is_new`, 
 `cost`, 
 `mrp`, 
 `special_price`, 
 `soft_delete`, 
 `is_draft`, 
 `is_active`, 
 `created_at`, 
 `modified_at`) VALUES (
 NULL, 
 NULL, 
 NULL, 
 :title, 
 :picture, 
 NULL, 
 NULL, 
 NULL, 
 NULL, 
 NULL, 
 NULL, 
 :mrp, 
 NULL, 
 NULL, 
 NULL, 
 NULL, 
 NULL, 
 NULL);";

$sth = $conn->prepare($query);
$sth->bindParam(':title',$title);
$sth->bindParam(':mrp',$mrp);
$sth->bindParam(':picture',$dest_filename);
//$sth->bindParam(':promotional_message',$promotional_message);
$result = $sth->execute();


//$sth->bindParam(':promotional_message',$promotional_message);
//$sth->bindParam(':html_banner',$html_banner);

//print_r($result);
//die();
//redirect to index page

    header("location:index.php");
