<?php
require('connection.php');
require('generic_preloggin.php');

/*redefines form variables*/
$user = $_POST['user'] ;
$pass = $_POST['pass'] ;
$Vpass = $_POST['Vpass'] ;
$Fname = $_POST['Fname'] ;
$Lname = $_POST['Lname'] ;
$email = $_POST['email'] ;
$display = $_POST['display'] ;
$age = $_POST['age'] ;
$tos = $_POST['tos'] ;
/*checks for blank fields*/
if($user=="")
{$blank['user']='yes';}
else
{$blank['user']='no';}

if($pass=="")
{$blank['pass']='yes';}
else
{$blank['pass']='no';}

if($Fname=="")
{$blank['Fname']='yes';}
else
{$blank['Fname']='no';}

if($Lname=="")
{$blank['Lname']='yes';}
else
{$blank['Lname']='no';}

if($email=="")
{$blank['email']='yes';}
else
{$blank['email']='no';}
/*check input format*/
if(!ereg("..?.?.?.?.?.?.?.?.?.?.?.?.?.?.?",$user))
{$format['user']='bad';}
else
{$format['user']='good';}

if(!ereg("..?.?.?.?.?.?.?.?.?.?.?.?.?.?.?.?.?.?.?.?.?.?.?.?",$pass))
{$format['pass']='bad';}
elseif($pass!=$Vpass)
{$format['pass']='wrong';}
else
{$format['pass']='good';}

if(!ereg("[A-Za-z '-]{1,25}",$Fname))
{$format['Fname']='bad';}
else
{$format['Fname']='good';}

if(!ereg("[A-Za-z '-]{1,25}",$Lname))
{$format['Lname']='bad';}
else
{$format['Lname']='good';}

if(!ereg("^.+@.+\.(com|org|ca|net)",$email))
{$format['email']='bad';}
else
{$format['email']='good';}
/*determines which page to show*/
$reregister='no';
$w='no';
$x='no';
$y='no';
$z='no';
foreach($blank as $key => $value)
{
if($value=='yes')
{
$reregister='yes';
$x='yes';
}
}
foreach($format as $key => $value)
{
if($value=='bad')
{
$reregister='yes';
$y='yes';
}
}

/*check for taken name*/
$taken='no';
$query="select login from register";
$result=mysql_query($query)
	or die("FAILED TO EXECUTE QUERY1");
while($row=mysql_fetch_array($result))
{
extract($row);
if($user==$login)
{
$taken='yes';
$reregister='yes';
$z='yes';
}
}

if($format['pass']=='wrong')
{
$reregister='yes';
$z='yes';
}
if($tos=='no')
{
$reregister='yes';
$z='yes';
}
if($age=='no')
{
$reregister='yes';
$z='yes';
}
/*shows banners*/



/*SHOWS THE REGISTER PAGE*/

if($reregister=='yes')
{
/*shows blanks and errors*/
if($x=='yes')
{
echo "<br> You failed to fill in your: <br>";
if($blank['user']=='yes')
{echo "-username <br>";}
if($blank['pass']=='yes')
{echo "-password <br>";}
if($blank['Fname']=='yes')
{echo "-first name <br>";}
if($blank['Lname']=='yes')
{echo "-last name <br>";}
if($blank['email']=='yes')
{echo "-email <br>";}
}
if($y=='yes')
{
echo "<br> The following was invalid: <br>";
if($blank['user']=='no')
{
if($format['user']=='bad')
{echo "-username <br>";}
}
if($blank['pass']=='no')
{
if($format['pass']=='bad')
{echo "-password<br>";}
}
if($blank['Fname']=='no')
{
if($format['Fname']=='bad')
{echo "-first name <br>";}
}
if($blank['Lname']=='no')
{
if($format['Lname']=='bad')
{echo "-last name<br>";}
}
if($blank['email']=='no')
{
if($format['email']=='bad')
{echo "-email <br>";}
}
}
if($z=='yes')
{
echo "<br> also: <br>";
if($format['pass']=='wrong')
{echo "-your passwords didnt match <br>";}
if($tos=='no')
{echo "-all users are required to read and agree to the <a href='tos.php'>terms of service </a><br>";}
if($age=='no')
{echo "-the contents of this webpage are designed for a mature audience and thus it may be inapropriate for users below the age of 13.  Please recieve parental consent before continuing.<br>";}
if($taken=='yes')
{echo "-the username that you have entered is already taken please choose another username";}
}
echo "</p></td>";
/*redisplays the form*/
echo 
"<td bgcolor='330000' valign='top'><br><p class='text2'>Register<br>
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
</td></tr></table><br>
<input type='hidden' name='display' value='no'>
<input type='checkbox' name='display'> Allow others to view your email adress.<br>
<input type='hidden' name='age' value='no'>
<input type='checkbox' name='age'> I am above the age of 13 or have parental consent.<br>
<input type='hidden' name='tos' value='no'>
<input type='checkbox' name='tos'> I agree to all terms listed in the <a href='tos.php'>terms of service</a>.<br><br>
Refered by: (if applicable) <input type='text' name='referal' class='inputs'>&nbspusing:<SELECT class='inputs' name='by' size='1'>
<option value='id' class='inputs'>userid
<option value='name' class='inputs' selected>name
</select><br><br>
<input type='submit' value='Try Again' class='inputs'>
</form>
";
}
else
{
$referal=$_POST['referal'];
$stopx="no";
if($referal!='')
{
if($by=='id')
{
$qx=mysql_fetch_array(mysql_query("select login from register where userid='$referal'"),MYSQL_ASSOC);
$userx=$qx['login'];
if($userx=='')
{
echo "The referal you input was invalid, do you wish to <a href='continuesend.php'>continue</a> or <a href='register.php'>reregister</a>."; 
$stopx="yes";
}
}
if($by=='name')
{
$qx=mysql_fetch_array(mysql_query("select userid from register where login='$referal'"),MYSQL_ASSOC);
$referal=$qx['userid'];
if($referal=='')
{
echo "The referal you input was invalid, do you wish to <a href='continuesend.php'>continue</a> or <a href='register.php'>reregister</a>.";
$stopx="yes";
}
}
}
if($stopx=='no')
{
/*SENDS FORM DATA*/
/*cleans data*/
$user=htmlspecialchars($user);
$pass=htmlspecialchars($pass);
$email=htmlspecialchars($email);
/*sql queries*/
$q1="INSERT INTO register (login,pass,firstname,lastname,email,display)
VALUES ('$user','$pass','$Fname','$Lname','$email','$display')";
$r1=mysql_query($q1)
	or die ("FAILED TO EXECUTE QUERY2");
$q2="SELECT userid FROM register WHERE login='$user'";
$r2=mysql_query($q2)
	or die ("FAILED TO EXECUTE QUERY3");
$o2=mysql_fetch_array($r2,MYSQL_ASSOC);
$id=$o2['userid'];

$q3="INSERT INTO charinfo (userid) VALUES ('$id')";
$r3=mysql_query($q3)
	or die ("FAILED TO EXECUTE QUERY4");

$e=mysql_select_db("robob27_messaging",$d) or die("FAILED TO CONNECT TO DATABASE1");
mysql_query("insert into inbox (Owner) values ('$id')");
echo "<p class='text2'>Thank you for registeing for Tales of Prophecy, please try and login <a href='index.php'>here</a>.</p>";
}
}

require('side_noad.php');

?>

</html>
<?php unset($d);unset($e);?>