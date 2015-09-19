<?php
require('connection.php');

/*MY POSITION*/
$myid=$_SESSION['userid'];
$q=mysql_query("select city from charinfo where userid='$myid'");
$r=mysql_fetch_array($q,MYSQL_ASSOC);
$city=$r['city'];
if($city=='Reichtum' or $city=='reichtum')
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

/*YOUR POSITION*/
$yourid=$_SESSION['yourid'];
$qq=mysql_query("select city from charinfo where userid='$yourid'");
$rr=mysql_fetch_array($qq,MYSQL_ASSOC);
$city2=$rr['city'];
if($city2=='Reichtum' or $city2=='reichtum')
{
$city2='(8,F)';
}
if($city2=='Hetnieuwe' or $city2=='hetnieuwe')
{
$city2='(2,F)';
}
if($city2=='Acier' or $city2=='acier')
{
$city2='(13,B)';
}
if($city2=='Bauholz' or $city2=='bauholz')
{
$city2='(13,J)';
}
list($useless, $ypos, $xpos)=split('[(,)]',$city2);

$x=1;
for($i='A';$i<'L';$i++)
{
$x++;
if($xcoord==$i)
{
$xcoord=$x;
}
if($xpos==$i)
{
$xpos=$x;
}
}

$ymax=$ycoord+1;
$ymin=$ycoord-1;
$xmax=$xcoord+1;
$xmin=$xcoord-1;

if($xpos>=$xmin and $xpos<=$xmax and $ypos>=$ymin and $ypos<=$ymax)
{
$inrange='yes';
}
else
{
$inrange='no';
}
?>