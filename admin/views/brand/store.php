<?php

use Bitm\Utility\Message;

include_once($_SERVER["DOCUMENT_ROOT"] . "/phpcrud/bootstrap.php");


$target_file = $_FILES['picture']['tmp_name'];
$filename = time()."_".str_replace(' ','-',$_FILES['picture']['name']);
$dest_file = $_SERVER['DOCUMENT_ROOT'].'../phpcrud/uploads/'.$filename;
$is_uploaded = move_uploaded_file($target_file, $dest_file);

if($is_uploaded){
    $dest_filename = $filename;
}else{
    $dest_filename = "";
}

//collect the data
$title = $_POST['title'];


$is_active = 0;
if(array_key_exists('is_active',$_POST)){
    $is_active = $_POST['is_active'];
}

//prepare the insert query
//selection query
$query = "INSERT INTO `brands` 
( `title`, 
`picture`,
`is_active`, 


`created_at`, 
`modified_at`)
  VALUES ( :title, 
          :picture, 
          :is_active,

  
          :created_at,
          :modified_at);
 ";

$sth = $conn->prepare($query);
$sth->bindParam(':title',$title);
$sth->bindParam(':picture',$filename);
$sth->bindParam(':is_active',$is_active);
$sth->bindParam(':created_at',date('Y-m-d h:i:s',time()));
$sth->bindParam(':modified_at',date('Y-m-d h:i:s',time()));
$result = $sth->execute();


if($result){
    Message::set('Brand has been added successfully.');
    header("location:index.php");
}else {
    Message::set('Sorry.. There is a problem. Please try again later');
    //log
    header("location:create.php");
}