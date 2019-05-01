<?php

include_once($_SERVER["DOCUMENT_ROOT"] . "/phpcrud/bootstrap.php");

use Bitm\Utility\Message;
use Bitm\Utility\Utility;
//print_r($_POST);
//die();
//collect the data
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
//connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpcrud";

//connecting to database
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//prepare the insert query
//selection query
$query = "INSERT INTO `admins` ( `name`,
 `email`,
  `password`,
   `phone`,  
    `created_at`,
     `modified_at`)
 VALUES ( :name,
  :email,
   :password, 
   :phone,
    :created_at, 
    :modified_at);";

$sth = $conn->prepare($query);
$sth->bindParam(':name',$name);
$sth->bindParam(':email',$email);
$sth->bindParam(':password',$password);
$sth->bindParam(':phone',$phone);
$sth->bindParam(':created_at',date('Y-m-d h:i:s',time()));
$sth->bindParam(':modified_at',date('Y-m-d h:i:s',time()));
$result = $sth->execute();


if($result){
    Message::set('Admin data has been added successfully.');
    header("location:index.php");
}else{
    Message::set('Sorry.. There is a problem. Please try again later');
    //log
    header("location:create.php");
}

