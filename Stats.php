<?php
$userid=$_SESSION['userid'];

$q5="select login from register WHERE userid='$userid'";
$r5=mysql_query($q5)
	or die("FAILED TO EXECUTE QUERY");
$o5=mysql_fetch_array($r5,MYSQL_ASSOC);
$username=$o5['login'];

$q3="select * from charinfo WHERE userid='$userid'";
$r3=mysql_query($q3)
	or die("FAILED TO EXECUTE QUERY");
$o3=mysql_fetch_array($r3,MYSQL_ASSOC);
$city=$o3['city'];
$class=$o3['class'];
$gold=$o3['gold'];
$silver=$o3['silver'];
$gems=$o3['gems'];
$iron=$o3['iron'];
$wood=$o3['wood'];
$level=$o3['level'];
$str=$o3['STR'];
$def=$o3['DEF'];
$agl=$o3['AGL'];
$eva=$o3['EVA'];
$acc=$o3['ACC'];
$hp=$o3['HP'];
$chp=$o3['currentHP'];
$stamina=$o3['stamina'];
$Cstamina=$o3['Cstamina'];
$weapon=$o3['weapon'];
$weapon2=$o3['weapontwo'];
$faction=$o3['faction'];
$division=$o3['division'];
$armor=$o3['armor'];
$armor2=$o3['armortwo'];
$bread=$o3['bread'];
$water=$o3['water'];
$rice=$o3['rice'];
$meat=$o3['meat'];
$fish=$o3['fish'];
$milk=$o3['milk'];
$fruit=$o3['fruit'];
$staminapotion=$o3['staminapotion'];
$healingpotion=$o3['healingpotion'];
$job=$o3['job'];
$exp=$o3['exp'];
$newmessages=$o3['newmessages'];

$totalitems=$bread + $water + $rice + $meat + $fish + $milk + $fruit + $staminapotion + $healingpotion;
?>