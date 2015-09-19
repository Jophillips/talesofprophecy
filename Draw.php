<?php
/*MY STATS*/

/*experience gained*/
$mylv=$me['level'];
$yourlv=$you['level'];
$lb=$yourlv / $mylv * 25;
$mywins=$me['wins'];
$mylosses=$me['losses'];
$mrb=$mylosses-$mywins;
$experience=$lb;
if($mrb>=1)
{
$experience=$experience+$mrb;
}
$rnd=rand(1,100);
$rb=$experience * ( $rnd / 100 );
$experience=$experience+$rb;
$experience=sprintf("%.0f",$experience);

/*send data*/
$Oexp=$me['exp'];
$Texp=$experience+$Oexp;
mysql_query("update charinfo set exp='$Texp' where userid='$myid'");

/*DISPLAY CHANGES*/
echo "<br><br><center><h4>Draw</h></center><br>
<table bgcolor='410000' align='center' class='text'>
<tr><td>Health</td><td> $MyHP / $mhp </td></tr>
<tr><td>Gold</td><td> 0 </td></tr>
<tr><td>Silver</td><td> 0 </td></tr>
<tr><td>Experience</td><td>+ $experience </td></tr>
</table>";

require('levelup.php');
?>