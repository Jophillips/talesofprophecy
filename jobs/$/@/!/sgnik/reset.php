<?php


/*conection info*/
$a='localhost';
$b='atheistdeity';
$c='1491625';
$d=mysql_connect("$a","$b","$c") or die ("FAILED TO CONNECT TO SQL");
$e=mysql_select_db("userinfo",$d) or die("FAILED TO CONNECT TO DATABASE");
unset($a);unset($b);unset($c);
$q3="select userid from charinfo";
$r3=mysql_query($q3)
	or die("FAILED TO EXECUTE QUERY");
$o3=mysql_fetch_array($r3,MYSQL_ASSOC);
require('../../../../../inflation.php');



$q5="select MAX(userid) from charinfo";
$r5=mysql_query($q5)
	or die("FAILED TO EXECUTE QUERY");
$o5=mysql_fetch_array($r5,MYSQL_ASSOC);

$the=$o5['MAX(userid)'];


$userid=$o3['userid'];


for ($userid;$userid<=$the;$userid++)
{
$q4="select * from charinfo where userid='$userid'";
$r4=mysql_query($q4)
	or die("FAILED TO EXECUTE QUERY");
$o4=mysql_fetch_array($r4,MYSQL_ASSOC);
$hp=$o4['HP'];
$job=$o4['job'];
$chp=$o4['currentHP'];
$gold=$o4['gold'];
$silver=$o4['silver'];
$stamina=$o4['stamina'];
$Cstamina=$o4['Cstamina'];

$Cstamina = $stamina;
$chp = $hp;

$q2="Update charinfo set currentHP='$chp' where userid='$userid'";
$r2=mysql_query($q2);

$q67="Update charinfo set Cstamina='$Cstamina' where userid='$userid'";
$r67=mysql_query($q67);




if ($job=='King')
{
$gold = $gold+($inflationgold*500);
$silver=$silver+($inflationsilver*500);
$q1="Update charinfo set gold='$gold' where userid='$userid'";
$q3="Update charinfo set silver='$silver' where userid='$userid'";
$r1=mysql_query($q1);
$r3=mysql_query($q3);
}
if ($job=='none')
{
$gold = $gold+5;
$silver=$silver+5;
$q1="Update charinfo set gold='$gold' where userid='$userid'";
$q3="Update charinfo set silver='$silver' where userid='$userid'";
$r1=mysql_query($q1);
$r3=mysql_query($q3);
}

if ($job=='')
{
$gold = $gold+5;
$silver=$silver+5;
$q1="Update charinfo set gold='$gold' where userid='$userid'";
$q3="Update charinfo set silver='$silver' where userid='$userid'";
$r1=mysql_query($q1);
$r3=mysql_query($q3);
}

if ($job=='Miner')
{
$gold = $gold+($inflationgold*10);
$silver=$silver+($inflationsilver*10);
$q1="Update charinfo set gold='$gold' where userid='$userid'";
$q3="Update charinfo set silver='$silver' where userid='$userid'";
$r1=mysql_query($q1);
$r3=mysql_query($q3);
}

if ($job=='Axeman')
{
$gold = $gold+($inflationgold*10);
$silver = $silver+($inflationsilver*10);
$q1="Update charinfo set gold='$gold' where userid='$userid'";
$q3="Update charinfo set silver='$silver' where userid='$userid'";
$r1=mysql_query($q1);
$r3=mysql_query($q3);
}
echo "<b>Userid </b> $userid <b> Gold :</b> $gold <b>Silver :</b> $silver <b>Hp:</b> $chp / $hp <b>Stamina</b> $Cstamina / $stamina<br>";
}

?>
