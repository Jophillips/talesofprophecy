<html>
<head>
<title>Tales Of Prophecy -Switching Weapons</title>
</head>
<body>


<?php
require('connection.php');
require('generic.php') ;
$weaponnew=$weapon2;
$weapon2new=$weapon;
$q1="Update charinfo set weapon='$weaponnew' where userid='$userid'";
$r1=mysql_query($q1);
$q2="Update charinfo set weapontwo='$weapon2new' where userid='$userid'";
$r2=mysql_query($q2);

header('Location: backpack.php');
?>
