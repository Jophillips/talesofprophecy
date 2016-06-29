<?php

	/*conection info*/
	$a='localhost';
	$b='joeyphil_tales';
	$c='talesop40';
	$d2=mysql_connect("$a","$b","$c") or die ("FAILED TO CONNECT TO SQL");
	$e2=mysql_select_db("joeyphil_gamevars",$d2) or die("FAILED TO CONNECT TO DATABASE");
	unset($a);unset($b);unset($c);
?>