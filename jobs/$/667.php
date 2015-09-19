<?php
$a='localhost';
$b='atheistdeity';
$c='1491625';
$d=mysql_connect("$a","$b","$c") or die ("FAILED TO CONNECT TO SQL");
$e=mysql_select_db("userinfo",$d) or die("FAILED TO CONNECT TO DATABASE");
unset($a);unset($b);unset($c);
$q3="select userid from charinfo";
$r3=mysql_query($q3)
	or die("FAILED TO EXECUTE QUERY");
$o3=mysql_fetch_array($r3,MYSQL_ASSOC);


$q5="select sum(silver) from charinfo";
$r5=mysql_query($q5)
	or die("FAILED TO EXECUTE QUERY");
$o5=mysql_fetch_array($r5,MYSQL_ASSOC);

$the=$o5['sum(silver)'];

$q6="select sum(gold) from charinfo";
$r6=mysql_query($q6)
	or die("FAILED TO EXECUTE QUERY");
$o6=mysql_fetch_array($r6,MYSQL_ASSOC);

$the2=$o6['sum(gold)'];

$q7="select sum(gold) from charinfo where faction='Acieria '";
$r7=mysql_query($q7)
	or die("FAILED TO EXECUTE QUERY");
$o7=mysql_fetch_array($r7,MYSQL_ASSOC);

$Acieriagold=$o7['sum(gold)'];

$q8="select sum(silver) from charinfo where faction='Acieria '";
$r8=mysql_query($q8)
	or die("FAILED TO EXECUTE QUERY");
$o8=mysql_fetch_array($r8,MYSQL_ASSOC);

$Acieriasilver=$o8['sum(silver)'];

/* count pop */

$q9="select count(userid) from charinfo where faction='Acieria '";
$r9=mysql_query($q9)
	or die("FAILED TO EXECUTE QUERY");
$o9=mysql_fetch_array($r9,MYSQL_ASSOC);

$Acieriapop=$o9['count(userid)'];

/* Sum of gems Acieria */

$q10="select sum(gems) from charinfo where faction='Acieria'";
$r10=mysql_query($q10)
	or die("FAILED TO EXECUTE QUERY");
$o10=mysql_fetch_array($r10,MYSQL_ASSOC);

$Acieriagems=$o10['sum(gems)'];

/* Bauholzia */

$q11="select sum(gold) from charinfo where faction='Bauholzia'";
$r11=mysql_query($q11)
	or die("FAILED TO EXECUTE QUERY");
$o11=mysql_fetch_array($r11,MYSQL_ASSOC);

$Bauholziagold=$o11['sum(gold)'];

$q12="select sum(silver) from charinfo where faction='Bauholzia'";
$r12=mysql_query($q12)
	or die("FAILED TO EXECUTE QUERY");
$o12=mysql_fetch_array($r12,MYSQL_ASSOC);

$Bauholziasilver=$o12['sum(silver)'];

/* count pop */

$q13="select count(userid) from charinfo where faction='Bauholzia '";
$r13=mysql_query($q13)
	or die("FAILED TO EXECUTE QUERY");
$o13=mysql_fetch_array($r13,MYSQL_ASSOC);

$Bauholziapop=$o13['count(userid)'];

/* Sum of gems Bauholzia */

$q14="select sum(gems) from charinfo where faction='Bauholzia'";
$r14=mysql_query($q14)
	or die("FAILED TO EXECUTE QUERY");
$o14=mysql_fetch_array($r14,MYSQL_ASSOC);


$Bauholziagems=$o14['sum(gems)'];



/* none */

$q15="select sum(gold) from charinfo where faction='none'";
$r15=mysql_query($q15)
	or die("FAILED TO EXECUTE QUERY");
$o15=mysql_fetch_array($r15,MYSQL_ASSOC);

$nonegold=$o15['sum(gold)'];

$q16="select sum(silver) from charinfo where faction='none'";
$r16=mysql_query($q16)
	or die("FAILED TO EXECUTE QUERY");
$o16=mysql_fetch_array($r16,MYSQL_ASSOC);

$nonesilver=$o16['sum(silver)'];

/* count pop */

$q16="select count(userid) from charinfo where faction='none '";
$r16=mysql_query($q16)
	or die("FAILED TO EXECUTE QUERY");
$o16=mysql_fetch_array($r16,MYSQL_ASSOC);

$nonepop=$o16['count(userid)'];

/* Sum of gems none */

$q17="select sum(gems) from charinfo where faction='none'";
$r17=mysql_query($q17)
	or die("FAILED TO EXECUTE QUERY");
