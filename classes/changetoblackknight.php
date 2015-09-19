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
$class = 'Black Knight';
$q1="Update charinfo set class='$class' where userid='$userid'";
$r1=mysql_query($q1);

 
header('Location: ..\class.php');
