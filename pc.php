<?php
	require('connection.php');

	require('generic.php');

	echo "<table><tr><td class='text'><a href='inbox.php'>Inbox: </a> $contents</td></tr>
		<tr></tr>
		<tr><td class='text'>Who would you like to message?</td>
		</tr></table>

		<table class='text2'><tr>
		<td>Find </td>
		<form action='pegioncarriers.php' method='post'>
		<td><input type='text' name='search' class='inputs'></td>
		<input type='hidden' name='first' value='no'>
		<td> by <SELECT class='inputs' name='by' size='1'>
		<option value='id' class='inputs'>userid
		<option value='name' class='inputs' selected>name
		</select></td></tr></table>

		<input type='hidden' name='success' value='nonexistant'>

		<table><tr><td><input type='submit' value='Search' class='inputs'></td></tr></form></table>";


	require('closing_tags.php');
?>