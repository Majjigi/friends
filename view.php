<?php
include('dbc.php');
?>

<html>  
<head> 
<title> Table </title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style>
table, th {
  border: 3px solid black !important;
  border-collapse: collapse;
  background-color: orange;
  font-family: Arial Black;
  }
  
  table , td {
  border: 3px solid black !important;
  border-collapse: collapse;
  background-color: white ;
   font-family: Comic sans MS;
  }

body {  
background-image: url("images/light.jpg");

}

</style>
</head>
<body>
	<div class='container'>
	
	<div class='row'>
	
	<div class='col-md-12'>
	<br>
<table style='border:1px solid black'>
	<tr> 
		<th> Sl_No </th>
		<th> usn	</th>
		<th> Username </th> 
		<th> Password </th> 
		<th> Email_id </th> 
		<th> Phone_no </th> 
		<th> Date_of_birth </th>
	
	</tr>
		</div>
  	
	
	
		<?php
		$fetch = "SELECT * FROM friends_details";
		$fetch_query = mysqli_query($conn,$fetch);
    	?>
		
		<?php 
	$slno = 1;
	
	foreach ($fetch_query as $majjigi)
	{
	?>
		   
		<tr> 	
		<td><?php echo $slno ?></td>
		<td><?php echo $majjigi['usn'];?></td>
		<td><?php echo $majjigi['username'];?></td>
		<td><?php echo $majjigi['password'];?></td>
		<td><?php echo $majjigi['email_id'];?></td>
		<td><?php echo $majjigi['phone_no'];?></td>
		<td><?php echo $majjigi['dob'];?></td>
		</tr>
		<?php 
		$slno++;
	}
	?>
		
</table>
		
</body>
</html>