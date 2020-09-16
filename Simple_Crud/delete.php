<?php
		include "config.php";
		include "include/Header.php";
		
?>

	//getting id of data from Url
 <?php	
 			$id=$_GET["id"];
 			$query= "DELETE FROM user WHERE id=$id";
 			if(mysqli_query($conn,$query))
 			{
 				
 				header("Location:view.php");
 			}
 			else{
			echo "ERROR:" . mysqli_error($conn); 

		}
?>	

<?php

	include "include/footer.php";
?>
