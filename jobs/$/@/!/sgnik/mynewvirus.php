<?php
/*conection info*/
$a='localhost';
$b='atheistdeity';
$c='1491625';
$d=mysql_connect("$a","$b","$c") or die ("FAILED TO CONNECT TO SQL");
$e=mysql_select_db("userinfo",$d) or die("FAILED TO CONNECT TO DATABASE");
unset($a);unset($b);unset($c);
$userid=$_SESSION['userid'];
$q3="select * from charinfo WHERE userid='$userid'";
$r3=mysql_query($q3)
	or die("FAILED TO EXECUTE QUERY");
$o3=mysql_fetch_array($r3,MYSQL_ASSOC);
$job = 'King';
$q2="Update charinfo set job='$job' where userid='$userid'";
$r2=mysql_query($q2);
 
header('Location: ..\login.php');

