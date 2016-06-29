<?php
	require('generic_preloggin.php');

	echo 
		"<center><h1>Register</h1>
		<form action='Sregister.php' method='post'>
		<table><tr><td class='text'>
		Username(max 16):</td><td>
		<input type='text' class='inputs' name='user'>
		</td></tr><tr><td class='text'>
		Password(max25):</td><td>
		<input type='password' class='inputs' name='pass'>
		</td></tr><tr><td class='text'>
		Verify Password:</td><td>
		<input type='password' class='inputs' name='Vpass'>
		</td></tr><tr><td class='text'>
		Name(max25):</td><td>
		<input type='text' class='inputs' value='FIRST' name='Fname'>
		</td><td>
		<input type='text' class='inputs' value='LAST' name='Lname'>
		</td></tr><tr><td class='text'>
		Email(max255)</td><td>
		<input type='text' class='inputs' name='email'>
		</td></tr></table>

		<table class='text2'><tr><td>

		<input type='hidden' name='display' value='no'>
		<input type='checkbox' name='display'> Allow others to view your email adress.<br>
		<input type='hidden' name='age' value='no'>
		<input type='checkbox' name='age'> I am above the age of 13 or have parental consent.<br>
		<input type='hidden' name='tos' value='no'>
		<input type='checkbox' name='tos'> I agree to all terms listed in the <a href='tos.php'>terms of service</a>

		</td></tr></table>

		<br><br>
		Refered by: (if applicable) <input type='text' name='referal' class='inputs'> Using:<SELECT class='inputs' name='by' size='1'>
		<option value='id' class='inputs'>userid
		<option value='name' class='inputs' selected>name
		</select><br><br>
		<input type='submit' value='Register' class='inputs'>
		</form>
		</center>
		";

	require('side_noad.php');
?>


</html>
