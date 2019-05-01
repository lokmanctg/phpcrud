<?php

use Bitm\Utility\Message;

include_once($_SERVER["DOCUMENT_ROOT"]."/phpcrud/bootstrap.php");
//collect the data
$id = $_POST['id'];
$title = $_POST['title'];
$prev_picture_name = $_POST['prev_picture_name'];

$is_active = 0;
if(array_key_exists('is_active',$_POST)){
    $is_active = $_POST['is_active'];
}
$is_uploaded = false;
if($_FILES['picture']['size'] > 0){
    $target_file = $_FILES['picture']['tmp_name'];
    $filename = time()."_".str_replace(' ','-',$_FILES['picture']['name']);
    $dest_file = $_SERVER['DOCUMENT_ROOT'].'/phpcrud/uploads/'.$filename;
    $is_uploaded = move_uploaded_file($target_file, $dest_file);
}
if($is_uploaded){
    $dest_filename = $filename;
}else{
    $dest_filename = $prev_picture_name;
}


//$query = "UPDATE `brands` SET `title` = 'vgbcbcd', `picture` = '1556129250d_SP-TESEI-TITANIUM-SP-5061-03.png', `modified_at` = '2019-04-02 06:07:30' WHERE `brands`.`id` = 4;";
$query = "UPDATE `brands` SET 
`title` = :title ,
`picture` = :picture ,
`is_active` = :is_active, 
`modified_at` = :modified_at 

WHERE `brands`.`id` = :id;";

//echo $query;die();

$sth = $conn->prepare($query);
$sth->bindParam(':id',$id);
$sth->bindParam(':title',$title);
$sth->bindParam(':picture',$dest_filename);
$sth->bindParam(':is_active',$is_active);
$sth->bindParam(':modified_at',date('Y-m-d h:i:s',time()));
$result = $sth->execute();

if($result){
    Message::set('Brand has been Updated successfully.');
    header("location:index.php");
}else{
    Message::set('Sorry.. There is a problem. Please try again later');
    //log
    header("location:create.php");
}