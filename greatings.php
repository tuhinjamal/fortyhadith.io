<?php
session_start();

?>
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
<div class="bdy">
	
	<div class="frame">
	<table>
		

	</table>
	</div>
	<div class="txt1">
		<table>
			<tr>
		<td>
			<h1 align="center">WELCOME!</h1>
			<h2> <?php echo $_SESSION['username']; ?></h2>	

		</td>
		<td></td>
	</tr>
	
		</table>

</div>
<a href="reg.php" class="signout">Click here to logout</a>


	

<!-- <tr>
		<td>your password has given below</td>
		<td><?php echo $_SESSION['password']; ?></td>
	</tr> -->





</div>
