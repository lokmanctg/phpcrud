<?php

use Bitm\Utility\Message;

include_once($_SERVER["DOCUMENT_ROOT"]."/phpcrud/bootstrap.php");
$id = $_GET['id'];
$query = "UPDATE banners SET  is_active = 1 WHERE id=:id;";

$sth = $conn->prepare($query);
$sth->bindParam(':id',$id);
$result = $sth->execute();

//redirect to index page
if($result){
    Message::set('Banner has been activated successfully.');
   // header("location:inactive.php");
    header("location:inactive.php");
}else{
    Message::set('Sorry.. There is a problem. Please try again later');
    //log
    header("location:active.php");
}


