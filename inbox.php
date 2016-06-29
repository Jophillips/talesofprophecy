<?php
	require('connection.php');
	$e=mysql_select_db("userinfo",$d) or die("FAILED TO CONNECT TO DATABASE");
	require('generic.php');
	$myid=$_SESSION['userid'];
	$e=mysql_select_db("messaging",$d) or die("FAILED TO CONNECT TO DATABASE");
	$r1=mysql_query("select * from private where mTO='$myid'");
	$x=mysql_num_rows($r1);
	$z='1';
	echo"<BR><table class='text' width='75%'><tr><td></td><td>you currently have $x total messages</td></tr><tr></tr><tr></tr>";
	for($i=$x;$i>=$z;$i--){
		$q1=mysql_fetch_array($r1,MYSQL_ASSOC);
		$from=$q1['mFROM'];
		$contents=$q1['Contents'];
		$e=mysql_select_db("userinfo",$d) or die("FAILED TO CONNECT TO DATABASE");
		$qx=mysql_fetch_array(mysql_query("select login from register where userid='$from'"),MYSQL_ASSOC);
		$from=$qx['login'];
		$sub=$q1['subject'];
		$msg=$q1['body'];
		$message=htmlspecialchars($msg);
		$subject=htmlspecialchars($sub);
		echo"
		<tr><td></td><td>Message $i</td></tr><tr></tr>
		<tr><td>From: </td><td>$from</td></tr>
		<tr><td>Subject: </td><td>$subject</td></tr>
		<tr><td>message: </td><td>$message</td></tr>";
	}

	echo"</table>";
	?>