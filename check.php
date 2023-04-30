<?php
$email = filter_var(trim($_POST ['email']),FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST ['name']),FILTER_SANITIZE_STRING);
$name2 = filter_var(trim($_POST ['name2']),FILTER_SANITIZE_STRING);
$name3 = filter_var(trim($_POST ['name3']),FILTER_SANITIZE_STRING);
$login1 = filter_var(trim($_POST ['login1']),FILTER_SANITIZE_STRING);
$login2 = filter_var(trim($_POST ['login2']),FILTER_SANITIZE_STRING);
$login3 = filter_var(trim($_POST ['login3']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST ['pass']),FILTER_SANITIZE_STRING);

$mysql = new mysqli('localhost', 'root', 'root', 'register-bq');
$mysql->query("INSERT INTO `users` (`email`, `pass`, `name`, `name2`, `name3, `login1`, `login2`, `login3`) 
VALUES('$login', '$pass', '$name')");
$mysql->close();

header('Location: prof.html');

 ?>