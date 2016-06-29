<?php
	require('connection.php');
	require('Stats.php');
	require('generic.php');
	echo "<center>";
	/*check input*/
	$q1="SELECT pass FROM register WHERE login='$username'";
	$r1=mysql_query($q1)or die ("FAILED TO EXECUTE QUERY");
	$o1=mysql_fetch_array($r1,MYSQL_ASSOC);
	
	if($pass==$o1['pass']){
		$id=$_SESSION['userid'];
		$valueor=$_POST['valueor'];
		$ran1=rand(1,3);
		$ran2=rand(1,3);
		$ran3=rand(1,3);
		$value=($valueor*5);
		
		if ($valueor<=0 ){
			die ("You must input a valid number");
		}

		
		If ($gold>=$valueor){
			$gold= $gold-$valueor;
			$q1="Update charinfo set gold='$gold' where userid='$userid'";
			$r1=mysql_query($q1);
			echo "<br><table bgcolor='000000' height='50'><tr><td><img src='images/levels/$ran1.gif'><img src='images/levels/$ran2.gif'><img src='images/levels/$ran3.gif'></td></tr></table><br>";
			
			if($ran1==$ran2 and $ran3==$ran2){
				echo "<br><font size='5'>You WIN $value Gold!</font>";
				$gold= $gold+$value;
				$q1="Update charinfo set gold='$gold' where userid='$userid'";
				$r1=mysql_query($q1);
			}

			$q3="select * from charinfo WHERE userid='$userid'";
			$r3=mysql_query($q3)or die("FAILED TO EXECUTE QUERY");
			$o3=mysql_fetch_array($r3,MYSQL_ASSOC);
			$gold=$o3['gold'];
			echo "<form action='playslots.php' method='post'><input type='text' class='inputs' name='valueor' value='$valueor'><br>New Gold Balance $gold<br><input type='submit' value='Pull Agian' class='inputs'></form>";
		} else {
			echo "<br>You do not have enough Gold<br><br>Would you like to put in a smaller amount?<br><form action='playslots.php' method='post'><input type='text' class='inputs' name='valueor' value=''><br>You have $gold Gold<br><input type='submit' value='Pull Agian' class='inputs'></form>";
		}

	}

	echo "</center>";
	require('closing_tags.php');
	?>