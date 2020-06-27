<?php

$host_name='localhost';
$user_name='root';
$password='';
$db_name='db_hadith';

   $connection=mysqli_connect($host_name,$user_name,$password);
   if ($connection) {

   		$db_select=mysqli_select_db($connection,$db_name);
   				if ($db_select) {
   						//echo 'db selected';
   					# code...
   				}else{

   					die('Database selection fail'.mysqli_error($connection));
   				}
   }else{

   		die('database connection fail'.mysqli_error($connection));
   }


?>