<?php
	require('connection.php');
	$username = $_POST['user'] ;
	$pass = $_POST['pass'] ;
	session_register('username','password','userid');
	/*check input*/
	
	if($username!=""){
		
		if($pass!=""){
			$q1="SELECT pass FROM register WHERE login='$username'";
			$r1=mysql_query($q1)or die ("FAILED TO EXECUTE QUERY");
			$o1=mysql_fetch_array($r1,MYSQL_ASSOC);
			
			if($pass==$o1['pass']){
				$q2="SELECT userid FROM register WHERE login='$username'";
				$r2=mysql_query($q2)        or die ("FAILED TO EXECUTE QUERY");
				$o2=mysql_fetch_array($r2,MYSQL_ASSOC);
				$userid=$o2['userid'];
				$q3="select * from charinfo WHERE userid='$userid'";
				$r3=mysql_query($q3)or die("FAILED TO EXECUTE QUERY");
				$o3=mysql_fetch_array($r3,MYSQL_ASSOC);
				/* declares sessions */
				$_SESSION['username']=$username;
				$_SESSION['password']=$pass;
				$_SESSION['userid']= $userid;
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
				$weapon=$o3['weapon'];
				$faction=$o3['faction'];
				$division=$o3['division'];
				$armor=$o3['armor'];
				header('Location: mycharacter.php');
			} else {
				echo "<br><br><font class='text'>Your Password or Username is incorrect please <a href='index.php'>try again</a></font>";
			}

			// Ends else
		}

		//Blank Pass If else {
			echo "<br><br><font class='text'>You failed to type a password, please <a href='index.php'>try again</a></font>";
		}

		// Ends else
	} else {
		echo "<br><br><font class='text'>You failed to type a username, please <a href='index.php'>try again</a></font>";
	}

	// Ends else
	?>