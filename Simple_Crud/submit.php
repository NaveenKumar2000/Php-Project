<!DOCTYPE html>
<html>
<head>
	<title>Add Data</title>
	<link rel="icon" href="img/nv2.png">
</head>
<body bgcolor="#5CDB95">
<?php
		include "include/Header.php";
		include "config.php";
?>
<br><br>
<?php
		if(isset($_POST["submit"]))
		{
			$name=mysqli_real_escape_string($conn,$_POST["username"]);
			$email=mysqli_real_escape_string($conn,$_POST["email"]);
			$password=mysqli_real_escape_string($conn,$_POST["password"]);
			if((empty($name)) ||(empty($email)) || (empty($password)))
			{
				if(empty($name))
				{
					echo  "<script>alert('Name Field is Empty..!')</script>";
					echo  "<font color='black'><big><b>&ensp;Name Field is Empty...!</b></big></font><br><br>";
				}
				if(empty($email))
				{
					echo  "<script>alert('Email Field is Empty..!')</script>";
					echo  "<font color='black'><big><b>&ensp;Email Field is Empty...!</b></big> </font><br><br>";
				}
				if(empty($password))
				{
					echo"<script>alert('Password Field is Empty..!')</script>";
					echo  "<font color='black'><big><b>&ensp;Password Field is Empty...!</b></big> </font><br><br>";
				}

				// Link to Previous Page
				echo '<br/>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<a href="javascript:self.history.back();"><b><i>Go Back</i></b></a>';
			}
			else
			{
				// if not Empty
				//insert into DataBase
				$query="INSERT INTO user(name,email,password)values('$name','$email','$password')";
				if(mysqli_query($conn,$query))
				{
					//For Suceessfull Display 
					echo "<font color='black'><big><b>Data Inserted Successfully....!</b></big><br><br>";
					echo "<br><a href='view.php'><b>--View Result--</b></a>"; 
				}	
				else
				{
					echo "ERROR:" . mysqli_error($conn); 
				}	

			}
		}

 ?>
 <?php
		include "include/Footer.php";
?>
</body>
</html>

