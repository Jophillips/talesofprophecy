<?php
	/*MY STATS*/	/*conection info*/
	$a='localhost';
	$b='atheistdeity';
	$c='1491625';
	$d=mysql_connect("$a","$b","$c") or die ("FAILED TO CONNECT TO SQL");
	$e=mysql_select_db("gamevars",$d) or die ("FAILED TO CONNECT TO DATABASE");
	/*experience gained*/
	$mylv=$me['level'];
	$yourlv=$you['level'];
	$q=mysql_fetch_array(mysql_query("select total from exp where level='$yourlv'"),MYSQL_ASSOC);
	$lb=$q['total'];
	$lb=$lb/8;
	$yourwins=$you['wins'];
	$yourlosses=$you['losses'];
	$orb=$yourwins-$yourlosses;
	$mywins=$me['wins'];
	$mylosses=$me['losses'];
	$mrb=$mylosses-$mywins;
	$experience=$lb;
	$Oexperience=$experience;
	
	if($orb>=1){
		$experience=$experience+$Oexperience*($orb/200);
	}

	
	if($mrb>=1){
		$experience=$experience+$Oexperience*($mrb/200);
	}

	$rnd=rand(1,100);
	$rb=$experience * ( $rnd / 100 );
	$experience=$experience+$rb;
	$experience=sprintf("%.0f",$experience) + 1;
	/*referal bonus*/
	$e=mysql_select_db("userinfo",$d) or die ("FAILED TO CONNECT TO DATABASE");
	$refq=mysql_fetch_array(mysql_query("select referal from charinfo where userid='$myid'"),MYSQL_ASSOC);
	$referal=$refq['referal'];
	
	if($referal!=''){
		$refexp=$experience/100;
		$refq2=mysql_fetch_array(mysql_query("select exp from charinfo where userid='$referal'"),MYSQL_ASSOC);
		$Oexp=$refq2['exp'];
		$refexp=sprintf("%.0f",$refexp);
		$Nexp=$Oexp+$refexp;
		mysql_query("update charinfo set exp='$Nexp' where userid='$referal'");
	}

	/*gold gained*/
	$mygold=$me['gold'];
	$yourgold=$you['gold'];
	$gg=$yourgold*0.15;
	$rand=rand(1,100);
	$rgb=$gg * ( $rand / 100 );
	$gg=$gg+$rgb;
	$gg=sprintf("%.0f",$gg) +1;
	/*silver gained*/
	$mysilver=$me['silver'];
	$yoursilver=$you['silver'];
	$sg=$yoursilver*0.15;
	$Rand=rand(1,100);
	$rsb=$sg * ( $Rand / 100 );
	$sg=$sg+$rsb;
	$sg=sprintf("%.0f",$sg) + 1;
	/*send data*/
	$Oexp=$me['exp'];
	$Texp=$experience+$Oexp;
	mysql_query("update charinfo set exp='$Texp' where userid='$myid'");
	$Ogold=$me['gold'];
	$Tgold=$gg+$Ogold;
	mysql_query("update charinfo set gold='$Tgold' where userid='$myid'");
	$Osilver=$me['silver'];
	$Tsilver=$sg+$Osilver;
	mysql_query("update charinfo set silver='$Tsilver' where userid='$myid'");
	/*YOUR STATS*/	/*gold lost*/
	$gw=rand(1,5);
	$gl=$gg +(( $gw /100)* $gg );
	$gl=sprintf("%.0f",$gl) + 1;
	/*silver lost*/
	$sw=rand(1,5);
	$sl=$sg +(( $sw /100)* $sg );
	$sl=sprintf("%.0f",$sl) + 1;
	/*send data*/
	$Ogold=$you['gold'];
	$Tgold=$Ogold - $gl;
	mysql_query("update charinfo set gold='$Tgold' where userid='$yourid'");
	$Osilver=$you['silver'];
	$Tsilver=$Osilver - $sl;
	mysql_query("update charinfo set silver='$Tsilver' where userid='$yourid'");
	/*DISPLAY CHANGES*/
	echo "<br><br><center><h4>Victory</h></center><br>
		<table bgcolor='410000' align='center' class='text'>
		<tr><td>Health</td><td> $MyHP / $mhp </td></tr>
		<tr><td>Gold</td><td>+ $gg </td></tr>
		<tr><td>Silver</td><td>+ $sg </td></tr>
		<tr><td>Experience</td><td>+ $experience </td></tr>
		</table>";
	require('levelup.php');
	?>