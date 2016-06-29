<?php
	require('connection.php');
	$q3="select userid from charinfo";
	$r3=mysql_query($q3)or die("FAILED TO EXECUTE QUERY");
	$o3=mysql_fetch_array($r3,MYSQL_ASSOC);
	$q5="select max(userid) from charinfo";
	$r5=mysql_query($q5)or die("FAILED TO EXECUTE QUERY");
	$o5=mysql_fetch_array($r5,MYSQL_ASSOC);
	$the=$o5['max(userid)'];
	require('generic_preloggin.php');

	echo "<br><center>
		<table>
		<form action='login.php' method='post'>
		<tr><td class='text'>Username:&nbsp
		<input type='text' size=12 class='inputs' name='user'>&nbsp</td>
		<td class='text'>Password:&nbsp
		<input type='password' size=12 class='inputs' name='pass'><td>
		<td><input type='submit' value='Login' class='inputs'></td></tr>
		</form>
		</table>
		</center>
		<p class='text2' size='+2'> We are sorry for the inconvenience but tales of prophecy is in a beta stage of development. You may find errors thoughout your game session, and we ask that you report them to these programmers <a href='mailto:darkzyxu@gmail.com,atheistdeity@gmail.com'>here</a> or you can visit the contacts page for the direct text.</p>
		<p class='text2'>$the users served</p>
		<p class='text'>	In a world divided by war, chaos reigns and Anarchy governs.  A civilization, 500 years isolated from the rest of the world, is beginning to crumble.  All traces of their past have been erased and divided by their misguided ideas and morals the people rage an arcane war hoping to bring some purpose to their otherwise meaningless lives.</p>
		<p class='text'>	As a confused young individual coming of age in this chaotic world you've been fending for yourself since you were a child.  Knowing all to well the dangers of the streets, and longing to make your mark on this world, you decide that its time you joined up with one of the many factions fighting in their own way to bring some order to the chaos that encapsulates the region.  Your time has come, and whether for your own personal gain or for the common good one thing is for certain, this is bound to be the adventure of your lifetime.</p><center><p font=14px><a href='register.php'>Register</a></p></center> ";
		
	require('side_noad.php');
	?>