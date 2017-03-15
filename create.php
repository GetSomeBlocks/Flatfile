<?php

$name = $_POST["name"];
$email = $_POST["email"];
$age = $_POST["age"];
$bio = $_POST["bio"];

$user = array(
  'name' => $name,
  'email' => $email,
  'age' => $age,
  'bio' => $bio
);

$dir = "../data/users/";
file_put_contents($dir.$name,serialize($user));

?>
