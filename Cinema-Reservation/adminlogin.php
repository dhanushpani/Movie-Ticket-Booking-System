<?php

		$databaseHost = 'localhost';
		$databaseName = 'cinema_db';
		$databaseUsername = 'root';
		$databasePassword = '123456789';

		$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
		 
		if(! $mysqli ) {
		            die('Could not connect: ' . mysqli_error());
		         }

	$name = mysqli_real_escape_string($mysqli, $_POST['Name']);
	$password = mysqli_real_escape_string($mysqli,$_POST['Password']);
	

	$result= mysqli_query($mysqli,"SELECT * FROM admin WHERE adminname ='$name' AND password ='$password'")
		or die("failed to enter database".mysql_error());
	
	$row= mysqli_fetch_array($result);


	if($row['adminname'] == $name   && $row['password'] ==  $password){
		header('location:http://localhost/cinema-reservation/admin/admin.php');
	}
	else{
		echo "failed";
	}
?>