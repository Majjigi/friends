<?php
include('dbc.php');
if(isset($_POST['submit']))
{
$usn=$_POST['usn'];
$username = $_POST['username'];
$password = $_POST['password'];
$email_id = $_POST['email_id'];
$phone_no = $_POST['phone_no'];
$dob = $_POST['dob'];

	
	$friends="INSERT INTO friends_details (usn, username, password, email_id, phone_no, dob ) VALUES ('$usn','$username','$password','$email_id','$phone_no','$dob')";
		if($conn->query($friends)=== TRUE)
		{
			header("Location: view.php");
		}
		else
		{
		echo 'Error :'.$friends;
		}
}
?>
