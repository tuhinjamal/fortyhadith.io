<?php
 
 define('HOST', 'localhost');
 define('USER', 'root');
 define('PASS', '');
 define('DB', 'db_login');


 $connection = mysqli_connect(HOST, USER, PASS, DB);
 
if ($connection) {
 				$db_select=mysqli_select_db($connection,DB);
 					if ($db_select) {

 					

 						
 						
 					}else{

 						die('Database selection Fail'.mysqli_error($connection));
 					}
 				# code...
 			}else{

 						die('Database connection Fail'. mysqli_error($connection));
 					}
 
 
 
 


?>