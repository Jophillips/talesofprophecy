<?php
require('connection.php');
require('generic.php');


$search=$_POST['search'];
$by=$_POST['by'];
if($search!='')
{
if($by=='id')
{
$q1="select login from register where userid='$search'";
$q2="select * from charinfo where userid='$search'";
$r1=mysql_query($q1)
	or die("FAILED TO EXECUTE QUERY");
$o3=mysql_fetch_array($r1,MYSQL_ASSOC);
$r3=mysql_query($q2)
	or die("FAILED TO EXECUTE QUERY");
$x=mysql_num_rows($r1);
}
if($by=='name')
{
$q3="select login,userid from register where login like '%$search%'";
$r3=mysql_query($q3)
	or die("FAILED TO EXECUTE QUERY");
$x=mysql_num_rows($r3);
}
echo "<table class='text'>";
for($i=1;$i <= $x;$i++)
{
if($by=='name')
{
$o3=mysql_fetch_array($r3,MYSQL_ASSOC);
$uid=$o3['userid'];
}
if($by=='id')
{
$uid=$search;
}

$q4="select * from charinfo where userid='$uid'";
$r4=mysql_query($q4)
	or die("FAILED TO EXECUTE QUERY");
$o4=mysql_fetch_array($r4,MYSQL_ASSOC);
echo "<tr class='text2'><td>";
echo "<font color='FFAA33'>";
if($by='name')
{
echo $o3['login'];
}
if($by=='id')
{
$rx=mysql_fetch_array(mysql_query("select login from register where userid='$uid'"),MYSQL_ASSOC);
echo $rx['login'];
}
echo "</font>";
echo "</td><td>";
echo $o4['currentHP'];echo "/";echo $o4['HP'];echo" HP";
echo "</td><td>";
echo "<font color='CCCCCC'>Level: </font>";echo $o4['level'];
echo "</td><td>";
echo "<font color='CCCCCC'>Faction: </font>";
$faction=$o4['faction'];
if($faction=='Bauholzia' or $faction=='bauholzia')
{
echo "<font color='000099'>$faction</font>";
}
elseif($faction=='Acieria' or $faction=='acieria')
{
echo "<font color='990000'>$faction</font>";
}
else
{
echo "<font color='999900'>$faction</font>";
}
echo "</td><td>";
echo "<font color='CCCCCC'>Division: </font>";echo $o4['division'];
echo "</td><td>";
echo "<font color='CCCCCC'>Location: </font>";echo $o4['city'];
echo"
</td><td><br>
<form action='status.php' method='post'>
<input type='hidden' name='uid' value='$uid'>
<input type='submit' value='stats' class='inputs'>
</form>
</td><td><br>
<form action='battle.php' method='post'>
<input type='hidden' name='uid' value='$uid'>
<input type='submit' value='challenge' class='inputs'>
</form>
</td></tr></table>
";
}
}

require('closing_tags.php');
?>