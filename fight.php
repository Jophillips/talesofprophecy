<?php
	require('connection.php');
	require('generic.php');
	$yourid=$_SESSION['yourid'];
	$res=mysql_query("select currentHP from charinfo where userid='$yourid'");
	$wro=mysql_fetch_array($res,MYSQL_ASSOC);
	$uhp=$wro['currentHP'];
	require('Stats.php');
	
	if($chp>=1){
		
		if($uhp>=1){
			$cont=$_POST['continue'];
			
			if($cont!='no'){
				$draw='no';
				$victory='no';
				$loss='no';
				/*get user stats*/
				$myid=$_SESSION['userid'];
				$myname=$_SESSION['username'];
				$q1="select * from charinfo where userid='$myid'";
				$r1=mysql_query($q1)or die("FAILED TO EXECUTE QUERY");
				$me=mysql_fetch_array($r1,MYSQL_ASSOC);
				$MyHP=$me['currentHP'];
				$MyAGL=$me['AGL'];
				$MyConstAGL=$me['AGL'];
				/*get opponent stats*/
				$q2="select * from charinfo where userid='$yourid'";
				$q3="select login from register where userid='$yourid'";
				$r2=mysql_query($q2)or die("FAILED TO EXECUTE QUERY");
				$r3=mysql_query($q3)or die("FAILED TO EXECUTE QUERY");
				$you=mysql_fetch_array($r2,MYSQL_ASSOC);
				$name=mysql_fetch_array($r3,MYSQL_ASSOC);
				$YourHP=$you['currentHP'];
				$YourAGL=$you['AGL'];
				$YourConstAGL=$you['AGL'];
				$yourname=$name['login'];
				echo"<br>";
				$allout=$_POST['allout'];
				/*causes turns to repeat 10 times*/
				for($i=1;$i<=10;$i++){
					
					if($allout=='yes'){
						$i--;
					}

					/*checks for draw must come first*/
					
					if($MyHP<='0' and $YourHP<='0'){
						$draw='yes';
						break;
					}

					/*checks for defeat*/
					
					if($MyHP<='0'){
						$loss='yes';
						break;
					}

					/*checks for victory*/
					
					if($YourHP<='0'){
						$victory='yes';
						break;
					}

					/*battle algorithms*/
					require('speed.php');
					require('accuracy.php');
					require('damage.php');
					/*my turn*/
					
					if($turn=='mine'){
						
						if($MyHit=='no'){
							echo $myname;
							echo "'s attack missed";
						}

						
						if($MyHit=='yes'){
							echo "$myname inflicted $MyDamage damage to $yourname";
							
							if($MyDamage>=$YourHP){
								$MyDamage=$YourHP;
							}

							$YourHP=$YourHP-$MyDamage;
						}

					}

					/*opponents turn*/
					
					if($turn=='yours'){
						
						if($YourHit=='no'){
							echo $yourname;
							echo "'s attack missed";
						}

						
						if($YourHit=='yes'){
							echo "$yourname inflicted $YourDamage damage to $myname";
							
							if($YourDamage>=$MyHP){
								$YourDamage=$MyHP;
							}

							$MyHP=$MyHP-$YourDamage;
						}

					}

					$qme="update charinfo set currentHP='$MyHP' where userid='$myid'";
					$qyou="update charinfo set currentHP='$YourHP' where userid='$yourid'";
					mysql_query($qme) or die("FAILED TO EXECUTE QUERY");
					mysql_query($qyou) or die ("FAILED TO EXECUTE QUERY");
					echo "<br>";
					/*checks for draw must come first*/
					
					if($MyHP<='0' and $YourHP<='0'){
						$draw='yes';
						break;
					}

					/*checks for defeat*/
					
					if($MyHP<='0'){
						$loss='yes';
						break;
					}

					/*checks for victory*/
					
					if($YourHP<='0'){
						$victory='yes';
						break;
					}

				}

				$rerun='no';
				$mhp=$me['HP'];
				
				if($draw=='yes'){
					$draws=$me['draws']+1;
					$dq1="UPDATE charinfo set draws='$draws' where userid='$myid'";
					mysql_query($dq1) or die ("FAILED TO EXECUTE QUERY");
					$draws2=$you['draws']+1;
					$dq2="UPDATE charinfo set draws='$draws2' where userid='$yourid'";
					mysql_query($dq2) or die ("FAILED TO EXECUTE QUERY");
					echo "<br>DRAW!";
					require('draw.php');
				}

				
				if($victory=='yes'){
					$wins=$me['wins']+1;
					$vq1="UPDATE charinfo set wins='$wins' where userid='$myid'";
					mysql_query($vq1) or die ("FAILED TO EXECUTE QUERY");
					$losses=$you['losses']+1;
					$vq2="UPDATE charinfo set losses='$losses' where userid='$yourid'";
					mysql_query($vq2) or die ("FAILED TO EXECUTE QUERY");
					echo "<br>Congratulaions $myname you are victorious!";
					require('victory.php');
				}

				
				if($loss=='yes'){
					$losses=$me['losses']+1;
					$lq1="UPDATE charinfo set losses='$losses' where userid='$myid'";
					mysql_query($lq1) or die ("FAILED TO EXECUTE QUERY");
					$wins=$you['wins']+1;
					$lq2="UPDATE charinfo set wins='$wins' where userid='$yourid'";
					mysql_query($lq2) or die ("FAILED TO EXECUTE QUERY");
					echo "<br>You have failed to acheive victory!";
					require('loss.php');
				}

				
				if($victory=='no' and $loss=='no' and $draw=='no'){
					$mhp=$me['HP'];
					$yhp=$you['HP'];
					echo "<br><table class='text'>
					<tr><td>$myname</td><td> $MyHP / $mhp HP</td></tr>
					<tr><td>$yourname</td><td> $YourHP / $yhp HP</td></tr>
					<table class='text'><tr><form action='fight.php' method='post'><td>
					<input type='hidden' name='continue' value='yes'><input type='hidden' name='allout' value=''><input type='submit' value='Continue' class='inputs'></td></form>
					<form action='fight.php' method='post'><input type='hidden' name='allout' value='yes'><td><input type='hidden' name='continue' value='yes'><input type='submit' value='All Out' class='inputs'></td></form>
					<form action='fight.php' method='post'><td>
					<input type='hidden' name='continue' value='no'><input type='hidden' name='allout' value=''><input type='submit' value='Flee' class='inputs'></td></tr></table></form>
					";
				}

			} else {
				echo "<br>";
				echo $_SESSION['username'];
				echo" escaped from battle.";
				require('escape.php');
			}

		} else {
			echo "<br>Your opponent is dead. Either someone beat you to the kill or else you simply refreshed the page but either way...NO EXPERIENCE FOR YOU";
		}

	} else {
		echo "<br>You have died. Perhaps you were attacked while you were fighting or maybee you just refreshed the page but you still didnt finish your battle and thus NO EXPERIENCE FOR YOU";
	}

	require('closing_tags.php');
	?>