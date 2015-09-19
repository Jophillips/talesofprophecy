<?php
/*conection info*/
$a='localhost';
$b='atheistdeity';
$c='1491625';
$d=mysql_connect("$a","$b","$c") or die ("FAILED TO CONNECT TO SQL");
$e=mysql_select_db("gamevars",$d) or die("FAILED TO CONNECT TO DATABASE");
unset($a);unset($b);unset($c);
$name=$HTTP_POST_VARS['name'];
$hp=$HTTP_POST_VARS['hp'];
$str=$HTTP_POST_VARS['str'];
$def=$HTTP_POST_VARS['def'];
$agl=$HTTP_POST_VARS['agl'];
$acc=$HTTP_POST_VARS['acc'];
$eva=$HTTP_POST_VARS['eva'];
$q1="INSERT INTO classes (name,hpplus,strplus,defplus,aglplus,accplus,evaplus) VALUES ('$name','$hp','$str','$def','$agl','$acc','$eva')";
$r1=mysql_query($q1)
	or die ("GOD DAMNIT I GUESS I GOTTA INPUT IT AGAIN");
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