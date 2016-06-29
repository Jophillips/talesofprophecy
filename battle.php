<?php ob_start(); ?>
<?php
	require('connection.php');
	echo "<center>";
	SESSION_REGISTER('yourid');
	/*gets challenger data*/
	$myid=$_SESSION['userid'];
	$q1="select * from charinfo where userid='$myid'";
	$r1=mysql_query($q1)or die("FAILED TO EXECUTE QUERY");
	$me=mysql_fetch_array($r1,MYSQL_ASSOC);
	$yourid=$_POST['uid'];
	$q2="select * from charinfo where userid='$yourid'";
	$r2=mysql_query($q2)or die("FAILED TO EXECUTE QUERY");
	$you=mysql_fetch_array($r2,MYSQL_ASSOC);
	/*check current hp*/
	$CHP=$me['currentHP'];
	$CST=$me['Cstamina'];
	$OCHP=$you['currentHP'];
	$dead='no';
	$fail='no';
	$tired='no';
	$odead='no';
	
	if($CHP<='0'){
		$dead='yes';
		$fail='yes';
	}

	
	if($CST<'10'){
		$tired='yes';
		$fail='yes';
	}

	
	if($OCHP<='0'){
		$odead='yes';
		$fail='yes';
	}

	
	if($fail=='yes'){
		
		if($dead=='yes'){
			echo "<table class='text'><tr><td>Your hit points are at zero, you can hardly stand let alone battle.</td></tr></table>";
			echo "</center>";
		}

		
		if($tired=='yes' and $dead=='no'){
			echo "<table class='text'><tr><td>You have dont have enough stamina remaining.</td></tr></table>";
			echo "</center>";
		}

		
		if($odead=='yes'){
			echo "<table class='text'><tr><td>Your opponent is dead, you shouldnt try to hit people while they are down.</td></tr></table>";
			echo "</center>";
		}

	}

	
	if($myid!=$yourid){
		
		if($dead=='no' and $tired=='no' and $odead=='no' and $fail='no'){
			$_SESSION['yourid']=$yourid;
			require('radius.php');
			
			if($inrange=='yes'){
				$nst=$CST-10;
				mysql_query("update charinfo set Cstamina='$nst' where userid='$myid'");
				header('location:fight.php');
			} else {
				echo "<table class='text'><tr><td><br>Your opponent is out of range, you can only fight people within a 3 by 3 radius of yourself.</td></tr></table>";
				echo "</center>";
			}

		}

	} else {
		echo "<center><table class='text'><tr><td><br>You cannot fight yourself</td></tr></table></center>";
		echo "</center>";
	}

	echo "test";
	require('generic.php');
	require('closing_tags.php');
	?>
<?php ob_flush(); ?>