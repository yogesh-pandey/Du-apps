<?php 

$con=mysqli_connect("localhost","root","","dumap");

if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


echo "<script>

var yyn,yyad,yyweb,yylt,yyln,yypr,yyms,yymd,yybs,yyci,yyt,yye;
var i,ttle;
var arrad=[];
var arrweb=[]
var arrn=[];
var arrlt=[];
var arrln=[];
var arrp=[];
var arrms=[];
var arrmd=[];
var arrbs=[];
var arrci=[];
var arrt=[];
var arre=[];

</script>";
$rname=mysqli_query($con,"SELECT * FROM clg");

while($rr=mysqli_fetch_array($rname))
{

$tmpn=$rr['Name'];
$tmpad=$rr['Address'];
$tmpweb=$rr['Website'];
$tmplt=$rr['Latitude'];
$tmpln=$rr['Longitude'];
$tmppr=$rr['Principal'];
$tmpms=$rr['metrostn'];
$tmpmd=$rr['metrod'];
$tmpbs=$rr['bussp'];
$tmpci=$rr['cing'];
$tmpt=$rr['Telephone'];
$tmpe=$rr['Email'];

$rr1= str_replace ('_',' ',$tmpn);
$rr2= str_replace('_', ' ',$tmpad);
$rr3= str_replace('_',' ',$tmppr);
$rr4= str_replace('_',' ',$tmpms);
$rr5= str_replace('_',' ',$tmpbs);
$rr6= str_replace('_',' ',$tmpt);
echo "<script> 
yyn=\"$rr1\";
yyt=\"$rr6\";
yye=\"$tmpe\";
yyad=\"$rr2\";
yyweb=\"$tmpweb\";
yylt=$tmplt;
yyln=$tmpln;
yypr=\"$rr3\";
yyms=\"$rr4\";
yymd=$tmpmd;
yybs=\"$rr5\";
yyci=\"$tmpci\";

arrn.push(yyn);
arrad.push(yyad);
arrweb.push(yyweb);
arrlt.push(yylt);
arrln.push(yyln);
arrp.push(yypr);
arrms.push(yyms);
arrmd.push(yymd);
arrbs.push(yybs);
arrci.push(yyci);
arrt.push(yyt);
arre.push(yye);
</script>";

}

?>