<?php

$host = "localhost";
$user = "root";
$password = "secret";
$dbname = "croustillance";



//$db = new PDO($host,$dbname, $user, $password);
$db = new PDO('mysql:host=localhost;dbname=croustillance', $user, $password);



$sql = $db->prepare("SELECT id,title,date,description,imag,imgAlt,urltext,urlLink,urlType FROM news");
$sql->execute();

$news = $sql->fetchAll(PDO::FETCH_ASSOC);


?>

