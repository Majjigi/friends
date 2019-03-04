<?php

$servername = 'localhost';
$dbusername ='root';
$dbpassword = '';
$dbname='friends';

$conn = mysqli_connect($servername,$dbusername,$dbpassword,$dbname);

if($conn==TRUE)
{
	echo'';
}
else
{
	echo 'Error:'.$conn;
}

?>