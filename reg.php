<?php 
	
	require 'config.php';


	if (isset($_POST['btn'])) {
		
		$name = $_POST['name'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password_1 = $_POST['password_1'];
		$password_2 = $_POST['password_2'];
		 if (empty($name) ||empty($username) || empty($email) || empty($password_1) || empty($password_2)) {
		 	 echo 'please fill all require  information in the given field';
		 }else{

		 	if ($password_1=== $password_2) {

		 		echo "DONE";
		 		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		 			echo "OK";
		 		}else{
		 			echo "Plese insert a validate email";
		 		}
		 			$password = md5($password_1);
		 
		 $sql="INSERT INTO tbl_user VALUES(NULL,'$name','$username','$email','$password')";
		 
		 $result= mysqli_query($connection,$sql);
		 	if ($result) {

		 		echo "registration successfull";
		 	}



		 }else{
		 	echo "password did not match";
		 } 
		 }
		 
	}


?>




<div class="frame">
<form action="" method="post">
	<table>
		<div class="box_one">
		

		<tr>
			<td>name</td>
			<td><input type="text" name="name" placeholder="name"></td>
		</tr>
		<tr>
			<td>username</td>
			<td><input type="text" name="username" placeholder="username"></td>
		</tr>
		<tr>


		</div>

			<td>E-mail</td>
			<td><input type="email" name="email" placeholder="enter E-mail"></td>
		</tr>
		<tr>
			<td>password</td>
			<td><input type="password" name="password_1" placeholder="*****"></td>
		</tr>
		<tr>
			<td>confirm password</td>
			<td><input type="password" name="password_2" placeholder="*****"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn" value="register"></td>
		</tr>
		
			
		
	</table>
	</div>

			
		
	
</form>
<a href="log.php" class="sign"> Already have an account ? Sign in </a>


























 <!DOCTYPE html>

	<html>
		<head>
		<title>HOME</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<link rel="shorcut icon" href="image/favicon.ico" type=image/x-icon>
		<link rel="stylesheet" type="text/css" href="log.css">
		</head>
		<body>


</body>
</html>