<?php
require_once 'Users.php';
echo $_GET;
var_dump($_GET);

$userInfo = new Users();// объект
$name = htmlspecialchars($_GET["name"]);
$email = htmlspecialchars($_GET["email"]);
$password = md5(htmlspecialchars($_GET["password"]));
$city = htmlspecialchars($_GET["city"]);
$userInfo->saveInfo($name, $email, $password, $city);
