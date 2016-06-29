<?php
	require('connection.php');
	require('generic.php');
	$opbread=$_POST['option'];
	$ambread=$_POST['amount'];
	$opwater=$_POST['option2'];
	$amwater=$_POST['amount2'];
	$oprice=$_POST['option3'];
	$amrice=$_POST['amount3'];
	$opmeat=$_POST['option4'];
	$ammeat=$_POST['amount4'];
	$opfish=$_POST['option5'];
	$amfish=$_POST['amount5'];
	$opmilk=$_POST['option6'];
	$ammilk=$_POST['amount6'];
	$opfruit=$_POST['option7'];
	$amfruit=$_POST['amount7'];
	$ophealingpotion=$_POST['option8'];
	$amhealingpotion=$_POST['amount8'];
	$opStaminapotion=$_POST['option9'];
	$amStaminapotion=$_POST['amount9'];
	$error='no';
	echo "<br><table class='text2' width='500'><tr><td><center>";
	/*Drop bread*/
	
	if ($ambread > 0.9 and $opbread=="drop"){
		
		if ($ambread > $bread){
			echo "You do not have enough bread<br>";
		}

		elseif ($bread >= $ambread){
			$bread= $bread - $ambread;
			$q1="Update charinfo set bread='$bread' where userid='$userid'";
			$r1=mysql_query($q1);
			echo "You dropped $ambread piece(s) of bread.<br>";
		}

	}

	/*Use bread*/
	
	if ($ambread >= 1 ){
		
		if ($chp>=$hp){
			echo "<center><h3>You are at full health</h3></center>";
		}

		elseif ($bread >= $ambread and $opbread=="use"){
			
			if ($chp + (($hp/4) * $ambread) <= $hp){
				$chp= $chp + (($hp/4) * $ambread);
				$bread= $bread - $ambread;
				$q1="Update charinfo set bread='$bread' where userid='$userid'";
				$r1=mysql_query($q1);
				$q2="Update charinfo set currenthp='$chp' where userid='$userid'";
				$r2=mysql_query($q2);
				echo "You used $ambread piece(s) of bread.<br>";
			} else {
				echo "You are at full health";
			}

			
			if ($chp+(($hp/4)*$ambread) > $hp){
				$chp=$hp;
				$bread= $bread - $ambread;
				$q1="Update charinfo set bread='$bread' where userid='$userid'";
				$r1=mysql_query($q1);
				$q2="Update charinfo set currenthp='$chp' where userid='$userid'";
				$r2=mysql_query($q2);
				echo "You used $ambread piece(s) of bread.<br>";
			}

		}

		elseif ($ambread > $bread){
			echo "You do not have enough bread<br>";
		}

	} else {
		echo "";
	}

	/*Drop water*/
	
	if ($amwater >= 1 and $opwater=="drop"){
		
		if ($amwater > $water){
			echo "You do not have enough water<br>";
		}

		elseif ($water >= $amwater){
			$water= $water - $amwater;
			$q1="Update charinfo set water='$water' where userid='$userid'";
			$r1=mysql_query($q1);
			echo "You dropped $amwater piece(s) of water.<br>";
		}

	}

	/*Use water*/
	
	if ($amwater >= 1 ){
		
		if ($chp>=$hp){
			echo "<center><h3>You are at full health</h3></center>";
		}

		elseif ($water >= $amwater and $opwater=="use"){
			
			if ($chp + (($hp/4) * $amwater) <= $hp){
				$chp= $chp + (($hp/4) * $amwater);
				$water= $water - $amwater;
				$q1="Update charinfo set water='$water' where userid='$userid'";
				$r1=mysql_query($q1);
				$q2="Update charinfo set currenthp='$chp' where userid='$userid'";
				$r2=mysql_query($q2);
				echo "You used $amwater piece(s) of water.<br>";
			} else {
				echo "You are at full health";
			}

			
			if ($chp+(($hp/4)*$amwater) > $hp){
				$chp=$hp;
				$water= $water - $amwater;
				$q1="Update charinfo set water='$water' where userid='$userid'";
				$r1=mysql_query($q1);
				$q2="Update charinfo set currenthp='$chp' where userid='$userid'";
				$r2=mysql_query($q2);
				echo "You used $amwater piece(s) of water.<br>";
			}

		}

		elseif ($amwater > $water){
			echo "You do not have enough water<br>";
		}

	} else {
		echo "";
	}

	/*Drop rice*/
	
	if ($amrice >= 1 and $oprice=="drop"){
		
		if ($amrice > $rice){
			echo "You do not have enough rice<br>";
		}

		elseif ($rice >= $amrice){
			$rice= $rice - $amrice;
			$q1="Update charinfo set rice='$rice' where userid='$userid'";
			$r1=mysql_query($q1);
			echo "You dropped $amrice piece(s) of rice.<br>";
		}

	}

	/*Use rice*/
	
	if ($amrice >= 1 ){
		
		if ($chp>=$hp){
			echo "<center><h3>You are at full health</h3></center>";
		}

		elseif ($rice >= $amrice and $oprice=="use"){
			
			if ($chp + (($hp/4) * $amrice) <= $hp){
				$chp= $chp + (($hp/4) * $amrice);
				$rice= $rice - $amrice;
				$q1="Update charinfo set rice='$rice' where userid='$userid'";
				$r1=mysql_query($q1);
				$q2="Update charinfo set currenthp='$chp' where userid='$userid'";
				$r2=mysql_query($q2);
				echo "You used $amrice piece(s) of rice.<br>";
			} else {
				echo "You are at full health";
			}

			
			if ($chp+(($hp/4)*$amrice) > $hp){
				$chp=$hp;
				$rice= $rice - $amrice;
				$q1="Update charinfo set rice='$rice' where userid='$userid'";
				$r1=mysql_query($q1);
				$q2="Update charinfo set currenthp='$chp' where userid='$userid'";
				$r2=mysql_query($q2);
				echo "You used $amrice piece(s) of rice.<br>";
			}

		}

		elseif ($amrice > $rice){
			echo "You do not have enough rice<br>";
		}

	} else {
		echo "";
	}

	/*Drop meat*/
	
	if ($ammeat >= 1 and $opmeat=="drop"){
		
		if ($ammeat > $meat){
			echo "You do not have enough meat<br>";
		}

		elseif ($meat >= $ammeat){
			$meat= $meat - $ammeat;
			$q1="Update charinfo set meat='$meat' where userid='$userid'";
			$r1=mysql_query($q1);
			echo "You dropped $ammeat piece(s) of meat.<br>";
		}

	}

	/*Use meat*/
	
	if ($ammeat >= 1 ){
		
		if ($chp>=$hp){
			echo "<center><h3>You are at full health</h3></center>";
		}

		elseif ($meat >= $ammeat and $opmeat=="use"){
			
			if ($chp + (($hp/2) * $ammeat) <= $hp){
				$chp= $chp + (($hp/2) * $ammeat);
				$meat= $meat - $ammeat;
				$q1="Update charinfo set meat='$meat' where userid='$userid'";
				$r1=mysql_query($q1);
				$q2="Update charinfo set currenthp='$chp' where userid='$userid'";
				$r2=mysql_query($q2);
				echo "You used $ammeat piece(s) of meat.<br>";
			} else {
				echo "You are at full health";
			}

			
			if ($chp+(($hp/2)*$ammeat) > $hp){
				$chp=$hp;
				$meat= $meat - $ammeat;
				$q1="Update charinfo set meat='$meat' where userid='$userid'";
				$r1=mysql_query($q1);
				$q2="Update charinfo set currenthp='$chp' where userid='$userid'";
				$r2=mysql_query($q2);
				echo "You used $ammeat piece(s) of meat.<br>";
			}

		}

		elseif ($ammeat > $meat){
			echo "You do not have enough meat<br>";
		}

	} else {
		echo "";
	}

	/*Drop fish*/
	
	if ($amfish >= 1 and $opfish=="drop"){
		
		if ($amfish > $fish){
			echo "You do not have enough fish<br>";
		}

		elseif ($fish >= $amfish){
			$fish= $fish - $amfish;
			$q1="Update charinfo set fish='$fish' where userid='$userid'";
			$r1=mysql_query($q1);
			echo "You dropped $amfish piece(s) of fish.<br>";
		}

	}

	/*Use fish*/
	
	if ($amfish >= 1 ){
		
		if ($chp>=$hp){
			echo "<center><h3>You are at full health</h3></center>";
		}

		elseif ($fish >= $amfish and $opfish=="use"){
			
			if ($chp + (($hp/1.5) * $amfish) <= $hp){
				$chp= $chp + (($hp/1.5) * $amfish);
				$fish= $fish - $amfish;
				$q1="Update charinfo set fish='$fish' where userid='$userid'";
				$r1=mysql_query($q1);
				$q2="Update charinfo set currenthp='$chp' where userid='$userid'";
				$r2=mysql_query($q2);
				echo "You used $amfish piece(s) of fish.<br>";
			} else {
				echo "You are at full health";
			}

			
			if ($chp+(($hp/1.5)*$amfish) > $hp){
				$chp=$hp;
				$fish= $fish - $amfish;
				$q1="Update charinfo set fish='$fish' where userid='$userid'";
				$r1=mysql_query($q1);
				$q2="Update charinfo set currenthp='$chp' where userid='$userid'";
				$r2=mysql_query($q2);
				echo "You used $amfish piece(s) of fish.<br>";
			}

		}

		elseif ($amfish > $fish){
			echo "You do not have enough fish<br>";
		}

	} else {
		echo "";
	}

	/*Drop milk*/
	
	if ($ammilk >= 1 and $opmilk=="drop"){
		
		if ($ammilk > $milk){
			echo "You do not have enough milk<br>";
		}

		elseif ($milk >= $ammilk){
			$milk= $milk - $ammilk;
			$q1="Update charinfo set milk='$milk' where userid='$userid'";
			$r1=mysql_query($q1);
			echo "You dropped $ammilk piece(s) of milk.<br>";
		}

	}

	/*Use milk*/
	
	if ($ammilk >= 1 ){
		
		if ($chp>=$hp){
			echo "<center><h3>You are at full health</h3></center>";
		}

		elseif ($milk >= $ammilk and $opmilk=="use"){
			
			if ($chp + (($hp/1) * $ammilk) <= $hp){
				$chp= $chp + (($hp/1) * $ammilk);
				$milk= $milk - $ammilk;
				$q1="Update charinfo set milk='$milk' where userid='$userid'";
				$r1=mysql_query($q1);
				$q2="Update charinfo set currenthp='$chp' where userid='$userid'";
				$r2=mysql_query($q2);
				echo "You used $ammilk piece(s) of milk.<br>";
			} else {
				echo "You are at full health";
			}

			
			if ($chp+(($hp/1)*$ammilk) > $hp){
				$chp=$hp;
				$milk= $milk - $ammilk;
				$q1="Update charinfo set milk='$milk' where userid='$userid'";
				$r1=mysql_query($q1);
				$q2="Update charinfo set currenthp='$chp' where userid='$userid'";
				$r2=mysql_query($q2);
				echo "You used $ammilk piece(s) of milk.<br>";
			}

		}

		elseif ($ammilk > $milk){
			echo "You do not have enough milk<br>";
		}

	} else {
		echo " ";
	}

	/*Drop fruit*/
	
	if ($amfruit >= 1 and $opfruit=="drop"){
		
		if ($amfruit > $fruit){
			echo "You do not have enough fruit<br>";
		}

		elseif ($fruit >= $amfruit){
			$fruit= $fruit - $amfruit;
			$q1="Update charinfo set fruit='$fruit' where userid='$userid'";
			$r1=mysql_query($q1);
			echo "You dropped $amfruit piece(s) of fruit.<br>";
		}

	}

	/*Use fruit*/
	
	if ($amfruit >= 1 ){
		
		if ($chp>=$hp){
			echo "<center><h3>You are at full health</h3></center>";
		}

		elseif ($fruit >= $amfruit and $opfruit=="use"){
			
			if ($chp + (($hp/1) * $amfruit) <= $hp){
				$chp= $chp + (($hp/1) * $amfruit);
				$fruit= $fruit - $amfruit;
				$q1="Update charinfo set fruit='$fruit' where userid='$userid'";
				$r1=mysql_query($q1);
				$q2="Update charinfo set currenthp='$chp' where userid='$userid'";
				$r2=mysql_query($q2);
				echo "You used $amfruit piece(s) of fruit.<br>";
			} else {
				echo "You are at full health";
			}

			
			if ($chp+(($hp/1)*$amfruit) > $hp){
				$chp=$hp;
				$fruit= $fruit - $amfruit;
				$q1="Update charinfo set fruit='$fruit' where userid='$userid'";
				$r1=mysql_query($q1);
				$q2="Update charinfo set currenthp='$chp' where userid='$userid'";
				$r2=mysql_query($q2);
				echo "You used $amfruit piece(s) of fruit.<br>";
			}

		}

		elseif ($amfruit > $fruit){
			echo "You do not have enough fruit<br>";
		}

	} else {
		echo "";
	}

	echo "
		<center><br>You have $totalitems item";
	
	if ( $totalitems='1' ){
		echo "";
	}

	
	if ( $totalitems=2 ){
		echo "s";
	}

	echo " in your backpack.<a href='ingamehelp.php#backpack'><img src='images/questionmark_sm.gif' border='0'></a>";
	
	if ( $totalitems > $str or $totalitems = $str  ){
		echo "<br> You do not have anymore room for new items, you're not going to be able to pick up any more items you find with the expection of prizes.</center></td></tr></table>";
	}

	elseif (  $str > $totalitems  ){
		echo "</td></tr></table>";
	}

	echo "<br><br><center>
			<table width='500' bgcolor='000000' cellspacing='0' cellpadding='0'>
			<tr>
			<td bgcolor='330000'><img src='images/food.gif'></td>
			<td bgcolor='330000'></td>
			</tr>
			</table>
			<table width='500' bgcolor='000000' cellspacing='0' cellpadding='0'>
			<tr height='1'>
			<td bgcolor='FFaa33'></td>
			<td bgcolor='FFaa33'></td>
			<td bgcolor='FFaa33'></td>
			<td bgcolor='FFaa33'></td>
			<td bgcolor='FFaa33'></td>
			<td bgcolor='FFaa33'></td>
			</tr>
			<tr>
			<td bgcolor='FFaa33' width='1'></td>
			<td bgcolor='000000' width='5'></td>
			<td><p class='text2'><b>Item</b></p></td>
			<td><p class='text2'><b>Amount</b></p></td>
			<td><center><p class='text2'><b>Action</b></p></center></td>
			<td bgcolor='FFaa33'></td>
			</tr>
			<tr>
			<td bgcolor='FFaa33' width='1'></td>
			<td bgcolor='000000' width='5'></td>
			<td><p class='text2'>Bread:</p></td>
			<td><p class='text2'>$bread</p></td>
			<td><center><form action='Sbackpack.php' method='post'><input type='text' size='1' class='inputs' name='amount'><select name='option' class='inputs' size='1'><option value='use' selected>Use<option value='drop'>Drop</select></center></td>
			<td bgcolor='FFaa33'></td>
			</tr>
			<tr>
			<td bgcolor='FFaa33' width='1'></td>
			<td bgcolor='000000' width='5'></td>
			<td><p class='text2'>Water:</p></td>
			<td><p class='text2'>$water</p></td>
			<td><center><input type='text' size='1' class='inputs' name='amount2'><select name='option2' class='inputs' size='1'><option value='use' selected>Use<option value='drop'>Drop</select></center></td>
			<td bgcolor='FFaa33'></td>
			</tr>
			<tr>
			<td bgcolor='FFaa33' width='1'></td>
			<td bgcolor='000000' width='5'></td>
			<td><p class='text2'>Rice:</p></td>
			<td><p class='text2'>$rice</p></td>
			<td><center><input type='text' size='1' class='inputs' name='amount3'><select name='option3' class='inputs' size='1'><option value='use' selected>Use<option value='drop'>Drop</select></center></td>
			<td bgcolor='FFaa33'></td>
			</tr>
			<tr>
			<td bgcolor='FFaa33' width='1'></td>
			<td bgcolor='000000' width='5'></td>
			<td><p class='text2'>Meat:</p></td>
			<td><p class='text2'>$meat</p></td>
			<td><center><input type='text' size='1' class='inputs' name='amount4'><select name='option4' class='inputs' size='1'><option value='use' selected>Use<option value='drop'>Drop</select></center></td>
			<td bgcolor='FFaa33'></td>
			</tr>
			<tr>
			<td bgcolor='FFaa33' width='1'></td>
			<td bgcolor='000000' width='5'></td>
			<td><p class='text2'>Fish:</p></td>
			<td><p class='text2'>$fish</p></td>
			<td><center><input type='text' size='1' class='inputs' name='amount5'><select name='option5' class='inputs' size='1'><option value='use' selected>Use<option value='drop'>Drop</select></center></td>
			<td bgcolor='FFaa33'></td>
			</tr>
			<tr>
			<td bgcolor='FFaa33' width='1'></td>
			<td bgcolor='000000' width='5'></td>
			<td><p class='text2'>Milk:</p></td>
			<td><p class='text2'>$milk</p></td>
			<td><center><input type='text' size='1' class='inputs' name='amount6'><select name='option6' class='inputs' size='1'><option value='use' selected>Use<option value='drop'>Drop</select></center></td>
			<td bgcolor='FFaa33'></td>
			</tr>
			<tr>
			<td bgcolor='FFaa33' width='1'></td>
			<td bgcolor='000000' width='5'></td>
			<td><p class='text2'>Fruit:</p></td>
			<td><p class='text2'>$fruit</p></td>
			<td><center><input type='text' size='1' class='inputs' name='amount7'><select name='option7' class='inputs' size='1'><option value='use' selected>Use<option value='drop'>Drop</select></center></td>
			<td bgcolor='FFaa33'></td>
			</tr>
			<tr>
			<td bgcolor='FFaa33' width='1'></td>
			<td bgcolor='000000' width='5'></td>
			<td><p class='text2'>Stamina Potions:</p></td>
			<td width='30'><p class='text2'>$staminapotion</p></td>
			<td><center><input type='text' size='1' class='inputs' name='amount8'><select name='option8' class='inputs' size='1'><option value='use' selected>Use<option value='drop'>Drop</select></center></td>
			<td bgcolor='FFaa33'></td>
			</tr>
			<tr>
			<td bgcolor='FFaa33' width='1'></td>
			<td bgcolor='000000' width='5'></td>
			<td><p class='text2'>Healing Potions:</p></td>
			<td><p class='text2'>$healingpotion</p></td>
			<td><center><input type='text' size='1' class='inputs' name='amount9'><select name='option9' class='inputs' size='1'><option value='use' selected>Use<option value='drop'>Drop</select></center></td>
			<td bgcolor='FFaa33'></td>
			</tr>
			<tr>
			<td bgcolor='FFaa33' width='1'></td>
			<td bgcolor='000000' width='5'></td>
			<td><p class='text2'></p></td>
			<td><p class='text2'></p></td>
			<td><center><input type='submit' value='Use/Drop Items' class='inputs'></form></center></td>
			<td bgcolor='FFaa33' width='1'></td>
			</tr>
			<tr height='1'>
			<td bgcolor='FFaa33'></td>
			<td bgcolor='FFaa33'></td>
			<td bgcolor='FFaa33'></td>
			<td bgcolor='FFaa33'></td>
			<td bgcolor='FFaa33'></td>
			<td bgcolor='FFaa33'></td>
			</tr>
			</table>
			<br>
			<table width='500' cellspacing='0' cellpadding='0'>
			<tr>
			<td><img src='images/weapons.gif'></td>
			<td></td>
			<td></td>
			</tr>
			</table>
			<table width='500' cellspacing='0' cellpadding='0' bgcolor='000000'>
			<tr height='1'>
			<td bgcolor='FFAA33' ></td>
			<td bgcolor='FFAA33' ></td>
			<td bgcolor='FFAA33' ></td>
			<td bgcolor='FFAA33' ></td>
			<td bgcolor='FFAA33' ></td>
			<td bgcolor='FFAA33' ></td>
			</tr>
			<tr>
			<td bgcolor='FFAA33' width='1'></td>
			<td bgcolor='000000' width='5'></td>
			<td class='text2'>Main Weapon:</td>
			<td class='text2'>$weapon</td>
			<td><form action='dropweapon1.php' method='post'><input type='submit' value='Drop' class='inputs'></form></td>
			<td bgcolor='FFAA33' width='1'></td>
			</tr>
			<tr>
			<td bgcolor='FFAA33' width='1'></td>
			<td bgcolor='000000' width='5'></td>
			<td class='text2'>Secondary Weapon:</td>
			<td class='text2'>$weapon2</td>
			<td><form action='dropweapon2.php' method='post'><input type='submit' value='Drop' class='inputs'></form></td>
			<td bgcolor='FFAA33' width='1'></td>
			</tr>
			<tr>
			<td bgcolor='FFAA33' width='1'></td>
			<td bgcolor='000000' width='5'></td>
			<td></td>
			<td width='200'><p class='text2'></p></td>
			<td class='text2'><form action='switchweapons.php' method='post'><input type='submit' value='Switch Weapons' class='inputs'></form></td>
			<td bgcolor='FFAA33' width='1'></td>
			</tr>
			<tr height='1'>
			<td bgcolor='FFAA33' ></td>
			<td bgcolor='FFAA33' ></td>
			<td bgcolor='FFAA33' ></td>
			<td bgcolor='FFAA33' ></td>
			<td bgcolor='FFAA33' ></td>
			<td bgcolor='FFAA33' ></td>
			</tr>
			</table>
			<br>
			<table width='500' cellspacing='0' cellpadding='0'>
			<tr>
			<td><img src='images/armour.gif'></td>
			<td><p class='text2'> </p></td>
			<td><p class='text2'> </p></td>
			</tr>
			</table>
			<table width='500' cellspacing='0' cellpadding='0' bgcolor='000000'>
			<tr height='1'>
			<td bgcolor='FFAA33' ></td>
			<td bgcolor='FFAA33' ></td>
			<td bgcolor='FFAA33' ></td>
			<td bgcolor='FFAA33' ></td>
			<td bgcolor='FFAA33' ></td>
			<td bgcolor='FFAA33' ></td>
			</tr>
			<tr>
			<td bgcolor='FFAA33' width='1'></td>
			<td bgcolor='000000' width='5'></td>
			<td><p class='text2'>Main Armour:</p></td>
			<td><p class='text2'>$armor</p></td>
			<td><p class='text2'><form action='droparmor1.php' method='post'><input type='submit' value='Drop' class='inputs'></form></p></td>
			<td bgcolor='FFAA33' width='1'></td>
			</tr>
			<tr>
			<td bgcolor='FFAA33' width='1'></td>
			<td bgcolor='000000' width='5'></td>
			<td><p class='text2'>Secondary Armour:</p></td>
			<td width='200'><p class='text2'>$armor2</p></td>
			<td><p class='text2'><form action='droparmor2.php' method='post'><input type='submit' value='Drop' class='inputs'></p></form></td>
			<td bgcolor='FFAA33' width='1'></td>
			</tr>
			<tr>
			<td bgcolor='FFAA33' width='1'></td>
			<td bgcolor='000000' width='5'></td>
			<td><p class='text2'></p></td>
			<td width='200'><p class='text2'></p></td>
			<td><p class='text2'><form action='switcharmor.php' method='post'><input type='submit' value='Switch Armour' class='inputs'></form></p></td>
			<td bgcolor='FFAA33' width='1'></td>
			</tr>
			<tr height='1'>
			<td bgcolor='FFAA33' ></td>
			<td bgcolor='FFAA33' ></td>
			<td bgcolor='FFAA33' ></td>
			<td bgcolor='FFAA33' ></td>
			<td bgcolor='FFAA33' ></td>
			<td bgcolor='FFAA33' ></td>
			</tr>
			</table><br></center>";
	require('closing_tags.php');
	?>