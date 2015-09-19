<?php
/*MY EXP*/

/*experience gained*/
$mylv=$me['level'];
$yourlv=$you['level'];
$lb=$yourlv / $mylv * 5;
$experience=$lb;
$rnd=rand(1,15);
$rb=$experience * ( $rnd / 100 );
$experience=$experience+$rb;
$experience=sprintf("%.0f",$experience) + 1;

/*YOUR STATS*/

/*opponents gold gained*/
$mygold=$me['gold'];
$yourgold=$you['gold'];
$gg=$mygold*0.15;
$rand=rand(1,100);
$rgb=$gg * ( $rand / 100 );
$gg=$gg+$rgb;
$gg=sprintf("%.0f",$gg) + 1;

/*silver gained*/
$mysilver=$me['silver'];
$yoursilver=$you['silver'];
$sg=$mysilver*0.15;
$Rand=rand(1,100);
$rsb=$sg * ( $Rand / 100 );
$sg=$sg+$rsb;
$sg=sprintf("%.0f",$sg) + 1;

/*send data*/
$Oexp=$me['exp'];
$Texp=$experience+$Oexp;
mysql_query("update charinfo set exp='$Texp' where userid='$myid'");
$Ogold=$you['gold'];
$Tgold=$gg+$Ogold;
mysql_query("update charinfo set gold='$Tgold' where userid='$yourid'");
$Osilver=$you['silver'];
$Tsilver=$sg+$Osilver;
mysql_query("update charinfo set silver='$Tsilver' where userid='$yourid'");

/*MY LOSSES*/

/*gold lost*/
$gw=rand(1,5);
$gl=$gg +(( $gw /100)* $gg );
$gl=sprintf("%.0f",$gl) + 1;

/*silver lost*/
$sw=rand(1,5);
$sl=$sg +(( $sw /100)* $sg );
$sl=sprintf("%.0f",$sl) + 1;

/*send data*/
$Ogold=$me['gold'];
$Tgold=$Ogold - $gl;
mysql_query("update charinfo set gold='$Tgold' where userid='$myid'");
$Osilver=$me['silver'];
$Tsilver=$Osilver - $sl;
mysql_query("update charinfo set silver='$Tsilver' where userid='$myid'");

/*DISPLAY CHANGES*/
echo "<br><br><center><h4>Defeat</h></center><br>
<table bgcolor='410000' align='center' class='text'>
<tr><td>Health</td><td> $MyHP / $mhp </td></tr>
<tr><td>Gold</td><td>- $gl </td></tr>
<tr><td>Silver</td><td>- $sl </td></tr>
<tr><td>Experience</td><td>+ $experience </td></tr>
</table>";

require('levelup.php');
?>