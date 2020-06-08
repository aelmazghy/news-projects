<?php

$host = "localhost";
$user = "root";
$password = "secret";
$dbname = "croustillance";



//$db = new PDO($host,$dbname, $user, $password);
$db = new PDO('mysql:host=localhost;dbname=croustillance', $user, $password);



$sql = $db->prepare("SELECT * FROM news ORDER BY date");
$sql->execute();
$news = $sql->fetchAll();



?>
<pre>
    <?php print_r(json_encode($news)); ?>
</pre>


