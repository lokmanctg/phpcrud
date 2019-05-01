<?php
//collect the data
$title = $_POST['title'];
$picture = $_POST['picture'];

//$picture = $_POST['picture'];
//$picture = $_POST['picture'];

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
$query = "INSERT INTO `sponsers` (`title`, `picture`, `link`, `promotianl_message`, `html_banner`, `is_active`, `is_draft`, `soft_delete`, `created_at`, `modified_at`) VALUES (:title, :picture, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);";




$sth = $conn->prepare($query);
$sth->bindParam(':title',$title);
$sth->bindParam(':picture',$picture);
//$sth->bindParam(':picture',$picture);
$result = $sth->execute();


//redirect to index page
header("location:index.php");
