<?php
$leveled='no';
$myid=$_SESSION['userid'];
require('connection.php');


$myid=$_SESSION['userid'];
/*OLD STATS*/
mysql_select_db("userinfo",$d) or die("FAILED TO CONNECT TO DATABASE");
$queer=mysql_query("select * from charinfo where userid='$myid'");
$old=mysql_fetch_array($queer,MYSQL_ASSOC);
$mylv=$old['level'];
$hp1=$old['HP'];
$str1=$old['STR'];
$def1=$old['DEF'];
$acc1=$old['ACC'];
$agl1=$old['AGL'];
$fva1=$old['EVA'];
$faction=$old['faction'];
$class=$old['class']; 

for($i=1;$i<1000;$i++)
{
$checklevel=$mylv +1;
if($checklevel<=999)
{
$f=mysql_select_db("gamevars",$d) or die("FAILED TO CONNECT TO DATABASE");
$rcl2=mysql_query("select total from exp where level='$checklevel'");
$rcl=mysql_fetch_array($rcl2,MYSQL_ASSOC);
$needed=$rcl['total'];
if($Texp>$needed)
{
$leveled='yes';
/*LITERAL INCREASE IN LEVEL*/
$mylevel=$checklevel;
$mylv=$mylevel;
$f=mysql_select_db("userinfo",$d) or die("FAILED TO CONNECT TO DATABASE");
mysql_query("update charinfo set level='$mylevel' where userid='$myid'");

/*FACTION BONUSES*/
if($faction=='Bauholzia' or $faction=='bauholzia')
{
$faction='blue';
}
if($faction=='Acieria' or $faction=='acieria')
{
$faction='red';
}
$f=mysql_select_db("gamevars",$d) or die("FAILED TO CONNECT TO DATABASE");
$fq=mysql_query("select * from faction where name='$faction'");
$Faction=mysql_fetch_array($fq,MYSQL_ASSOC);
$hp2=$Faction['hpplus'];
$str2=$Faction['strplus'];
$def2=$Faction['defplus'];
$acc2=$Faction['accplus'];
$agl2=$Faction['aglplus'];
$fva2=$Faction['evaplus'];

/*CLASS BONUSES*/
$cq=mysql_query("select * from classes where name='$class'");
$Class=mysql_fetch_array($cq,MYSQL_ASSOC);
$hp3=$Class['hpplus'];
$str3=$Class['strplus'];
$def3=$Class['defplus'];
$acc3=$Class['accplus'];
$agl3=$Class['aglplus'];
$fva3=$Class['evaplus'];

/*SEND NEW STATS*/
$f=mysql_select_db("userinfo",$d) or die("FAILED TO CONNECT TO DATABASE");
$newhp=$hp1+$hp2+$hp3;
$newstr=$str1+$str2+$str3;
$newdef=$def1+$def2+$def3;
$newacc=$acc1+$acc2+$acc3;
$newagl=$agl1+$agl2+$agl3;
$neweva=$fva1+$fva2+$fva3;

mysql_query("update charinfo set HP='$newhp' where userid='$myid'");
$hp1=$newhp;
mysql_query("update charinfo set STR='$newstr' where userid='$myid'");
$str1=$newstr;
mysql_query("update charinfo set DEF='$newdef' where userid='$myid'");
$def1=$newdef;
mysql_query("update charinfo set ACC='$newacc' where userid='$myid'");
$acc1=$newacc;
mysql_query("update charinfo set AGL='$newagl' where userid='$myid'");
$agl1=$newagl;
mysql_query("update charinfo set EVA='$neweva' where userid='$myid'");
$fva1=$neweva;
}
else
{
break;
}
}

/*tonext fix*/
if($leveled=='yes')
$checklevel=$mylv +1;
if($checklevel<=999)
{
$f=mysql_select_db("gamevars",$d) or die("FAILED TO CONNECT TO DATABASE");
$rcl2=mysql_query("select total from exp where level='$checklevel'");
$rcl=mysql_fetch_array($rcl2,MYSQL_ASSOC);
$needed=$rcl['total'];
$tonext=$needed-$Texp;
$f=mysql_select_db("userinfo",$d) or die("FAILED TO CONNECT TO DATABASE");
}
else
{
$tonext='0';
}
/*display*/
echo "<br><br><center><h4 color='FFFFFF'>LevelUp</h4></center>
<table bgcolor='410000' align='center' class='text'>
<tr><td>Max HP</td><td>$newhp</td></tr>
<tr><td>Strength</td><td>$newstr</td></tr>
<tr><td>Defence</td><td>$newdef</td></tr>
<tr><td>Accuracy</td><td>$newacc</td></tr>
<tr><td>Agility</td><td>$newagl</td></tr>
<tr><td>Evase</td><td>$neweva</td></tr>
<tr></tr>
<tr><td>To Next</td><td>$tonext</td></tr>
</table>";
}
?>