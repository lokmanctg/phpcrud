<?php

//print_r($_POST);
//die();

include_once($_SERVER["DOCUMENT_ROOT"]."/phpcrud/bootstrap.php");
use Bitm\Utility\Message;
use Bitm\Utility\Utility;
//collect the data
$title = $_POST['title'];
$link = $_POST['link'];
$promotional_message = $_POST['promotional_message'];



//else can be avoid by using $is_active = 0;
if(array_key_exists('is_active',$_POST)){
    $is_active = 1;// also can be use $is_active = $_POST['is_active'];
}
else{
    $is_active = 0;
}
//dd($_FILES);

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
//die($uploaded);


//$title = $_POST['promotional_message'];
//$title = $_POST['html_banner'];


//prepare the insert query
//selection query



$query = "INSERT INTO `banners` 
          (`id`,
           `title`,
           `picture`, 
           `link`, 
           `promotional_message`, 
           `html_banner`, 
           `is_active`, 
           `is_draft`,  
           `max_display`,
           `created_at`, 
           `modified_at`)
    VALUES (NULL, 
            :title,
            :picture,
            :link,
            :promotional_message,
            NULL,
            :is_active, 
            NULL,
          
            NULL,
            :created_at,
            :modified_at);";

//$query = "INSERT INTO `products` (
//`brand`,
//`category`,
// `title`,
// `picture`,
// `short_description`,
// `description`,
// `cost`,
// `mrp`,
// `special_price`,
// `is_new`,
// `is_draft`,
// `is_active`,
// `total_sales`,
//  `is_deleted`,
//  `created_at`,
//  `modified_at`)
//  VALUES (
//  NULL,
//  NULL,
//  :title,
//  NULL,
//  NULL,
//  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);";

$sth = $conn->prepare($query);
$sth->bindParam(':title',$title);
$sth->bindParam(':link',$link);
$sth->bindParam(':picture',$dest_filename);
$sth->bindParam(':promotional_message',$promotional_message);
$sth->bindParam(':is_active',$is_active);
$sth->bindParam(':created_at',date('Y-m-d h:i:s',time()));
$sth->bindParam(':modified_at',date('Y-m-d h:i:s',time()));
//$sth->bindParam(':promotional_message',$promotional_message);
//$sth->bindParam(':html_banner',$html_banner);
$result = $sth->execute();

//print_r($result);
//redirect to index page
if($result){
Message::set('Banner has been added successfully.');
header("location:index.php");
}else{
    Message::set('Sorry.. There is a problem. Please try again later');
    //log
    header("location:create.php");
}