<?php ob_start(); ?>
<?php
	session_register('username');
	//gather username
	session_register('password');
	//gather password
	session_register('userid');
	//gather userid
	$userid= $_SESSION['userid'] ;
	//defines UseriD
	$pass = $_SESSION['password'] ;
	//gather password
	require('Stats.php');
	//Get Stats
	/*check input*/
	
	if($userid==""){
		header('Location: logout.php');
	} else {
		echo "
		<html>
		<head>
		<title>Tales of Prophecy - A Search for Real Treasure - Free Online Text-Based MMORPG </title>
		<LINK REL=stylesheet TYPE'text2/css' HREF=styles/origonal.css>
		<meta name='Description' content='Tales of Prophecyâ�¦ A Search for real treasure, the game where if you can find the item in the game you get it in real life.  You can fight your way through the ranks of divisions in the military of one of the two factions, start your own business and try stomp out
		the competition, or maybe you can be a merchant and make it through trading, with all the possibilities of this game you can do anything.'>
		<meta name='Keywords' content='Tales Of Prophecy, Treasure, Real Treasure, Contests, Prizes, RPG, free, multiplayer, game, games, fun, mmorpg, Tales, Prophecy, tales of prophecy'>
		</head>
		<body>
		<table width=100% cellspacing='0'  cellpadding='0' height='80'>
		<tr><td bgcolor='410000'><img src='images/top.gif'></td><td bgcolor='410000'><img src='ad-banner.GIF' align='right'></td></tr></table>
		";
		//Prints_top_bar
		echo "
		<center>
		<table width='755' cellspacing='0'  cellpadding='0' class='text'>
		<tr><td><img src='images/tales.gif'><a href='backpack.php'><img src='images/backpack.gif' border='0'></a><a href='map.php'><img src='images/map.gif' border='0'></a><img src='images/chat.gif'><img src='images/treasure.gif'></td></tr>
		</table>
		";
		//Prints_Horizontal_Tool_bar
		echo "
		<table width='755' cellspacing='0'  cellpadding='0' class='text'>
		<tr>
		<td width='100'></td>
		<td width='555'><center>
		<img src='images/currency/gold.gif'><font color='FFFF00'> $gold </font> <img src='images/currency/silver.gif'> <font color='CCCCCC'> $silver </font><img src='images/currency/gems.gif'> <font color='00FF00'> $gems </font> <img src='images/currency/iron.gif'> <font color='999999'> $iron </font> <img src='images/currency/wood.gif'> <font color='996666'>$wood</font></center>
		</td>
		<td width='100'>
		</td></tr>
		<tr>
		<td width='100'></td>
		<td width='555'><center>
		 <form action='search.php' method='post'> Find Player: <input type='text' name='search' class='inputs'><input type='hidden' name='first' value='no'> by <SELECT class='inputs' name='by' size='1'><option value='id' class='inputs'>userid<option value='name' class='inputs' selected>name</select><input type='submit' value='Search' class='inputs'></form>
		</td>
		<td width='100'>
		</td></tr>
		";
		//Prints_Currency_Tool_bar
		echo "
		<tr>
		<td bgcolor='330000' width='100' align='left' valign='top'>
		<font class='text2'>
		USERID: ";
		echo $_SESSION['userid'] ;
		echo"<br>
		<a href='gates.php'>Location</a>: $city<br><br>
		<a href='mycharacter.php'><img src='images/name.gif' border='0'><br><center> $username </a></center><br>
		<img src='images/levels/level.gif'><br>
		<img src='images/levels/$level.gif'><br>
		<img src='images/healthpoints.gif'>
		";
		// HP HP HP HP HP HP HP HP HP HP HP HP
		// HP HP HP HP HP HP HP HP HP HP HP HP
		// HP HP HP HP HP HP HP HP HP HP HP HP
		
		if( ($chp/$hp) > 0.99){
			echo "<table cellspacing='0' cellpadding='0'  width='100' height='15'><tr><td background='images/hp/100.gif'><font size='2' color='000000'><center><b> $chp / $hp <b></center></td></tr></table>";
		}

		elseif( ($chp/$hp) > 0.9){
			echo "<table cellspacing='0' cellpadding='0'  width='100' height='15'><tr><td background='images/hp/90.gif'><font size='2' color='000000'><center><b> $chp / $hp <b></center></td></tr></table>";
		}

		elseif( ($chp/$hp) > 0.8){
			echo "<table cellspacing='0' cellpadding='0'  width='100' height='15'><tr><td background='images/hp/80.gif'><font size='2' color='000000'><center><b> $chp / $hp <b></center></td></tr></table>";
		}

		elseif( ($chp/$hp) > 0.7){
			echo "<table cellspacing='0' cellpadding='0'  width='100' height='15'><tr><td background='images/hp/70.gif'><font size='2' color='000000'><center><b> $chp / $hp <b></center></td></tr></table>";
		}

		elseif( ($chp/$hp) > 0.6){
			echo "<table cellspacing='0' cellpadding='0'  width='100' height='15'><tr><td background='images/hp/60.gif'><font size='2' color='000000'><center><b> $chp / $hp <b></center></td></tr></table>";
		}

		elseif( ($chp/$hp) > 0.5){
			echo "<table cellspacing='0' cellpadding='0'  width='100' height='15'><tr><td background='images/hp/50.gif'><font size='2' color='000000'><center><b> $chp / $hp <b></center></td></tr></table>";
		}

		elseif( ($chp/$hp) > 0.4){
			echo "<table cellspacing='0' cellpadding='0'  width='100' height='15'><tr><td background='images/hp/40.gif'><font size='2' color='000000'><center><b> $chp / $hp <b></center></td></tr></table>";
		}

		elseif( ($chp/$hp) > 0.3){
			echo "<table cellspacing='0' cellpadding='0'  width='100' height='15'><tr><td background='images/hp/30.gif'><font size='2' color='000000'><center><b> $chp / $hp <b></center></td></tr></table>";
		}

		elseif( ($chp/$hp) > 0.2){
			echo "<table cellspacing='0' cellpadding='0'  width='100' height='15'><tr><td background='images/hp/20.gif'><font size='2' color='000000'><center><b> $chp / $hp <b></center></td></tr></table>";
		}

		elseif( ($chp/$hp) > 0.1){
			echo "<table cellspacing='0' cellpadding='0'  width='100' height='15'><tr><td background='images/hp/10.gif'><font size='2' color='000000'><center><b> $chp / $hp <b></center></td></tr></table>";
		}

		elseif( ($chp/$hp) > 0.00001){
			echo "<table cellspacing='0' cellpadding='0'  width='100' height='15'><tr><td background='images/hp/1.gif'><font size='2' color='000000'><center><b> $chp / $hp <b></center></td></tr></table>";
		}

		elseif( ($chp/$hp) > 0.0){
			echo "<table cellspacing='0' cellpadding='0'  width='100' height='15'><tr><td background='images/hp/0.gif'><font size='2' color='000000'><center><b> $chp / $hp <b></center></td></tr></table>";
		}

		echo "<img src='images/stamina_image.gif'>";
		// Stamina
		// Stamina
		// Stamina
		// Stamina
		// Stamina
		
		if( ($Cstamina/$stamina) > 0.99){
			echo "<table cellspacing='0' cellpadding='0'  width='100' height='15'><tr><td background='images/stamina/100.gif'><font size='2' color='000000'><center><b> $Cstamina / $stamina <b></center></td></tr></table>";
		}

		elseif( ($Cstamina/$stamina) > 0.9){
			echo "<table cellspacing='0' cellpadding='0'  width='100' height='15'><tr><td background='images/stamina/90.gif'><font size='2' color='000000'><center><b> $Cstamina / $stamina <b></center></td></tr></table>";
		}

		elseif( ($Cstamina/$stamina) > 0.8){
			echo "<table cellspacing='0' cellpadding='0'  width='100' height='15'><tr><td background='images/stamina/80.gif'><font size='2' color='000000'><center><b> $Cstamina / $stamina <b></center></td></tr></table>";
		}

		elseif( ($Cstamina/$stamina) > 0.7){
			echo "<table cellspacing='0' cellpadding='0'  width='100' height='15'><tr><td background='images/stamina/70.gif'><font size='2' color='000000'><center><b> $Cstamina / $stamina <b></center></td></tr></table>";
		}

		elseif( ($Cstamina/$stamina) > 0.6){
			echo "<table cellspacing='0' cellpadding='0'  width='100' height='15'><tr><td background='images/stamina/60.gif'><font size='2' color='000000'><center><b> $Cstamina / $stamina <b></center></td></tr></table>";
		}

		elseif( ($Cstamina/$stamina) > 0.5){
			echo "<table cellspacing='0' cellpadding='0'  width='100' height='15'><tr><td background='images/stamina/50.gif'><font size='2' color='000000'><center><b> $Cstamina / $stamina <b></center></td></tr></table>";
		}

		elseif( ($Cstamina/$stamina) > 0.4){
			echo "<table cellspacing='0' cellpadding='0'  width='100' height='15'><tr><td background='images/stamina/40.gif'><font size='2' color='000000'><center><b> $Cstamina / $stamina <b></center></td></tr></table>";
		}

		elseif( ($Cstamina/$stamina) > 0.3){
			echo "<table cellspacing='0' cellpadding='0'  width='100' height='15'><tr><td background='images/stamina/30.gif'><font size='2' color='000000'><center><b> $Cstamina / $stamina <b></center></td></tr></table>";
		}

		elseif( ($Cstamina/$stamina) > 0.2){
			echo "<table cellspacing='0' cellpadding='0'  width='100' height='15'><tr><td background='images/stamina/20.gif'><font size='2' color='000000'><center><b> $Cstamina / $stamina <b></center></td></tr></table>";
		}

		elseif( ($Cstamina/$stamina) > 0.1){
			echo "<table cellspacing='0' cellpadding='0'  width='100' height='15'><tr><td background='images/stamina/10.gif'><font size='2' color='000000'><center><b> $Cstamina / $stamina <b></center></td></tr></table>";
		}

		elseif( ($Cstamina/$stamina) > 0.00001){
			echo "<table cellspacing='0' cellpadding='0'  width='100' height='15'><tr><td background='images/stamina/1.gif'><font size='2' color='000000'><center><b> $Cstamina / $stamina <b></center></td></tr></table>";
		}

		elseif( ($Cstamina/$stamina) == 0.0){
			echo "<table cellspacing='0' cellpadding='0'  width='100' height='15'><tr><td background='images/stamina/0.gif'><font size='2' color='000000'><center><b> $Cstamina / $stamina <b></center></td></tr></table>";
		}

		// Messages and Alerts
		echo "
		<br>
		<img src='images/faction_sm.gif'><center> $faction</center><br>
		<img src='images/division_sm.gif'><center> $division</center><br>
		</p><hr color='FFAA33'>
		<table width='100' cellspacing='0' cellpadding=0'0>
		<tr>
		<td width=50%><a href='inbox.php'> <img src='images/message.jpg'><font color='CCCCCC'><b> $newmessages  </a></b></center></td>
		<td width=50% align='right'> <img src='images/alert.gif'><font color='00FF00'><b> 3 </b></center> </td>
		</tr>
		</table>
		<hr color='FFAA33'>
		<p class='text2'>Options<br>
		<a href='tales.php'>My Story</a><br>
		<a href='settings.php'>Settings</a><br>
		<a href='logout.php'>Logout</a><br>
		</font>
		</td>
		<td valign='top' class='text' width='555'>
		";
	}

	?>
<?php ob_flush(); ?>