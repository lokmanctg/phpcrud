<?php

use Bitm\Utility\Message;

//print_r($_REQUEST);


include_once($_SERVER["DOCUMENT_ROOT"]."/phpcrud/bootstrap.php");
//collect the data
$id = $_POST['id'];
$title = $_POST['title'];
$link = $_POST['link'];
$promotional_message = $_POST['promotional_message'];
$pre_picture = $_POST['pre_picture'];
$is_active = $_POST['is_active'];

// dd($_FILES);



//else can be avoid by using $is_active = 0;
if(array_key_exists('is_active',$_POST)){
    $is_active = 1;// also can be use $is_active = $_POST['is_active'];
}
else{
    $is_active = 0;
}



if($_FILES['picture']['size']>0){
$target_file =  $_FILES['picture']['tmp_name'];
$filename = time()."_".$_FILES['picture']['name'];
$dest_file =  $_SERVER['DOCUMENT_ROOT'].'/phpcrud/uploads/'.$filename;
// echo $_FILES['picture']['tmp_name'];
//echo $_FILES['picture']['size'];
$is_uploaded = move_uploaded_file($target_file,$dest_file);
}
if ($is_uploaded){
    $dest_filename = $filename;
}
else{
    $dest_filename = $pre_picture;
}




$query = "UPDATE `banners` SET `title` = :title,
 `picture` = :picture, 
`link` = :link, 
`is_active` = :is_active,
 `modified_at` = :modified_at,
 `promotional_message` = :promotional_message  WHERE `banners`.`id` = :id;";


$sth = $conn->prepare($query);
$sth->bindParam(':id',$id);
$sth->bindParam(':title',$title);
$sth->bindParam(':link',$link);
$sth->bindParam(':picture',$dest_filename);
$sth->bindParam(':promotional_message',$promotional_message);
$sth->bindParam(':is_active',$is_active   );
$sth->bindParam(':modified_at',date('Y-m-d h:i:s',time()));
$result = $sth->execute();

//print_r($result);
//redirect to index page

if($result){
    Message::set('Banner has been Updated successfully.');
    header("location:index.php");
}else{
    Message::set('Sorry.. There is a problem. Please try again later');
    //log
    header("location:create.php");
}