<?php

//echo '<pre>';
 //print_r($_POST);


 
 
    function view_prayer_time(){

 		require'db_con.php';
 		$sql= 'SELECT * FROM hadith_2';
 		if (mysqli_query($connection,$sql)) {

 			$resource_id=mysqli_query($connection,$sql);
 			return $resource_id;
 			
 		}else{
 			die('Query problem'.mysqli_error($connection));
 		}
		
		

 }
 $result=view_prayer_time();
 


 
 ?>
 
 


 
 




<div class="atb_mng1">


<a href="hadith_1.php" class="attribute1"> Hadith:1</a>
<a href="hadith_2.php" class="attribute2"> Hadith:2</a>
<a href="hadith_3.php" class="attribute2"> Hadith:3</a>
</div>


 	




<div class="frame">
<div class="box_one">
<div class="box_two">
		
			<form action="" method="post">
		<table  width="650" height="120" align="center" >
			<tr>
				<th>Title</th>
				<th>Hadith</th>
				<th>Reference</th>
				<th>Translation</th>
				
				
				
				

			</tr>
			
			<?php while ($view=mysqli_fetch_assoc($result)){?>
				<tr>
							<td><?php echo $view['Title'];   ?></td>
							<td><?php echo $view['Hadith'];   ?></td>
							<td><?php echo $view['Reference']; ?></td>
							<td><?php echo $view['Translation']; ?></td>

					
							
							

				<?php }?>
			</tr>
		</table>
	</form>
		
		</div>
		</div>
		

		</div>



  
  
  
  
  
  
  
  
  
  
  
  <!DOCTYPE html>

	<html>
		<head>
		<title>HOME</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<link rel="shorcut icon" href="image/favicon.ico" type=image/x-icon>
		<link rel="stylesheet" type="text/css" href="hadith.css">
		</head>
		<body>
		
		
		
		
		
		
		
		
		
		</body>
		</html>