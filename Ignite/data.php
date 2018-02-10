<?php 
$email=$_POST['email']; 
$fname=$_POST['firstname']; 
$lname=$_POST['lastname'];
$gender=$_POST['gender'];
$event=isset($_POST['Submit'])
   ? $_POST['event'] : '';

$teamof=isset($_POST['Submit'])
   ? $_POST['teamof'] : '';

$dob=$_POST['birthday'];
$sapid=$_POST['SAPID'];
	$event=$_POST['event'];
	$teamof=$_POST['teamof'];
$data=$fname.",".$lname.",".$email.",".$gender.",".$event.",".$teamof.",".$dob.",".$sapid;
file_put_contents("file.csv", $data.PHP_EOL, FILE_APPEND); 

echo "<h1 align=center>Thank you for registering!!!</h1>"; 

 ?>