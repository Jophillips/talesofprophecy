<?php
	require('connection.php');

	echo"<table><tr><td>Level:</td><td>To next:</td><td>Total:</td></tr>";
	for($i='1';$i<1000;$i++)
	{
	$queer=mysql_fetch_array(mysql_query("select * from exp where level='$i'"),MYSQL_ASSOC);
	$level=$queer['level'];
	$next=$queer['next'];
	$total=$queer['total'];
	echo"<tr><td>$level</td><td>$next</td><td>$total</td></tr>";
	}
	echo"</table>";
?>