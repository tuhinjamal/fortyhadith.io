<?php
 
 define('HOST', 'cdm1s48crk8itlnr.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');
 define('USER', 'tyb8p1r3f0u6ijib');
 define('PASS', 'huo3dflpy7je0iut');
 define('DB', 'l55yny9307t23wwe');


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
