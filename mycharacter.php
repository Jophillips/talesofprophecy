<?php
	require('connection.php');

	require('generic.php');

	echo "<br><center><font class='yeoldtextlarge'>$username</font>
		<table class='text2' cellspacing='0' cellpadding='0' width='500'>
		<tr height='1'>
		<td bgcolor='999900'></td>
		<td bgcolor='999900'></td>
		<td bgcolor='999900'></td>
		<td bgcolor='999900'></td>
		<td bgcolor='999900'></td>
		<td bgcolor='999900'></td>
		<td bgcolor='999900'></td>
		</tr>

		<tr>
		<td width='1' bgcolor='999900'></td>
		<td width='5' bgcolor='000000'></td>
		<td bgcolor='000000'>Experience: </td>
		<td bgcolor='000000'> $exp</td>
		<td bgcolor='000000'>Strength: </td>
		<td bgcolor='000000'> $str</td>

		<td width='1' bgcolor='999900'></td>
		</tr>

		<tr>
		<td width='1' bgcolor='999900'></td>
		<td width='5' ></td>
		<td>Location: </td>
		<td> $city</td>
		<td>Defense:</td>
		<td> $def</td>

		<td width='1' bgcolor='999900'></td>
		</tr>

		<tr>
		<td width='1' bgcolor='999900'></td>
		<td width='5' bgcolor='000000'></td>
		<td bgcolor='000000'>Class: </td>
		<td bgcolor='000000'> $class</td>
		<td bgcolor='00000'>Agility: </td>
		<td bgcolor='000000'> $agl</td>

		<td width='1' bgcolor='999900'></td>
		</tr>

		<tr>
		<td width='1' bgcolor='999900'></td>
		<td width='5'></td>
		<td>Level: </td>
		<td>$level</td>
		<td>Evaison: </td>
		<td>$eva</td>

		<td width='1' bgcolor='999900'></td>

		</tr>


		<tr>
		<td width='1' bgcolor='999900'></td>
		<td width='5' bgcolor='000000'></td>
		<td bgcolor='000000'>Job: </td>
		<td bgcolor='000000'> $job</td>
		<td bgcolor='000000'>Accuracy: </td>
		<td bgcolor='000000'> $acc</td>

		<td width='1' bgcolor='999900'></td>
		</tr>

		<tr height='1'>
		<td bgcolor='999900'></td>
		<td bgcolor='999900'></td>
		<td bgcolor='999900'></td>
		<td bgcolor='999900'></td>
		<td bgcolor='999900'></td>
		<td bgcolor='999900'></td>
		<td bgcolor='999900'></td>
		</tr>

		</table>
		<br>

		<table class='text' cellspacing='0' cellpadding='0' width='500'>
		<tr height='1'>
		<td bgcolor='999900'></td>
		<td bgcolor='999900'></td>
		<td bgcolor='999900'></td>
		<td bgcolor='999900'></td>
		<td bgcolor='999900'></td>
		<td bgcolor='999900'></td>
		<td bgcolor='999900'></td>
		<td bgcolor='999900'></td>
		<td bgcolor='999900'></td>
		<td bgcolor='999900'></td>
		<td bgcolor='999900'></td>
		<td bgcolor='999900'></td>
		</tr>

		<tr>
		<td width='1' bgcolor='999900'></td>
		<td width='5'></td>
		<td>Primary Weapon: </td>
		<td width='15' bgcolor='660000'></td>
		<td bgcolor='660000'> $weapon</td>
		<td width='15' bgcolor='660000'></td>
		<td width='15' bgcolor='660000'></td>
		<td>Secondary Weapon: </td>
		<td width='15' bgcolor='660000'></td>
		<td bgcolor='660000'> $weapon2</td>
		<td width='15' bgcolor='660000'></td>
		<td width='1' bgcolor='999900'></td>
		</tr>

		<tr>

		<td width='1' bgcolor='999900'></td>
		<td width='5' bgcolor='660000'></td>
		<td bgcolor='660000'>Primary Armour:</td>
		<td width='15'></td>
		<td>$armor</td>
		<td width='15'></td>
		<td width='15'></td>
		<td bgcolor='660000'>Secondary Armour: </td>
		<td width='15'></td>
		<td> $armor2</td>
		<td width='15'></td>
		<td width='1' bgcolor='999900'></td>
		</tr>

		<tr height='1'>
		<td bgcolor='999900'></td>
		<td bgcolor='999900'></td>
		<td bgcolor='999900'></td>
		<td bgcolor='999900'></td>
		<td bgcolor='999900'></td>
		<td bgcolor='999900'></td>
		<td bgcolor='999900'></td>
		<td bgcolor='999900'></td>
		<td bgcolor='999900'></td>
		<td bgcolor='999900'></td>
		<td bgcolor='999900'></td>
		<td bgcolor='999900'></td>
		</tr>

		</table>
		<font class='text2'><a href='backpack.php'>Change these Items</a></font></center>

		 ";

	require('Messages/login_message.php');
	require('closing_tags.php');
?>