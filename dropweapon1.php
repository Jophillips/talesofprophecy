
<?php
require('connection.php');

$userid=$_SESSION['userid'];
require('Stats.php') ;


$weaponnew='none';
$q2="Update charinfo set weapon='$weaponnew' where userid='$userid'";
$r2=mysql_query($q2);

header('Location: backpack.php');
?>
