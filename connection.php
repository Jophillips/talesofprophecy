<?php
session_register('username');

/*conection info*/
$a='where';
$b='who';
$c='password';
$d=mysql_connect("$a","$b","$c") or die ("FAILED TO CONNECT TO SQL");
$e=mysql_select_db("joeyphil_userinfo",$d) or die("FAILED TO CONNECT TO DATABASE1");
unset($a);unset($b);unset($c);
?>