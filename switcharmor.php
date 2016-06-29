<html>
  <head>
    <title>Tales Of Prophecy -Switching armors
    </title>
  </head>
  <body>
    <?php
require('connection.php');
require('generic.php');
$armornew  = $armor2;
$armor2new = $armor;
$q1        = "Update charinfo set armor='$armornew' where userid='$userid'";
$r1        = mysql_query($q1);
$q2        = "Update charinfo set armortwo='$armor2new' where userid='$userid'";
$r2        = mysql_query($q2);
header('Location: backpack.php');
?>
