<?php
/*conection info*/
$a='localhost';
$b='atheistdeity';
$c='1491625';
$d=mysql_connect("$a","$b","$c") or die ("FAILED TO CONNECT TO SQL");
$e=mysql_select_db("userinfo",$d) or die("FAILED TO CONNECT TO DATABASE");
unset($a);unset($b);unset($c);
echo"
<form method=post action='Cclass.php'>
name<input type='text' name='name'><br>
hp<input type='text' name='hp'><br>
str<input type='text' name='str'><br>
def<input type='text' name='def'><br>
agl<input type='text' name='agl'><br>
acc<input type='text' name='acc'><br>
eva<input type='text' name='eva'><br>
<input type='submit' value='create class'>
</form>
";
?>