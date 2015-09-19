<?php
require('connection.php');


require('generic.php');



  
echo "
<center><br>You have $totalitems item";
if ( $totalitems='1' )
{
echo "";
}
if ( $totalitems=2 )
{
echo "s";
}
echo " in your backpack.<a href='ingamehelp.php#backpack'><img src='images/questionmark_sm.gif' border='0'></a>";

if ( $totalitems > $str or $totalitems = $str  )
{
echo "<br><table class='text2' width='500'><tr><td>You do not have anymore room for new items, you're not going to be able to pick up any more items you find with the expection of prizes.</td></tr></table>";
}

elseif (  $str > $totalitems  )
{
echo "";
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