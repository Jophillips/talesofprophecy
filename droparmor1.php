
<?php
require('connection.php');

$userid=$_SESSION['userid'];
require('Stats.php') ;


$armornew='none';
$q2="Update charinfo set armor='$armornew' where userid='$userid'";
$r2=mysql_query($q2);

header('Location: backpack.php');
?>