$o17=mysql_fetch_array($r17,MYSQL_ASSOC);


$nonegems=$o17['sum(gems)'];

echo "<table border='1'>
<tr><td>Faction</td><td>Population</td><td>Silver</td><td>Gold</td><td>Gems</td></tr>
<tr><td>Acieria</td><td>$Acieriapop</td><td>$Acieriasilver</td><td>$Acieriagold</td><td>$Acieriagems</td></tr>
<tr><td>Bauholzia</td><td>$Bauholziapop</td><td>$Bauholziasilver</td><td>$Bauholziagold</td><td>$Bauholziagems</td></tr>
<tr><td>None</td><td>$nonepop</td><td>$nonesilver</td><td>$nonegold</td><td>$nonegems</td></tr>
</table><br>";
echo "$the Silver<br>";
echo "$the2 Gold <br> <br><Table border='1'><tr>";
for($i='1';$i<2 ;$i++)
{
for($f='A';$f<'L' ;$f++)
{
$q18="select count(userid) from charinfo where city='($i,$f)'";
$r18=mysql_query($q18)
	or die("FAILED TO EXECUTE QUERY");
$o18=mysql_fetch_array($r18,MYSQL_ASSOC);
$pop1=$o18['count(userid)'];
echo "<td ";if ($pop1>=1){echo " bgcolor='yellow'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=10){echo "bgcolor='666600'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=50){echo "bgcolor='Blue'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=100){echo "bgcolor='green'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=250){echo "bgcolor='FF0000'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=0){echo "bgcolor='FCFCFC'>($i,$f)<br>Population:<b>$pop1</b><td>";}
}
}
echo "</tr><tr>";
for($i='2';$i<3 ;$i++)
{
for($f='A';$f<'L' ;$f++)
{
$q18="select count(userid) from charinfo where city='($i,$f)'";
$r18=mysql_query($q18)
	or die("FAILED TO EXECUTE QUERY");
$o18=mysql_fetch_array($r18,MYSQL_ASSOC);
$pop1=$o18['count(userid)'];

if($i=='2' and $f=='F')
{
$q19="select count(userid) from charinfo where city='Hetnieuwe'";
$r19=mysql_query($q19)
	or die("FAILED TO EXECUTE QUERY");
$o19=mysql_fetch_array($r19,MYSQL_ASSOC);
$pop2=$o19['count(userid)'];

echo "<td ";if ($pop2>=1 and $pop2<=10 ){echo "  bgcolor='yellow'>Hetnieuwe<br>Population:<b>$pop2</b><td>";}elseif ($pop2>=10  and $pop2<=50){echo "  bgcolor='lightBauholz'>Hetnieuwe<br>Population:<b>$pop2</b><td>";}elseif ($pop2>=50  and $pop2<=100){echo "  bgcolor='Blue'>Hetnieuwe<br>Population:<b>$pop2</b><td>";}elseif ($pop2>=100 and $pop2<=250){echo "  bgcolor='green'>Hetnieuwe<br>Population:<b>$pop2</b><td>";}elseif ($pop2>=250){echo "  bgcolor='FF0000'>Hetnieuwe<br>Population:<b>$pop2</b><td>";}elseif ($pop2>=0){echo "  bgcolor='FCFCFC'>Hetnieuwe<br>Population:<b>$pop2</b><td>";}
}
else
{
echo "<td ";if ($pop1>=1){echo " bgcolor='yellow'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=10){echo "bgcolor='666600'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=50){echo "bgcolor='Blue'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=100){echo "bgcolor='green'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=250){echo "bgcolor='FF0000'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=0){echo "bgcolor='FCFCFC'>($i,$f)<br>Population:<b>$pop1</b><td>";}
}
}
}
echo "</tr><tr>";
for($i='3';$i<4 ;$i++)
{
for($f='A';$f<'L' ;$f++)
{
$q18="select count(userid) from charinfo where city='($i,$f)'";
$r18=mysql_query($q18)
	or die("FAILED TO EXECUTE QUERY");
$o18=mysql_fetch_array($r18,MYSQL_ASSOC);
$pop1=$o18['count(userid)'];
echo "<td ";if ($pop1>=1){echo " bgcolor='yellow'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=10){echo "bgcolor='666600'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=50){echo "bgcolor='Blue'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=100){echo "bgcolor='green'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=250){echo "bgcolor='FF0000'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=0){echo "bgcolor='FCFCFC'>($i,$f)<br>Population:<b>$pop1</b><td>";}
}
}
echo "</tr><tr>";
for($i='4';$i<5 ;$i++)
{
for($f='A';$f<'L' ;$f++)
{
$q18="select count(userid) from charinfo where city='($i,$f)'";
$r18=mysql_query($q18)
	or die("FAILED TO EXECUTE QUERY");
$o18=mysql_fetch_array($r18,MYSQL_ASSOC);
$pop1=$o18['count(userid)'];
echo "<td ";if ($pop1>=1){echo " bgcolor='yellow'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=10){echo "bgcolor='666600'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=50){echo "bgcolor='Blue'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=100){echo "bgcolor='green'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=250){echo "bgcolor='FF0000'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=0){echo "bgcolor='FCFCFC'>($i,$f)<br>Population:<b>$pop1</b><td>";}
}
}
echo "</tr><tr>";
for($i='5';$i<6 ;$i++)
{
for($f='A';$f<'L' ;$f++)
{
$q18="select count(userid) from charinfo where city='($i,$f)'";
$r18=mysql_query($q18)
	or die("FAILED TO EXECUTE QUERY");
$o18=mysql_fetch_array($r18,MYSQL_ASSOC);
$pop1=$o18['count(userid)'];



}
}


echo "</tr><tr>";
for($i='6';$i<7 ;$i++)
{
for($f='A';$f<'L' ;$f++)
{
$q18="select count(userid) from charinfo where city='($i,$f)'";
$r18=mysql_query($q18)
	or die("FAILED TO EXECUTE QUERY");
$o18=mysql_fetch_array($r18,MYSQL_ASSOC);
$pop1=$o18['count(userid)'];
echo "<td ";if ($pop1>=1){echo " bgcolor='yellow'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=10){echo "bgcolor='666600'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=50){echo "bgcolor='Blue'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=100){echo "bgcolor='green'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=250){echo "bgcolor='FF0000'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=0){echo "bgcolor='FCFCFC'>($i,$f)<br>Population:<b>$pop1</b><td>";}
}
}
echo "</tr><tr>";
for($i='7';$i<8 ;$i++)
{
for($f='A';$f<'L' ;$f++)
{
$q18="select count(userid) from charinfo where city='($i,$f)'";
$r18=mysql_query($q18)
	or die("FAILED TO EXECUTE QUERY");
$o18=mysql_fetch_array($r18,MYSQL_ASSOC);
$pop1=$o18['count(userid)'];
echo "<td ";if ($pop1>=1){echo " bgcolor='yellow'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=10){echo "bgcolor='666600'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=50){echo "bgcolor='Blue'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=100){echo "bgcolor='green'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=250){echo "bgcolor='FF0000'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=0){echo "bgcolor='FCFCFC'>($i,$f)<br>Population:<b>$pop1</b><td>";}
}
}
echo "</tr><tr>";
for($i='8';$i<9 ;$i++)
{
for($f='A';$f<'L' ;$f++)
{
$q18="select count(userid) from charinfo where city='($i,$f)'";
$r18=mysql_query($q18)
	or die("FAILED TO EXECUTE QUERY");
$o18=mysql_fetch_array($r18,MYSQL_ASSOC);
$pop1=$o18['count(userid)'];

if($i=='8' and $f=='F')
{
$q19="select count(userid) from charinfo where city='Reichtum'";
$r19=mysql_query($q19)
	or die("FAILED TO EXECUTE QUERY");
$o19=mysql_fetch_array($r19,MYSQL_ASSOC);
$pop2=$o19['count(userid)'];

echo "<td ";if ($pop2>=1 and $pop2<=10 ){echo "  bgcolor='yellow'>Reichtum<br>Population:<b>$pop2</b><td>";}elseif ($pop2>=10  and $pop2<=50){echo "  bgcolor='lightBauholz'>Reichtum<br>Population:<b>$pop2</b><td>";}elseif ($pop2>=50  and $pop2<=100){echo "  bgcolor='Blue'>Reichtum<br>Population:<b>$pop2</b><td>";}elseif ($pop2>=100 and $pop2<=250){echo "  bgcolor='green'>Reichtum<br>Population:<b>$pop2</b><td>";}elseif ($pop2>=250){echo "  bgcolor='FF0000'>Reichtum<br>Population:<b>$pop2</b><td>";}elseif ($pop2>=0){echo "  bgcolor='FCFCFC'>Reichtum<br>Population:<b>$pop2</b><td>";}
}
else
{
echo "<td ";if ($pop1>=1){echo " bgcolor='yellow'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=10){echo "bgcolor='666600'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=50){echo "bgcolor='Blue'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=100){echo "bgcolor='green'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=250){echo "bgcolor='FF0000'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=0){echo "bgcolor='FCFCFC'>($i,$f)<br>Population:<b>$pop1</b><td>";}
}

}
}

echo "</tr><tr>";
for($i='9';$i<10 ;$i++)
{
for($f='A';$f<'L' ;$f++)
{
$q18="select count(userid) from charinfo where city='($i,$f)'";
$r18=mysql_query($q18)
	or die("FAILED TO EXECUTE QUERY");
$o18=mysql_fetch_array($r18,MYSQL_ASSOC);
$pop1=$o18['count(userid)'];
echo "<td ";if ($pop1>=1){echo " bgcolor='yellow'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=10){echo "bgcolor='666600'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=50){echo "bgcolor='Blue'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=100){echo "bgcolor='green'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=250){echo "bgcolor='FF0000'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=0){echo "bgcolor='FCFCFC'>($i,$f)<br>Population:<b>$pop1</b><td>";}
}
}
echo "</tr><tr>";
for($i='10';$i<11 ;$i++)
{
for($f='A';$f<'L' ;$f++)
{
$q18="select count(userid) from charinfo where city='($i,$f)'";
$r18=mysql_query($q18)
	or die("FAILED TO EXECUTE QUERY");
$o18=mysql_fetch_array($r18,MYSQL_ASSOC);
$pop1=$o18['count(userid)'];
echo "<td ";if ($pop1>=1){echo " bgcolor='yellow'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=10){echo "bgcolor='666600'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=50){echo "bgcolor='Blue'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=100){echo "bgcolor='green'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=250){echo "bgcolor='FF0000'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=0){echo "bgcolor='FCFCFC'>($i,$f)<br>Population:<b>$pop1</b><td>";}
}
}
echo "</tr><tr>";
for($i='11';$i<12 ;$i++)
{
for($f='A';$f<'L' ;$f++)
{
$q18="select count(userid) from charinfo where city='($i,$f)'";
$r18=mysql_query($q18)
	or die("FAILED TO EXECUTE QUERY");
$o18=mysql_fetch_array($r18,MYSQL_ASSOC);
$pop1=$o18['count(userid)'];
echo "<td ";if ($pop1>=1){echo " bgcolor='yellow'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=10){echo "bgcolor='666600'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=50){echo "bgcolor='Blue'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=100){echo "bgcolor='green'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=250){echo "bgcolor='FF0000'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=0){echo "bgcolor='FCFCFC'>($i,$f)<br>Population:<b>$pop1</b><td>";}
}
}
echo "</tr><tr>";
for($i='12';$i<13 ;$i++)
{
for($f='A';$f<'L' ;$f++)
{
$q18="select count(userid) from charinfo where city='($i,$f)'";
$r18=mysql_query($q18)
	or die("FAILED TO EXECUTE QUERY");
$o18=mysql_fetch_array($r18,MYSQL_ASSOC);
$pop1=$o18['count(userid)'];
echo "<td ";if ($pop1>=1){echo " bgcolor='yellow'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=10){echo "bgcolor='666600'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=50){echo "bgcolor='Blue'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=100){echo "bgcolor='green'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=250){echo "bgcolor='FF0000'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=0){echo "bgcolor='FCFCFC'>($i,$f)<br>Population:<b>$pop1</b><td>";}
}
}
echo "</tr><tr>";
for($i='13';$i<14 ;$i++)
{
for($f='A';$f<'J' ;$f++)
{
$q18="select count(userid) from charinfo where city='($i,$f)'";
$r18=mysql_query($q18)
	or die("FAILED TO EXECUTE QUERY");
$o18=mysql_fetch_array($r18,MYSQL_ASSOC);
$pop1=$o18['count(userid)'];

if($i=='13' and $f=='B')
{
$q19="select count(userid) from charinfo where city='Acier'";
$r19=mysql_query($q19)
	or die("FAILED TO EXECUTE QUERY");
$o19=mysql_fetch_array($r19,MYSQL_ASSOC);
$pop2=$o19['count(userid)'];
echo "
<td";
if ($pop2>=0){echo " bgcolor='yellow'>Acier<br>Population:<b>$pop2</b><td>";}elseif ($pop2>=10){echo "bgcolor='666600'>Acier<br>Population:<b>$pop2</b><td>";}elseif ($pop2>=50){echo "bgcolor='Blue'>Acier<br>Population:<b>$pop2</b><td>";}elseif ($pop2>=100){echo "bgcolor='green'>Acier<br>Population:<b>$pop2</b><td>";}elseif ($pop2>=250){echo "bgcolor='FF0000'>Acier<br>Population:<b>$pop2</b><td>";}elseif ($pop2>=0){echo "bgcolor='FCFCFC'>Acier<br>Population:<b>$pop2</b><td>";}
}
else
{
echo "<td ";if ($pop1>=1){echo " bgcolor='yellow'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=10){echo "bgcolor='666600'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=50){echo "bgcolor='Blue'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=100){echo "bgcolor='green'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=250){echo "bgcolor='FF0000'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=0){echo "bgcolor='FCFCFC'>($i,$f)<br>Population:<b>$pop1</b><td>";}
}
}
for($f='J';$f<'L' ;$f++)
{
if($i=='13' and $f=='J')
{
$q20="select count(userid) from charinfo where city='Bauholz'";
$r20=mysql_query($q20)
	or die("FAILED TO EXECUTE QUERY");
$o20=mysql_fetch_array($r20,MYSQL_ASSOC);
$pop3=$o20['count(userid)'];
echo "
<td";
if ($pop3>=0){echo " bgcolor='yellow'>Bauholz<br>Population:<b>$pop3</b><td>";}elseif ($pop3>=10){echo "bgcolor='666600'>Bauholz<br>Population:<b>$pop3</b><td>";}elseif ($pop3>=50){echo "bgcolor='Blue'>Bauholz<br>Population:<b>$pop3</b><td>";}elseif ($pop3>=100){echo "bgcolor='green'>Bauholz<br>Population:<b>$pop3</b><td>";}elseif ($pop3>=250){echo "bgcolor='FF0000'>Bauholz<br>Population:<b>$pop3</b><td>";}elseif ($pop3>=0){echo "bgcolor='FCFCFC'>Bauholz<br>Population:<b>$pop3</b><td>";}

}
else
{
echo "<td ";if ($pop1>=1){echo " bgcolor='yellow'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=10){echo "bgcolor='666600'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=50){echo "bgcolor='Blue'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=100){echo "bgcolor='green'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=250){echo "bgcolor='FF0000'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=0){echo "bgcolor='FCFCFC'>($i,$f)<br>Population:<b>$pop1</b><td>";}
}

}
}
echo "</tr><tr>";
for($i='14';$i<15 ;$i++)
{
for($f='A';$f<'L' ;$f++)
{
$q18="select count(userid) from charinfo where city='($i,$f)'";
$r18=mysql_query($q18)
	or die("FAILED TO EXECUTE QUERY");
$o18=mysql_fetch_array($r18,MYSQL_ASSOC);
$pop1=$o18['count(userid)'];
echo "<td ";if ($pop1>=1){echo " bgcolor='yellow'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=10){echo "bgcolor='666600'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=50){echo "bgcolor='Blue'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=100){echo "bgcolor='green'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=250){echo "bgcolor='FF0000'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=0){echo "bgcolor='FCFCFC'>($i,$f)<br>Population:<b>$pop1</b><td>";}
}
}
echo "</tr><tr>";
for($i='15';$i<16 ;$i++)
{
for($f='A';$f<'L' ;$f++)
{
$q18="select count(userid) from charinfo where city='($i,$f)'";
$r18=mysql_query($q18)
	or die("FAILED TO EXECUTE QUERY");
$o18=mysql_fetch_array($r18,MYSQL_ASSOC);
$pop1=$o18['count(userid)'];
echo "<td ";if ($pop1>=1){echo " bgcolor='yellow'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=10){echo "bgcolor='666600'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=50){echo "bgcolor='Blue'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=100){echo "bgcolor='green'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=250){echo "bgcolor='FF0000'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=0){echo "bgcolor='FCFCFC'>($i,$f)<br>Population:<b>$pop1</b><td>";}
}
}
echo "</tr><tr>";
for($i='16';$i<17 ;$i++)
{
for($f='A';$f<'L' ;$f++)
{
$q18="select count(userid) from charinfo where city='($i,$f)'";
$r18=mysql_query($q18)
	or die("FAILED TO EXECUTE QUERY");
$o18=mysql_fetch_array($r18,MYSQL_ASSOC);
$pop1=$o18['count(userid)'];

echo "<td ";if ($pop1>=1){echo " bgcolor='yellow'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=10){echo "bgcolor='666600'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=50){echo "bgcolor='Blue'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=100){echo "bgcolor='green'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=250){echo "bgcolor='FF0000'>($i,$f)<br>Population:<b>$pop1</b><td>";}elseif ($pop1>=0){echo "bgcolor='FCFCFC'>($i,$f)<br>Population:<b>$pop1</b><td>";}

}
}
echo "</tr></table>";
?>