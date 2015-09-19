<?php
require('connection.php');

require('Stats.php');

$South=$_POST['South'];
$West=$_POST['West'];
$North=$_POST['North'];
$East=$_POST['East'];
$Stay=$_POST['Stay'];


/*MY POSITION*/
$myid=$_SESSION['userid'];
$q=mysql_query("select city from charinfo where userid='$myid'");
$r=mysql_fetch_array($q,MYSQL_ASSOC);
$city=$r['city'];
if($city=='Reich' or $city=='reich')
{
$city='(8,F)';
}
if($city=='Hetnieuwe' or $city=='hetnieuwe')
{
$city='(2,F)';
}
if($city=='Acier' or $city=='acier')
{
$city='(13,B)';
}
if($city=='Bauholz' or $city=='bauholz')
{
$city='(13,J)';
}
list($useless, $ycoord, $xcoord)=split('[(,)]',$city);

$x=1;
for($i='A';$i<'L';$i++)
{
$x++;

if($xcoord==$i)
{
$xcoord2=$x-1;
$ycoord2=$ycoord;

if($South=='South')
{
$ycoord2=$ycoord2+1;

}

if($North=='North')
{
$ycoord2=$ycoord2-1;

}

if($West=='West')
{
$xcoord2=$xcoord2-1;

}

if($East=='East')
{
$xcoord2=$xcoord2+1;

}

if ($xcoord2=='1')
{
$xcoord2='A';

}

if ($xcoord2=='2')
{
$xcoord2='B';

}

if ($xcoord2=='3')
{
$xcoord2='C';

}

if ($xcoord2=='4')
{
$xcoord2='D';

}

if ($xcoord2=='5')
{
$xcoord2='E';

}

if ($xcoord2=='6')
{
$xcoord2='F';

}

if ($xcoord2=='7')
{
$xcoord2='G';

}

if ($xcoord2=='8')
{
$xcoord2='H';

}

if ($xcoord2=='9')
{
$xcoord2='I';

}

if ($xcoord2=='10')
{
$xcoord2='J';

}

if ($xcoord2=='11')
{
$xcoord2='K';

}

$newcity="($ycoord2,$xcoord2)";


if($newcity=='(8,F)')
{
$newcity='Reich';
}

if($newcity=='(2,F)')
{
$newcity='Hetnieuwe';
}

if($newcity=='(13,B)')
{
$newcity='Acier';
}

if($city=='(13,J)')
{
$city='Bauholz';
}

if($Stay=='Stay')
{

}

}
}
$q1="Update charinfo set city='$newcity' where userid='$userid'";
$r1=mysql_query($q1);


header('Location: searchfortreasure.php');
?>
