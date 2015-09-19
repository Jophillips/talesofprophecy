<?php
/*conection info*/
$a='localhost';
$b='atheistdeity';
$c='1491625';
$d=mysql_connect("$a","$b","$c") or die ("FAILED TO CONNECT TO SQL");
$e=mysql_select_db("gamevars",$d) or die("FAILED TO CONNECT TO DATABASE");
unset($a);unset($b);unset($c);
?>
<?php
/*requires empty table exp with columns level(int3) next(int8) total(int10)*/
$Ntotal='0';
$total='0';
$next='100';
for ($i='1';$i<=999;$i++)
{
$lv=$i;
$Nnext=$next+25*($i-1);
$next=$Nnext;
$q="insert into exp (level,next,total) values ('$lv','$Nnext','$Ntotal')";
$r=mysql_query($q)
	or die("FAILED TO EXECUTE QUERY");
$Ntotal=$total+$next;
$total=$Ntotal;
}
?>