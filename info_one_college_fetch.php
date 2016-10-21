<?php 


$con=mysqli_connect("localhost","root","","dumap");

if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $me= str_replace (' ','_',$tmpp);

$rname=mysqli_query($con,"SELECT * FROM clg where Name='$me'");

while($rr=mysqli_fetch_array($rname))
{

$tmpn1=$rr['Name'];
$tmpad1=$rr['Address'];
$tmpweb1=$rr['Website'];
$tmplt1=$rr['Latitude'];
$tmpln1=$rr['Longitude'];
$tmppr1=$rr['Principal'];
$tmpms1=$rr['metrostn'];
$tmpmd1=$rr['metrod'];
$tmpbs1=$rr['bussp'];
$tmpci1=$rr['cing'];
$tmpt1=$rr['Telephone'];
$tmpe1=$rr['Email'];

$rr11= str_replace ('_',' ',$tmpn1);
$rr12= str_replace('_', ' ',$tmpad1);
$rr13= str_replace('_',' ',$tmppr1);
$rr14= str_replace('_',' ',$tmpms1);
$rr15= str_replace('_',' ',$tmpbs1);
$rr16= str_replace('_',' ',$tmpt1);
}

?>