
<?php


require('connection.php');


require('generic.php');

$success=$_POST['success'];
$Owner=$_SESSION['userid'];
$search=$_POST['search'];
$by=$_POST['by'];

$e=mysql_select_db("messaging",$d) or die("FAILED TO CONNECT TO DATABASE");
$cont=mysql_fetch_array(mysql_query("select Contents from inbox where Owner='$Owner'"),MYSQL_ASSOC);
$contents=$cont['Contents'];

echo "<br>";
if($success=='yes')
{
echo"<table><tr><td class='text'>With your message firmly tethered to its leg, the pigeon dissapeared onto the horizon.</td></tr></table><br>";
}
echo "
<table><tr><td class='text'><a href='inbox.php'>Inbox:</a>&nbsp$contents</td></tr>
<tr></tr>
<tr><td class='text'>Who would you like to message?</td>
</tr></table>
<table class='text2'><tr>
<td>Find </td>
<form action='pegioncarriers.php' method='post'>
<td><input type='text' name='search' class='inputs'></td>
<input type='hidden' name='first' value='no'>
<td> by <SELECT class='inputs' name='by' size='1'>
<option value='id' class='inputs'>userid
<option value='name' class='inputs' selected>name
</select></td></tr></table>
<input type='hidden' name='success' value='nonexistant'>
<table><tr><td><input type='submit' value='Search' class='inputs'></td></tr></form>
";
?>
<?php
if($search!='')
{
if($by=='id')
{
$id=$search;
$e=mysql_select_db("userinfo",$d) or die("FAILED TO CONNECT TO DATABASE");
$q1=mysql_fetch_array(mysql_query("select login from register where userid='$id'"),MYSQL_ASSOC);
$user=$q1['login'];
$o4=mysql_fetch_array(mysql_query("select * from charinfo where userid='$id'"),MYSQL_ASSOC);
$e=mysql_select_db("messaging",$d) or die("FAILED TO CONNECT TO DATABASE");
$q2=mysql_fetch_array(mysql_query("select Contents from inbox where Owner='$id'"),MYSQL_ASSOC);
$contents=$q2['Contents'];
$space=10-$contents;
echo "<table class='text'><tr>
<td><font color='FFAA33'>$user</font></td>
<td><font color='CCCCCC'>inbox:</font> ";echo"$contents";echo"/10</td><td>
";
echo "<font color='CCCCCC'>Faction:</font> ";echo $o4['faction'];
echo "</td><td>";
echo "<font color='CCCCCC'>Division: </font> ";echo $o4['division'];
echo"<td><form action='send.php' method='post'><input type='hidden' name='to' value='$id'>
<input type='submit' value='message' class='inputs'></form></td>
</tr></table>";
}
if($by=='name')
{
$e=mysql_select_db("userinfo",$d) or die("FAILED TO CONNECT TO DATABASE");
$r1=mysql_query("select login,userid from register where login like '%$search%'");
$x=mysql_num_rows($r1);
echo"<table class='text'>";
for($i=1;$i<=$x;$i++)
{
if($i!='1')
{
$e=mysql_select_db("userinfo",$d) or die("FAILED TO CONNECT TO DATABASE");
}
$q1=mysql_fetch_array($r1,MYSQL_ASSOC);
$id=$q1['userid'];
$user=$q1['login'];
$o4=mysql_fetch_array(mysql_query("select * from charinfo where userid='$id'"),MYSQL_ASSOC);
$e=mysql_select_db("messaging",$d) or die("FAILED TO CONNECT TO DATABASE");
$q2=mysql_fetch_array(mysql_query("select Contents from inbox where Owner='$id'"),MYSQL_ASSOC);
$contents=$q2['Contents'];
$space=10-$contents;
echo "<tr>
<td><font color='FFAA33'>$user</font></td>
<td><font color='CCCCCC'>inbox:</font> ";echo"$contents";echo"/10</td><td>
";
echo "<font color='CCCCCC'>Faction:</font> ";echo $o4['faction'];
echo "</td><td>";
echo "<font color='CCCCCC'>Division: </font> ";echo $o4['division'];
echo "</td><td><br>
<form action='status.php' method='post'>
<input type='hidden' name='uid' value='$id'>
<input type='submit' value='stats' class='inputs'>
</form></td><td><br>
<form action='send.php' method='post'><input type='hidden' name='to' value='$id'>
<input type='submit' value='message' class='inputs'></form></td>
</tr>";

}
echo "</table>";
}
}
?>
