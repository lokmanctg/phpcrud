<?php
//collect the data
$id = $_POST['id'];
$title = $_POST['title'];
$picture = $_POST['picture'];

//connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpcrud";

//connecting to database
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "UPDATE `sponsers` SET 
`title` = :title,
`picture` = :picture 
WHERE `sponsers`.`id` = :id;";

$sth = $conn->prepare($query);
$sth->bindParam(':id',$id);
$sth->bindParam(':title',$title);
$sth->bindParam(':picture',$picture);
$result = $sth->execute();

//redirect to index page
header("location:index.php");
