<?php

session_register('username');     //gather username
session_register('password');     //gather password
session_register('userid');     //gather userid
$userid= $_SESSION['userid'] ; //defines UseriD
$pass = $_SESSION['password'] ; //gather password
$username = $_SESSION['username'] ; //gather username

session_destroy();
unset($username,$password,$userid);

header('Location: index.php');

?>
