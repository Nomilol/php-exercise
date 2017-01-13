<?php

$userName = $_POST['userName'];
$password = $_POST['password'];

setcookie('userName', $userName, time() + 3600);
setcookie('password', $password, time() + 3600);

echo '<div>' . $_COOKIE['userName'] . '</div>';
echo '<div>' . $_COOKIE['password'] . '</div>';