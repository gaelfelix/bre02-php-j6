<?php
$host = "db.3wa.io";
$port = "3306";
$dbname = "gaelfelix_prenomnom_jp4";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname";

$user = "gaelfelix";
$password = "5a16f635a8837f52a7e3744f30344409";

$db = new PDO(
    $connexionString,
    $user,
    $password
);

var_dump($db);
?>