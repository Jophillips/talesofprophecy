<?php
	require('connection.php');
	require('generic.php');
	$uid=$_POST['uid'];
	$q1="select * from charinfo where userid='$uid'";
	$r1=mysql_query($q1)or die("FAILED TO EXECUTE QUERY");
	$stat=mysql_fetch_array($r1,MYSQL_ASSOC);
	$q2="select login from register where userid='$uid'";
	$r2=mysql_query($q2)or die("FAILED TO EXECUTE QUERY");
	$o2=mysql_fetch_array($r2,MYSQL_ASSOC);
	echo "<center>
<table class='text2' bgcolor='000000' cellspacing='0' cellpadding='0' width='350'>
<tr height='1'>
<td bgcolor='FFAA33'></td>
<td bgcolor='FFAA33'></td>
<td bgcolor='FFAA33'></td>
<td bgcolor='FFAA33'></td>
</tr>
<tr>
<td width= '1' bgcolor='FFAA33'></td>
<td>Username:</td>
<td>";
	echo $o2['login'];
	echo "</td>
<td width= '1' bgcolor='FFAA33'></td>
</tr>
<tr>
<td width= '1' bgcolor='FFAA33'></td>
<td>Userid:</td>
<td>$uid</td>
<td width= '1' bgcolor='FFAA33'></td>
</tr>
<tr>
<td width= '1' bgcolor='FFAA33'></td>
<td><br><b>Stats</b></td>
<td></td>
<td width= '1' bgcolor='FFAA33'></td>
</tr>
<tr>
<td width= '1' bgcolor='FFAA33'></td>
<td>HP:</td>
<td>";
	echo $stat['currentHP'];
	echo "/";
	echo $stat['HP'];
	echo "</td>
<td width= '1' bgcolor='FFAA33'></td>
</tr>
<tr>
<td width= '1' bgcolor='FFAA33'></td>
<td>Strength:</td>
<td>";
	echo $stat['STR'];
	echo "</td>
<td width= '1' bgcolor='FFAA33'></td>
</tr>
<tr>
<td width= '1' bgcolor='FFAA33'></td>
<td>Defence:</td>
<td>";
	echo $stat['DEF'];
	echo "</td>
<td width= '1' bgcolor='FFAA33'></td>
</tr>
<tr>
<td width= '1' bgcolor='FFAA33'></td>
<td>Accuracy:</td>
<td>";
	echo $stat['ACC'];
	echo "</td>
<td width= '1' bgcolor='FFAA33'></td>
</tr>
<tr>
<td width= '1' bgcolor='FFAA33'></td>
<td>Evasion:</td>
<td>";
	echo $stat['EVA'];
	echo "</td>
<td width= '1' bgcolor='FFAA33'></td>
</tr>
<tr>
<td width= '1' bgcolor='FFAA33'></td>
<td>Agility:</td>
<td>";
	echo $stat['AGL'];
	echo "</td>
<td width= '1' bgcolor='FFAA33'></td>
</tr>
<tr>
<td width= '1' bgcolor='FFAA33'></td>
<td><br><b>Currency</b></td>
<td></td>
<td width= '1' bgcolor='FFAA33'></td>
</tr>
<tr>
<td width= '1' bgcolor='FFAA33'></td>
<td>Silver:</td>
<td>";
	echo $stat['silver'];
	echo "</td>
<td width= '1' bgcolor='FFAA33'></td>
</tr>
<tr>
<td width= '1' bgcolor='FFAA33'></td>
<td>Gold:</td>
<td>";
	echo $stat['gold'];
	echo "</td>
<td width= '1' bgcolor='FFAA33'></td>
</tr>
<tr>
<td width= '1' bgcolor='FFAA33'></td>
<td>Gems:</td>
<td>";
	echo $stat['gems'];
	echo "</td>
<td width= '1' bgcolor='FFAA33'></td>
</tr>
<tr>
<td width= '1' bgcolor='FFAA33'></td>
<td><br><b>Record</b></td>
<td><br></td>
<td width= '1' bgcolor='FFAA33'></td>
</tr>
<tr>
<td width= '1' bgcolor='FFAA33'></td>
<td>Wins:</td>
<td>";
	echo $stat['wins'];
	echo "</td>
<td width= '1' bgcolor='FFAA33'></td>
</tr>
<tr>
<td width= '1' bgcolor='FFAA33'></td>
<td>Losses:</td>
<td>";
	echo $stat['losses'];
	echo "</td>
<td width= '1' bgcolor='FFAA33'></td>
</tr>
<tr>
<td width= '1' bgcolor='FFAA33'></td>
<td>Draws:</td>
<td>";
	echo $stat['draws'];
	echo "</td>
<td width= '1' bgcolor='FFAA33'></td>
</tr>
<tr height='1'><td bgcolor='FFAA33'></td><td bgcolor='FFAA33'></td><td bgcolor='FFAA33'></td><td bgcolor='FFAA33'></td></tr>
</table>";
	echo "
<br>
<table><tr><td>
<form action='send.php' method='post'>
<input type='hidden' name='uid' value='$uid'>
<input type='submit' value='Message' class='inputs'>
</form>
</td>
<td>
<form action='battle.php' method='post'>
<input type='hidden' name='uid' value='$uid'>
<input type='submit' value='Challenge' class='inputs'>
</form>
</td></tr><tr><td>
<form action='search.php'>
<input type='Submit' value='back' class='inputs'>
</form></td></tr></table></center>";
	require('closing_tags.php');
	?>