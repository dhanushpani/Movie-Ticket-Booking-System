<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

	<!-- <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css"> -->

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body class="container">
	
	<div class="container">
		<div class="container-login100" style="background-image: url('css/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="signup.php" method="POST">
					<span class="login100-form-title p-b-49">
						Sign up
					</span>

					<div class="wrap-input100  m-b-23">
						<span class="label-input100">UserName</span>
						<input class="input100" type="text" name="UserName" placeholder="Type your First-Name">
						<span  data-symbol="&#xf206;"></span>
					</div>


					<div class="wrap-input100  m-b-23">
						<span class="label-input100">E-Mail</span>
						<input class="input100" type="text" name="Email" placeholder="Type your E-Mail">
						<span  data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100  m-b-23">
						<span class="label-input100">Phone Number</span>
						<input class="input100" type="text" name="PhoneNumber" placeholder="Type your Phone Number">
						<span  data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100  m-b-23">
						<span class="label-input100">Create Password</span>
						<input class="input100" type="password" name="CreatePassword" placeholder="Create Password">
						<span  data-symbol="&#xf206;"></span>
					</div>

				

					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
								<button class="login100-form-btn" name="submit">
								Login
							</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</body>


<?php
if(isset($_POST['submit'])){

$Name=$_POST['UserName'];
	$Email=$_POST['Email'];
	$PhoneNumber=$_POST['PhoneNumber'];
	$password=$_POST['CreatePassword'];


/// Check wheather input is empty or not

	// if (!empty($Name)|| !empty($DOB)|| !empty($AUID)|| !empty($password)|| !empty($Dept)|| !empty($Sec)|| !empty($Sem)|| !empty($Year)) {
		$host="localhost";
		$dbUsername="root";
		$dbpassword="123456789";
		$dbname="cinema_db";
/// Create a connection
		$conn= new mysqli($host,$dbUsername,$dbpassword,$dbname);
/// for error accurs in connection
		if (mysqli_connect_error()) {
			die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
		}
		else{
			// $SELECT= " SELECT AUID from register where AUID=? limit 1";
			$INSERT= "INSERT INTO user(name,password,email,phone) VALUES(?,?,?,?)";
/// prepare statement
			// $stmt=$conn->prepare($SELECT);
			// $stmt->bind_param("s",$AUID);
			// $stmt->execute();
			// $stmt->bind_result($AUID);
			// $stmt->store_result();
			// $rnum = $stmt->num_rows;
/// insert record with no duplication
	
				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("ssss",$Name,$password,$Email,$PhoneNumber);
				$stmt->execute();
				header('location: http://localhost/cinema-reservation/index.php');
			
			// else{
			// 	echo "already register using this AUID";
				
			// }

			$stmt->close();
			$conn->close();
		}
	}



?>
</html>