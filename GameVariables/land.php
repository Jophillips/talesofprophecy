<?php

/*conection info*/
$a='localhost';
$b='atheistdeity';
$c='1491625';
$d=mysql_connect("$a","$b","$c") or die ("FAILED TO CONNECT TO SQL");
$e=mysql_select_db("gamevars",$d) or die("FAILED TO CONNECT TO DATABASE");
unset($a);unset($b);unset($c);

mysql_query("create table land (
coordY varchar(2) not null,
coordX varchar(2) not null,
faction varchar(4) not null,
division varchar(255) not null,
PRIMARY KEY(coordY,coordX) )")	or die ("FAILED TO CREATE TABLE");
mysql_query("alter table land alter faction set default 'none'")	or die ("FAILED TO SET DEFAULT");

for($i='1';$i<17 ;$i++)
{
for($f='A';$f<'L' ;$f++)
{
$coordY=$i;
$coordX=$f;
mysql_query("insert into land (coordY,coordX) values ('$coordY','$coordX')")		or die ("FAILED TO EXECUTE QUERY");
}
}
?>