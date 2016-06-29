<?php
	$MySTR=$me['STR'];
	$MyDEF=$me['DEF'];
	$YourSTR=$you['STR'];
	$YourDEF=$you['DEF'];
	$MyDamage=$MySTR/$YourDEF+$MySTR-$YourDEF;
	$YourDamage=$YourSTR/$MyDEF+$YourSTR-$MyDEF;
	
	if($MyDamage<1){
		$MyDamage='1';
	}

	
	if($YourDamage<1){
		$YourDamage='1';
	}

	$MyDamage=sprintf("%.0f",$MyDamage);
	$YourDamage=sprintf("%.0f",$YourDamage);
	?>