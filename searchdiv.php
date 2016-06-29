<?php
	require('connection.php');
	require('stats.php');
	require('generic.php');
	echo "
			<br>
			<table class='text2'><tr>
			<td>What division are you looking for?</td>
			</tr></table>
			<table class='text2'><tr>
			<td>Find </td>
			<form action='searchdiv.php' method='post'>
			<td><input type='text' name='search' class='inputs'></td>
			<input type='hidden' name='first' value='no'>
			<td> by <SELECT class='inputs' name='by' size='1'>
			<option value='location' class='inputs' selected>location
			<option value='name' class='inputs' selected>name
			</select></td></tr></table>
			<table><tr><td><input type='submit' value='Search' class='inputs'></td></tr></form>
			";
	?>
<?php
	$search=$_POST['search'];
	$by=$_POST['by'];
	
	if($by=='location'){
		require('connection_gamevars.php');
		$q3="select divison from divisons where location like '%$search%'";
		$r3=mysql_query($q3)or die("FAILED TO EXECUTE QUERY1");
		$x=mysql_num_rows($r3);
		echo "<table class='text'>";
		for($i=1;$i <= $x;$i++){
			$o3=mysql_fetch_array($r3,MYSQL_ASSOC);
			$uloc=$o3['divison'];
			$q4="select * from divisons where divison='$uloc'";
			$r4=mysql_query($q4)or die("FAILED TO EXECUTE QUERY2");
			$o4=mysql_fetch_array($r4,MYSQL_ASSOC);
			echo "<tr class='text2'><td>";
			echo "<font color='FFAA33'>";
			echo $o4['divison'] ;
			echo "</font>";
			echo "</td><td>";
			echo $o4['faction'];
			echo "</td><td>";
			echo "<font color='CCCCCC'>Location: </font>";
			echo $o4['location'];
			echo"
				</td><td><br>
				<form action='divstatus.php' method='post'>
				<input type='hidden' name='uloc' value='$uloc'>
				<input type='submit' value='stats' class='inputs'>
				</form>
				</td>
				</tr>
				";
		}

	}

	
	if($by=='name'){
		
		if(ereg("..?.?.?.?.?.?.?.?.?.?.?.?.?.?.?",$search)){
			require('connection_gamevars.php');
			$q3="select divison from divisons where divison like '%$search%'";
			$r3=mysql_query($q3) or die("FAILED TO EXECUTE QUERY1a");
			$x=mysql_num_rows($r3);
			echo "<table class='text'>";
			for($i=1;$i <= $x;$i++){
				$o3=mysql_fetch_array($r3,MYSQL_ASSOC);
				$udiv=$o3['divison'];
				$q4="select * from divisons where divison='$udiv'";
				$r4=mysql_query($q4)or die("FAILED TO EXECUTE QUERY2");
				$o4=mysql_fetch_array($r4,MYSQL_ASSOC);
				echo "<tr class='text2'><td>";
				echo "<font color='FFAA33'>";
				echo $o3['divison'] ;
				echo "</font>";
				echo "</td><td>";
				echo $o4['faction'];
				echo "</td><td>";
				echo "<font color='CCCCCC'>Location: </font>";
				echo $o4['location'];
				echo"
					</td><td><br>
					<form action='divstatus.php' method='post'>
					<input type='hidden' name='uloc' value='$udiv'>
					<input type='submit' value='stats' class='inputs'>
					</form>
					</td>
					</tr>
					";
			}

		}

	}

	?>