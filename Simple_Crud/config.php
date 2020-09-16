<?php
	$conn=new mysqli('localhost','root','','crud_operation');
	if(!$conn)
	{
		die("Connection Failed ".mysqli_error($conn));
	}
	
?>