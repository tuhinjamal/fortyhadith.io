<?php
session_start();
	require 'config.php';
	if (isset($_POST['login'])) {
		$username=$_POST['username'];
		$password=md5($_POST['password']);
		if (empty($username) || empty($password)) {
				echo "All the field are required";
		}else{

			$sql = "SELECT * FROM `tbl_user` WHERE username = '$username' AND password = '$password'";
			$result=mysqli_query($connection,$sql);
			if(mysqli_num_rows ( $result ) ===1){
				echo "login success";
				$_SESSION['username']=$username;
				$_SESSION['password']=$password;

				header('Location:greatings.php');
			}
			die();
			// uselese 
			/*$rows = mysqli_fetch_array($result);

			if (count($rows)<1) {
				echo "no user found";
				exit();
			}else{
				echo "Login success";
			}
			die();
			$stored_password =$rows['password'];
			if($check=password_verify( $stored_password,$password )){
				echo "logged in";
			}else{
				echo "username or password invalid";
			}*/
		}
	}
?>