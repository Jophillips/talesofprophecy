<?php
require('connection.php');

$id=$_SESSION['userid'];
require('Stats.php');
require('generic.php');


/*check input*/
$q1="SELECT pass FROM register WHERE login='$username'";
$r1=mysql_query($q1)
	or die ("FAILED TO EXECUTE QUERY");
$o1=mysql_fetch_array($r1,MYSQL_ASSOC);
if($pass==$o1['pass'])
{ 


echo "<center><br>Here we have the ancient machines used for gambling, these machines have been rigged to use todays gold coins.<br>

<form action='playslots.php' method='post'>
How much do you want to put in?   
<input type='text' size='5' class='inputs' name='valueor'><br>
<input type='submit' value='Insert' class='inputs'></form></center>";



}
require('closing_tags.php');
?>