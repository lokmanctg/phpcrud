<?php
//print_r($_REQUEST);
//die();
include_once($_SERVER["DOCUMENT_ROOT"]."/phpcrud/bootstrap.php");
use Bitm\Utility\Utility;
use Bitm\Utility\Message;
$id = $_POST['id'];
$email = $_POST['email'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$password = $_POST['password'];


$query = "UPDATE `admins` SET `name` = :name, `email` = :email, `password` = :password, `phone` = :phone WHERE `admins`.`id` = :id;";

$sth = $conn->prepare($query);
$sth->bindParam(':id',$id);
$sth->bindParam(':email',$email);
$sth->bindParam(':name',$name);
$sth->bindParam(':phone',$phone);
$sth->bindParam(':password',$password);
$result = $sth->execute();
//print_r($result);
//die();
//redirect to index page
if($result){
    Message::set('Admin data has been updated successfully.');
    header("location:index.php");
}else{
    Message::set('Sorry.. There is a problem. Please try again later');
    //log
    header("location:create.php");
}

