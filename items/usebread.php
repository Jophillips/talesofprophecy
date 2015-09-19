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
$hp=$o3['HP'];
$chp=$o3['currentHP'];
$bread=$o3['bread'];
if ($chp+25<=$hp)
{
$chp= $chp+25;
$bread= $bread -1;
$q1="Update charinfo set bread='$bread' where userid='$userid'";
$r1=mysql_query($q1);
$q2="Update charinfo set currenthp='$chp' where userid='$userid'";
$r2=mysql_query($q2);
}
if ($chp=$hp)
{
echo "You are at full health";
}
Else
{
$chp= $chp=$hp;
$bread= $bread -1;
$q1="Update charinfo set bread='$bread' where userid='$userid'";
$r1=mysql_query($q1);
$q2="Update charinfo set chp='$chp' where userid='$userid'";
$r2=mysql_query($q2);
}
 
header('Location: ..\backpack.php');
