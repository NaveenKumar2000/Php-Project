
<html> 
<head>
<title>HomePage</title>
<link rel="icon" href="img/nv2.png">
</head>
<body bgcolor="#5CDB95">
<?php
	include "include/Header.php";
	include "config.php";
?>
	<br>
	<a href="index.php"><big><b><i>ADD NEW DATA</i></b></big></a><br><br>
	<table width="70%" border=" 12";cellpadding="8";cellspacing="8">
		<tr>
			<th bgcolor="white"align="center"><b>NAME</b></th>
			<th bgcolor="white"align="center"><b>EMAIL</b></th>
			<th bgcolor="white"align="center"><b>PASSWORD</b></th>
			<th bgcolor="white"align="center"><b>UPDATE</b></th>		
		</tr>
<?php

	//Feching Data in Descending Order
	$query= "SELECT * FROM user ORDER BY id ASC";
	$result=mysqli_query($conn,$query);
	 
?>
<?php	
		if(mysqli_num_rows($result)>=0)
		{
			while($res=mysqli_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>".$res["name"]."</td>";
				echo "<td>".$res["email"]."</td>";
				echo "<td>".$res["password"]."</td>";
				echo "<td><a href=\"update.php?id=$res[id]\">&ensp;Update</a>&ensp;  || <a href=\"delete.php ?id=$res[id]\" >&ensp;Delete</a></td>";
			}

		}
		
?>

</table>
<?php
		include "include/Footer.php";
?>

</body>
</html>

