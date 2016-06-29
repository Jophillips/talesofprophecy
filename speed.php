<?php
	
	if($MyAGL>$YourAGL){
		$MyAGL=$MyAGL-$YourAGL;
		$YourAGL=$YourAGL+$YourConstAGL;
		$turn='mine';
	}

	elseif($MyAGL<$YourAGL){
		$YourAGL=$YourAGL-$MyAGL;
		$MyAGL=$MyAGL+$MyConstAGL;
		$turn='yours';
	} else {
		
		if($MyAGL==$YourAGL){
			$MyAGL=$MyConstAGL;
			$YourAGL=$YourConstAGL;
			$random=rand(1,2);
			
			if($random=='1'){
				$turn='mine';
			} else {
				$turn='yours';
			}

		}

	}

	?>