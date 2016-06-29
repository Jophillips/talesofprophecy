<?php
	require('connection.php');


	require('generic.php');

	echo "
		<table><tr><td>
		<br>
		<center><img src='images/questionmark.gif'><font class='text2'><h1>HELP</h1></font></center>


		<p class='text2' label='backpack'>
		<b>Backpack</b> - The number of items you can carry is based on your strength. Your strength is $str therefore you can carry $str items. Currently you have $totalitems items.<br>
		<br> Consuming Food restores your Health Points: <br>
		25% Bread <br>
		25% Water <br>
		25% Rice<br>
		50% Meat<br>
		75% Fish<br>
		100% Milk<br>
		100% Fruit<br>
		</p>

		</td>
		</tr>
		</table>

		<table class='text'>
		<tr><td>Class</td><td>Level up Bonus</td><td>Description.</td></tr>
		<tr></tr>
		<tr><td>Stoic</td><td>HP+24</td><td></td></tr>
		<tr><td>Sharp Shooter</td><td>ACC+8</td><td></tr>
		<tr><td>Defender</td><td>DEF+8</td><td></tr>
		<tr><td>Fighter</td><td>STR+8</td><td></td></tr>
		<tr><td>Berserker</td><td>AGL+8</td><td></tr>
		<tr><td>Ghost</td><td>EVA+8</td><td> </td></tr>
		<tr><td>Paladin</td><td>ACC+5 DEF+3</td><td>. </td></tr>
		<tr><td>Gunner</td><td>ACC+5 STR+3</td><td> </td></tr>
		<tr><td>Archer</td><td>ACC+5 AGL+3</td> <td>  </td> </tr>
		<tr><td>Ninja</td><td>ACC+5 EVA+3</td> <td></td></tr>
		<tr><td>Hunter</td><td>ACC+5 HP+9</td> <td> </td></tr>
		<tr><td>Pikeman</td><td>DEF+5 ACC+3</td> <td> </td></tr>
		<tr><td>Dragoon</td><td>DEF+5 STR+3</td></tr>
		<tr><td>Swordsman</td><td>DEF+5 AGL+3</td></tr>
		<tr><td>Merchant</td><td>DEF+5 EVA+3</td></tr>
		<tr><td>Miner</td><td>DEF+5 HP+9</td></tr>
		<tr><td>Black Knight</td><td>STR+5 ACC+3</td></tr>
		<tr><td>Knight</td><td>STR+5 DEF+3</td></tr>
		<tr><td>Barbarian</td><td>STR+5 AGL+3</td></tr>
		<tr><td>Fencer</td><td>STR+5 EVA+3</td></tr>
		<tr><td>Worker</td><td>STR+5 HP+9</td></tr>
		<tr><td>Theif</td><td>AGL+5 ACC+3</td></tr>
		<tr><td>Ranger</td><td>AGL+5 DEF+3</td></tr>
		<tr><td>Amazon</td><td>AGL+5 STR+3</td></tr>
		<tr><td>Outlaw</td><td>AGL+5 EVA+3</td></tr>
		<tr><td>Cavlary</td><td>AGL+5 HP+9</td></tr>
		<tr><td>Assiassian</td><td>EVA+5 ACC+3</td></tr>
		<tr><td>Politician</td><td>EVA+5 DEF+3</td></tr>
		<tr><td>Lumber Jack</td><td>EVA+5 STR+3</td></tr>
		<tr><td>Dancer</td><td>EVA+5 AGL+3</td></tr>
		<tr><td>Gambler</td><td>EVA+5 HP+9</td></tr>
		<tr><td>Commander</td><td>HP+15 ACC+3</td></tr>
		<tr><td>Druid</td><td>HP+15 DEF+3</td></tr>
		<tr><td>Black Smith</td><td>HP+15 STR+3</td></tr>
		<tr><td>Axeman</td><td>HP+15 AGL+3</td></tr>
		<tr><td>Fanatic</td><td>HP+15 EVA+3</td></tr>
		</table>


		 ";


	require('closing_tags.php');
?>