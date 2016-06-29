<?php
	require('connection.php');
	$to=$_POST['to'];
	$from=$_POST['from'];
	$body=$_POST['body'];
	$subject=$_POST['subject'];
	$e=mysql_select_db("messaging",$d) or die("FAILED TO CONNECT TO DATABASE");
	$inbox=mysql_fetch_array(mysql_query("select Contents from inbox where Owner='$to'"),MYSQL_ASSOC);
	$contents=$inbox['Contents'];
	$newcontents=$contents+1;
	mysql_query("update inbox set Contents='$newcontents' where Owner='$to'");
	mysql_query("insert into private (Contents, mTO,mFROM,body,subject) values ('$newcontents','$to','$from','$body','$subject')");
	$success='yes';
	$_POST['success']='yes';
	$_POST['by']='';
	$_POST['search']='';
	require('pegioncarriers.php');
	?>