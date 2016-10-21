 <?php 

$con=mysqli_connect("localhost","root","","dumap");

if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


echo "<script>

var ids,c1lt,c1ln,c2lt,c2ln,c3lt,c3ln,c4lt,c4ln,c5lt,c5ln,c6lt,c6ln,c7lt,c7ln,c8lt,c8ln,c9lt,c10lt,c10ln;
var i,ttle;
var arri=[];
var arr1lt=[];
var arr1ln=[];
var arr2lt=[];
var arr2ln=[];
var arr3lt=[];
var arr3ln=[];
var arr4lt=[];
var arr4ln=[];
var arr5lt=[];
var arr5ln=[];
var arr6lt=[]; var arr6ln=[]; var arr7lt=[]; var arr7ln=[]; var arr8lt=[];
var arr8ln=[]; var arr9lt=[]; var arr9ln=[]; var arr10lt=[]; var arr10ln=[];
</script>";



$read=mysqli_query($con,"SELECT * FROM poly");

$ri=mysqli_query($con,"SELECT id FROM poly");
$r1lt=mysqli_query($con,"SELECT cor1lt FROM poly");
$r1ln=mysqli_query($con,"SELECT cor1ln FROM poly");
$r2lt=mysqli_query($con,"SELECT cor2lt FROM poly");
$r2ln=mysqli_query($con,"SELECT cor2ln FROM poly");
$r3lt=mysqli_query($con,"SELECT cor3lt FROM poly");
$r3ln=mysqli_query($con,"SELECT cor3ln FROM poly");
$r4lt=mysqli_query($con,"SELECT cor4lt FROM poly");
$r4ln=mysqli_query($con,"SELECT cor4ln FROM poly");
$r5lt=mysqli_query($con,"SELECT cor5lt FROM poly");
$r5ln=mysqli_query($con,"SELECT cor5ln FROM poly");
$r6lt=mysqli_query($con,"SELECT cor6lt FROM poly");
$r6ln=mysqli_query($con,"SELECT cor6ln FROM poly");
$r7lt=mysqli_query($con,"SELECT cor7lt FROM poly");
$r7ln=mysqli_query($con,"SELECT cor7ln FROM poly");
$r8lt=mysqli_query($con,"SELECT cor8lt FROM poly");
$r8ln=mysqli_query($con,"SELECT cor8ln FROM poly");
$r9lt=mysqli_query($con,"SELECT cor9lt FROM poly");
$r9ln=mysqli_query($con,"SELECT corner9 FROM poly");
$r10lt=mysqli_query($con,"SELECT cor10lt FROM poly");
$r10ln=mysqli_query($con,"SELECT cor10ln FROM poly");
$i=0;

while($rri=mysqli_fetch_array($ri))
{

$rr1lt=mysqli_fetch_array($r1lt);
$rr1ln=mysqli_fetch_array($r1ln);
$rr2lt=mysqli_fetch_array($r2lt);
$rr2ln=mysqli_fetch_array($r2ln);
$rr3lt=mysqli_fetch_array($r3lt);
$rr3ln=mysqli_fetch_array($r3ln);
$rr4lt=mysqli_fetch_array($r4lt);
$rr4ln=mysqli_fetch_array($r4ln);
$rr5lt=mysqli_fetch_array($r5lt);
$rr5ln=mysqli_fetch_array($r5ln);
$rr6lt=mysqli_fetch_array($r6lt);
$rr6ln=mysqli_fetch_array($r6ln);
$rr7lt=mysqli_fetch_array($r7lt);
$rr7ln=mysqli_fetch_array($r7ln);
$rr8lt=mysqli_fetch_array($r8lt);
$rr8ln=mysqli_fetch_array($r8ln);
$rr9lt=mysqli_fetch_array($r9lt);
$rr9ln=mysqli_fetch_array($r9ln);
$rr10lt=mysqli_fetch_array($r10lt);
$rr10ln=mysqli_fetch_array($r10ln);


$test=0;

$tmpi=$rri['id'];
$tmp1=$rr1lt['cor1lt'];
$tmp2=$rr1ln['cor1ln'];
$tmp3=$rr2lt['cor2lt'];
$tmp4=$rr2ln['cor2ln'];
$tmp5=$rr3lt['cor3lt'];
$tmp6=$rr3ln['cor3ln'];
$tmp7=$rr4lt['cor4lt'];
$tmp8=$rr4ln['cor4ln'];
$tmp9=$rr5lt['cor5lt'];
$tmp10=$rr5ln['cor5ln'];
$tmp11=$rr6lt['cor6lt'];
$tmp12=$rr6ln['cor6ln'];
$tmp13=$rr7lt['cor7lt'];
$tmp14=$rr7ln['cor7ln'];
$tmp15=$rr8lt['cor8lt'];
$tmp16=$rr8ln['cor8ln'];
$tmp17=$rr9lt['cor9lt'];
$tmp18=$rr9ln['corner9'];
$tmp19=$rr10lt['cor10lt'];
$tmp20=$rr10ln['cor10ln'];




echo "<script> 
ids=$tmpi;
c1lt=$tmp1;
c1ln=$tmp2;
c2lt=$tmp3;
c2ln=$tmp4;
c3lt=$tmp5;
c3ln=$tmp6;
c4lt=$tmp7;
c4ln=$tmp8;
c5lt=$tmp9;
c5ln=$tmp10;
c6lt=$tmp11;
c6ln=$tmp12;
c7lt=$tmp13;
c7ln=$tmp14;
c8lt=$tmp15;
c8ln=$tmp16;
c9lt=$tmp17;
c9ln=$tmp18;
c10lt=$tmp19;
c10ln=$tmp20;

arri.push(ids);
arr1lt.push(c1lt);
arr1ln.push(c1ln);
arr2lt.push(c2lt);
arr2ln.push(c2ln);
arr3lt.push(c3lt);
arr3ln.push(c3ln);
arr4lt.push(c4lt);
arr4ln.push(c4ln);
arr5lt.push(c5lt);
arr5ln.push(c5ln);
arr6lt.push(c6lt);
arr6ln.push(c6ln);
arr7lt.push(c7lt);
arr7ln.push(c7ln);
arr8lt.push(c8lt);
arr8ln.push(c8ln);
arr9lt.push(c9lt);
arr9ln.push(c9ln);
arr10lt.push(c10lt);
arr10ln.push(c10ln);

</script>";
}


?>