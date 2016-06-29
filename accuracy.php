<?php
	$MyACC=$me['ACC'];
	$MyEVA=$me['EVA'];
	$YourACC=$you['ACC'];
	$YourEVA=$you['EVA'];
	$MyHitChance=$MyACC/$YourEVA*50;
	$YourHitChance=$YourACC/$MyEVA*50;
	$random=rand(1,100);
	
	if($MyHitChance>=$random){
		$MyHit='yes';
	} else {
		$MyHit='no';
	}

	
	if($YourHitChance>=$random){
		$YourHit='yes';
	} else {
		$YourHit='no';
	}

	?>