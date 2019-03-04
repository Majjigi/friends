<html>
<head>
<title> Form page </title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style>
body {  
background-image: url("tree.jpg");

}  
label{
font-size:30px;
color: orange;
font-family:Comic Sans MS;

}
table, th {
  border: 5px solid black !important;
  border-collapse: collapse;
  background-color: grey;
  font-family: Times New Roman;
  }
  
  table , td {
  border: 6px solid black !important;
  border-collapse: collapse;
  background-color: yellow;
   font-family: Arial Black;
  }

</style>

</head>
<body>
<div class='container'>
	<div class='row'>
	
	<div class='col-md-2'>
		</div>	
		
			<div class='col-md-8'>
				
				<form action=store.php method='post'>
					
					<label> usn </label>
							<input type='text' name='usn' class='form-control' placeholder='enter your usn' required>
					

					<label> username </label>
							<input type='text' name='username' class='form-control' placeholder='enter your user_name' required>
					

					<label> password </label>
							<input type='password' name='password' class='form-control' placeholder='enter your password' required>
					

					<label> email_id </label>
							<input type='email' name='email_id' class='form-control' placeholder='abc@domain.com' required>
					

					
					<label> phone_no </label>
							<input type='text' name='phone_no' class='form-control' placeholder='enter your phone number' required>
			

					<label> dob </label>
							<input type='date' name='dob' class='form-control' placeholder='enter your Date_of_birth' required>
					
					<br>
						
					<input type='submit'  name='submit' value='submit' >
					
					</form>
				</div>
					<div class='col-md-2'>
						</div>	
		
			</div>
		</div>
	</body>
	</html>
