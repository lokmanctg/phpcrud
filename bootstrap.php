<?php
include_once("vendor/autoload.php");
session_start();
define('WEBROOT','http://localhost/phpcrud/');
define('ADMIN','http://localhost/phpcrud/admin/');
define('VIEW','http://localhost/phpcrud/admin/views/');
define('LIB','http://localhost/phpcrud/lib/');
define('CSS','http://localhost/phpcrud/lib/css/');
define('JS','http://localhost/phpcrud/lib/js/');
define('IMG','http://localhost/phpcrud/lib/img/');
define('UPLOADS','http://localhost/phpcrud/uploads/');

define('DOCROOT',$_SERVER['DOCUMENT_ROOT'].'/phpcrud/');

//connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpcrud";

//connecting to database
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//for buffer and take all file in variable. later anyone can print to take variable
ob_start();
include_once($_SERVER["DOCUMENT_ROOT"]."/phpcrud/admin/views/layouts/admin.php");
$layout = ob_get_contents();
ob_end_clean();






//FOR LOKKING PICTURE
function d($var){
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}


function dd($var){
    d($var);
    die();
}
