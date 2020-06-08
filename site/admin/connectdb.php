<?php

$host = "localhost";
$user = "root";
$password = "secret";
$dbname = "croustillance";



//$db = new PDO($host,$dbname, $user, $password);
$db = new PDO('mysql:host=localhost;dbname=croustillance', $user, $password);




?>

