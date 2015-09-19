<?php
/*conection info*/
$a='localhost';
$b='atheistdeity';
$c='1491625';
$d=mysql_connect("$a","$b","$c") or die ("FAILED TO CONNECT TO SQL");
$e=mysql_select_db("userinfo",$d) or die("FAILED TO CONNECT TO DATABASE");
require('../inflation.php');

$userid=$_SESSION['userid'];
$q3="select * from charinfo WHERE userid='$userid'";
$r3=mysql_query($q3)
	or die("FAILED TO EXECUTE QUERY");
$o3=mysql_fetch_array($r3,MYSQL_ASSOC);
$city=$o3['city'];
$class=$o3['class'];
$gold=$o3['gold'];
$silver=$o3['silver'];
$gems=$o3['gems'];
$iron=$o3['iron'];
$wood=$o3['wood'];
$level=$o3['level'];
$str=$o3['STR'];
$def=$o3['DEF'];
$agl=$o3['AGL'];
$eva=$o3['EVA'];
$acc=$o3['ACC'];
$hp=$o3['HP'];
$chp=$o3['currentHP'];
$stamina=$o3['stamina'];
$Cstamina=$o3['Cstamina'];
$weapon=$o3['weapon'];
$weapon2=$o3['weapontwo'];
$faction=$o3['faction'];
$division=$o3['division'];
$armor=$o3['armor'];
$armor2=$o3['armortwo'];
$bread=$o3['bread'];
$water=$o3['water'];
$rice=$o3['rice'];
$meat=$o3['meat'];
$fish=$o3['fish'];
$milk=$o3['milk'];
$fruit=$o3['fruit'];
$staminapotion=$o3['staminapotion'];
$healingpotion=$o3['healingpotion'];
$job=$o3['job'];


$inflationsilverX20=$inflationsilver*20;
$silver2 = $silver - $inflationsilverX20;
$iron2 = $iron - $inflationiron;
$wood2 = $wood - $inflationwood;

if ($silver>=$inflationsilverX20)
{
if ($iron>=$inflationiron)
{
if ($iron>=$inflationiron)
{

$q2="Update charinfo set silver='$silver2' where userid='$userid'";
$r2=mysql_query($q2);

$q5="Update charinfo set iron='$iron2' where userid='$userid'";
$r5=mysql_query($q5);

$q7="Update charinfo set wood='$wood2' where userid='$userid'";
$r7=mysql_query($q7);

$weapon = 'Axe';

$q1="Update charinfo set weapon='$weapon' where userid='$userid'";
$r1=mysql_query($q1);

header('Location: ../market.php');
}
else {echo "You do not have enough wood.";}
}
else {echo "You do not have enough iron.";}
}
else {echo "You do not have enough silver.";}

