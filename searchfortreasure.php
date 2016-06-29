<?php
	require('connection.php');
	//Gets Connection Info	
	require('generic.php');
	//Gets First Part of the Layout
	echo "<br><center><h3>";
	//Adds a space, centers and makes the font size heading 3
	//If Stamina is more then 1 then display options
	
	if( $Cstamina>=1){
		$Cstamina=$Cstamina-1;
		//Removes 1 Stamina
		$q2="Update charinfo set Cstamina='$Cstamina' where userid='$userid'";
		//Mysql input
		$r2=mysql_query($q2);
		//Sends query
		// -------------------------------------------- Treasure Code Begins ------------------------------------------------ //
		$random50=rand(1,50);
		//Generates a random number between 1 and 50
		$random100=rand(1,100);
		//Generates a random number between 1 and 100
		$random150=rand(1,150);
		//Generates a random number between 1 and 150
		$random200=rand(1,200);
		//Generates a random number between 1 and 200
		$random400=rand(1,400);
		//Generates a random number between 1 and 400
		$random500=rand(1,500);
		//Generates a random number between 1 and 500
		$random1500=rand(1,1500);
		//Generates a random number between 1 and 1500
		//Random Bread Find
		
		if( $random50=='25') {
			$bread= $bread +1;
			$q1="Update charinfo set bread='$bread' where userid='$userid'";
			$r1=mysql_query($q1);
			Echo "You found 1 peice of bread.";
		}

		//Else Random Water Find
		elseif( $random50=='50') {
			$water= $water +1;
			$q1="Update charinfo set water='$water' where userid='$userid'";
			$r1=mysql_query($q1);
			Echo "You found 1 water. ";
		}

		//Else Random Rice Find
		elseif( $random50=='1') {
			$rice= $rice +1;
			$q1="Update charinfo set rice='$rice' where userid='$userid'";
			$r1=mysql_query($q1);
			Echo "You found 1 bag of rice.";
		}

		//Else Random Meat Find
		elseif( $random100=='1') {
			$meat= $meat +1;
			$q1="Update charinfo set meat='$meat' where userid='$userid'";
			$r1=mysql_query($q1);
			Echo "You found 1 piece of meat.";
		}

		//Else Random Fish Find
		elseif( $random150=='1'){
			$fish= $fish +1;
			$q1="Update charinfo set fish='$fish' where userid='$userid'";
			$r1=mysql_query($q1);
			Echo "You found 1 fish.";
		}

		//Else Random Milk Find
		elseif( $random200=='1') {
			$milk= $milk +1;
			$q1="Update charinfo set milk='$milk' where userid='$userid'";
			$r1=mysql_query($q1);
			Echo "You found 1 milk";
		}

		//Else Random Fruit Find
		elseif( $random400=='1'){
			$fruit= $fruit +1;
			$q1="Update charinfo set fruit='$fruit' where userid='$userid'";
			$r1=mysql_query($q1);
			Echo "You found 1 fruit ";
		}

		//Else if nothing Found then display just that. else {
			Echo "You found nothing. ";
		}

		// -------------------------------------------- Movement Code Begins -------------------------------------------------- //
		/*MY POSITION*/
		$myid=$_SESSION['userid'];
		$q=mysql_query("select city from charinfo where userid='$myid'");
		$r=mysql_fetch_array($q,MYSQL_ASSOC);
		$city=$r['city'];
		// If City is Reich then coordinates = 8,F
		
		if($city=='Reich' or $city=='Reich') {
			$city='(8,F)';
		}

		// If City is Hetnieuwe then coordinates = 2,F
		
		if($city=='Hetnieuwe' or $city=='hetnieuwe'){
			$city='(2,F)';
		}

		// If City is Acier then coordinates = 13,B
		
		if($city=='Acier' or $city=='acier'){
			$city='(13,B)';
		}

		// If City is Bauholz then coordinates = 13,J
		
		if($city=='Bauholz' or $city=='bauholz'){
			$city='(13,J)';
		}

		//Seperates the coordinates so they can be changed
		list($useless, $ycoord, $xcoord)=split('[(,)]',$city);
		//New City = City
		$newcity=$city;
		
		if($city=='(8,F)') {
			$newcity='Reich';
		}

		
		if($city=='(2,F)') {
			$newcity='Hetnieuwe';
		}

		
		if($city=='(13,B)'){
			$newcity='Acier';
		}

		
		if($city=='(13,J)'){
			$newcity='Bauholz';
		}

		//Prints Coordinates
		//--------------- Table Begins ------------------//
		echo "<center><font color='FFFFFF' size='16'>$city</font> <br><table text='FFAA33'><table><tr>";
		//--------------- Top Left Column ------------------//
		//If x is A or Y is 1 then echo nothing but a blank Table column
		
		if ($xcoord=='A' or $ycoord=='1'){
			echo "<form action='Smove.php' method='post'><center><td></td></center></form>";
		}

		//else print north west option else {
			echo "<td><form action='Smove.php' method='post'><center><input type='hidden' value='North' name='North'  class='inputs'><input type='hidden' value='West'  name='West'  class='inputs'><input type='submit' value='NorthWest' class='inputs'></center></form></td>";
		}

		//--------------- Top Middle Column ------------------//
		// If Y = 1 (The northern edge of the map ) Then display a blank table column
		
		if ($ycoord=='1'){
			echo "<td><form action='Smove.php' method='post'></form></td>";
		}

		//If not then display north option else {
			echo "<td><center><form action='Smove.php' method='post'><input type='hidden' value='North' name='North'  class='inputs'><input type='submit' value='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;North&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' class='inputs'></form></center></td>";
		}

		//--------------- Top Right Column ------------------//
		//if K or 1 then display nothing
		
		if ($xcoord=='K' or $ycoord=='1') {
			echo "<td><form action='Smove.php' method='post'> </form></td>";
		}

		//else print north east option else {
			echo "<td><form action='Smove.php' method='post'><center><input type='hidden' value='North' name='North'  class='inputs'><input type='hidden' value='East'  name='East'  class='inputs'><input type='submit' value='NorthEast' class='inputs'></center></form></center></td>";
		}

		//--------------------End of first row---------------//
		Echo "</tr><tr>";
		//---------------Middle Left Column ------------------//
		//If x is A then echo nothing but a blank Table column
		
		if ($xcoord=='A'){
			echo "<td><form action='Smove.php' method='post'><center></center></form></td>";
		}

		//else print west option else {
			echo "<td><center><form action='Smove.php' method='post'><center><input type='hidden' value='West'  name='West'  class='inputs'><input type='submit' value='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;West&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' class='inputs'></center></form></center></td>";
		}

		//---------------Middle Column ------------------//
		// Searchs for Treasure on Spot
		Echo "<td><form action='Smove.php' method='post'><center><input type='hidden' value='Stay' name='Stay'  class='inputs'><input type='submit' value='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $newcity &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' class='inputs'></center></form></td>";
		//--------------- Middle Right Column ------------------//
		//if K then display nothing
		
		if ($xcoord=='K'){
			echo "<td><form action='Smove.php' method='post'><center></center></form></td>";
		}

		//If not then display east option else {
			echo "<td><center><form action='Smove.php' method='post'><center><input type='hidden' value='East'  name='East'  class='inputs'><input type='submit' value='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;East&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' class='inputs'></center></form></center></td>";
		}

		//--------------------End of second row---------------//
		Echo "</tr><tr>";
		//---------------Bottom Left Column ------------------//
		//If x is A and y = 16 then echo nothing but a blank Table column
		
		if ($xcoord=='A' or $ycoord=='16'){
			echo "<td><form action='Smove.php' method='post'><center></center></form></td>";
		}

		//If not then display southwest option else {
			echo "<td><form action='Smove.php' method='post'><center><input type='hidden' value='South' name='South'  class='inputs'><input type='hidden' value='West'  name='West'  class='inputs'><input type='submit' value='SouthWest' class='inputs'></center></form></td>";
		}

		//---------------Bottom Middle Column ------------------//
		// If Y = 16 (The southern edge of the map ) Then display a blank table column
		
		if($ycoord=='16'){
			echo "<td><form action='Smove.php' method='post'><center></center></form></td>";
		}

		//If not then display south option else {
			echo "<td><center><form action='Smove.php' method='post'><center><input type='hidden' value='South' name='South'  class='inputs'><input type='submit' value='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;South&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' class='inputs'></center></form></center></td>";
		}

		//--------------- Bottom Right Column ------------------//
		//if K or 16 then display nothing
		
		if ($xcoord=='K' or $ycoord=='16'){
			echo "<td><form action='Smove.php' method='post'><center></center></form></td>";
		}

		//else print south east option else {
			echo "<td><center><form action='Smove.php' method='post'><center><input type='hidden' value='South' name='South'  class='inputs'><input type='hidden' value='East'  name='East'  class='inputs'><input type='submit' value='SouthEast' class='inputs'></center></form></center></td>";
		}

		//--------------- Table Ends ------------------//
		echo "</tr></table></center>";
		//---------------------------------------------City Options--------------------------------------------//
		//Gets the city options for 13,B (Acier)
		
		if( $city == '(13,B)' ) {
			require('cityoptions/acier.php');
		}

		//Gets the city options for 13,J (Bauholz)
		
		if( $city == '(13,J)' ) {
			require('cityoptions/bauholz.php');
		}

		//Gets the city options for Reich
		
		if( $city == 'Reich ' ) {
			require('cityoptions/Reich.php');
		}

		//Starting Position (Noob City) 
		
		if( $city == '(2,F)' ) {
			echo "";
		}

		
		if( $city == '(4,C)' ){
			echo "<center><h2><a href='slots.php'>Slots Machine</a><br>
<a href='hot.php'>Heads or Tails -Doesn't Work -</a><br>
<a href='highorlow.php'>High or low -Doesn't Work- </a>	</h2></center>";
		}

		echo "<a href='searchfortreasure.php'> <h3>Search Area for Treasure* </h3></a> *This will take one stamina.  ";
		//Closing IF Stamina > 0 Tag
	}

	//Zero stamina and print you do not have enough stamina to move
	
	if( $Cstamina==0) {
		echo "<br><br><center><h1>You do not have enough stamina.</h1></center>";
	}

	//Less then one stamina and print you do not have enough stamina to move
	elseif( $Cstamina<=1){
		echo "<br><br><center><h1>You do not have enough stamina to move.</h1></center>";
	}

	//Closing Tags + Side Ads
	require('closing_tags.php');
	?>