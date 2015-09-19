
<?php

require('connection.php');

$to=$_POST['uid'];
$from=$_SESSION['userid'];

require('generic.php');

$q1="select * from charinfo where userid='$to'";
$r1=mysql_query($q1)
	or die("FAILED TO EXECUTE QUERY");
$stat=mysql_fetch_array($r1,MYSQL_ASSOC);

$e=mysql_select_db("userinfo",$d) or die("FAILED TO CONNECT TO DATABASE");
$toUser=$stat['username'];

echo"<center>
<form action='thepigeon.php' method='post'>
<table cellspacing='0' cellpadding='0'>
<tr><td class='text'>
<b>To: $toUser</b>
<br>
<br>
Subject:</td></tr><tr><td><input type='text' class='inputs' size=100' name='subject'></td></tr>
<tr></tr><tr><td class='text'>Message:</td></tr><tr><td><textarea name='body' rows='10' cols='100' class='inputs'></textarea></td></tr>
<input type='hidden' name='to' value='$to'>
<input type='hidden' name='from' value='$from'>
<tr><td><input type='submit' value='Send' class='inputs'></td></tr>
</table></form></center>
";

require('closing_tags.php');
?>