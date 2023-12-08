
<?php
$user = "root";
$pwd = "";
$pdo = new PDO('mysql:host=localhost;dbname=examen',$user, $pwd);

if(!$pdo) echo "echec";
?>