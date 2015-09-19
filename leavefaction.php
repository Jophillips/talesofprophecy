<?php

require('connection.php');

$userid=$_SESSION['userid'];
$faction = 'none';
$q1="Update charinfo set faction='$faction' where userid='$userid'";
$r1=mysql_query($q1);

header('Location: faction.php');