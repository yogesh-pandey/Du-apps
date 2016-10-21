<html>
	<head>

<link rel="stylesheet" href="./map.css"/>
 <?php
 include './info_one_college_fetch.php';
 ?>


</head>
<body>
           <h1 style="text-align: center;" ><a href="./old.php">Welcome To Delhi University</a></h1>
<br>
<br>
<?php  

//echo '<script> alert(k); </script>';  

echo      '  
           
			
           <h1 style="text-align: center;">INFO</h1>
<img src="'.$tmpci1.'" style="display: block;margin-left: auto; margin-right: auto"/>
<br><b>Principal :</b>'.$rr11.' 
<br><b>Address: </b>'.$rr12.'
<br><b>Telephone:</b> '.$rr16.'
<br><b>Email: </b>'.$tmpe1.'
<br><b>Metro Station:</b> '.$rr14.'
<br><b>Distance(in kms): </b> '.$tmpmd1.'
<br><b>Bus Stop: </b>'.$rr15.'
<br>
<input type="button" id="poly" name="Get Shape" value="Take Me There" onclick="calcRoute();"></input>

';
?>
</body>
</html>
