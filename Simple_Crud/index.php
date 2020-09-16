<!DOCTYPE html>
<head>
	<title>Form</title>
	<link rel="icon" href="img/nv2.png">
</head>

</head>
<body bgcolor="#5CDB95">
	<?php
		include "include/Header.php";
	?>
	<h1 style="text-align: center;color: #22223A">SIMPLE CRUD WEB</h1>
	<form action="submit.php" method="post">
			<br><fieldset>
				<br><legend><b><i>Login Details</i></b></legend>&ensp;
			<div  style="font-size: 18px;text-indent: 22px;">Name &ensp;&ensp;&ensp; <input type="text"  name="username" style="width: 20%;height: 20px;border-radius: 5px"  placeholder=" Name"></div><br><br>
			<div  style="font-size: 18px;text-indent: 22px;">Email &ensp;&ensp;&ensp;&ensp;<input type="email"  name="email" style="width: 20%;height: 20px;border-radius: 5px"  placeholder=" Email"><br><br><br>
			<div style="font-size: 18px;text-indent: 22px;">Password&ensp;<input type="password" name="password" style="width: 20%;height: 20px;border-radius: 5px" placeholder=" Password"></div><br><br><br>	
		</fieldset><br>
		<center>
			<input type="checkbox" name="cb2" required ><b><i> I Agree to the terms and conditions...</i></b><br><br>
			<input type="submit" name="submit" value=" Submit "style="width: 6%;height: 20px; font-size: 16px;font-weight: oblique;border: 0;border-radius: 6px;background-color: #22223A;color: white;cursor: pointer;"></div>&ensp;&ensp;
			<input type="reset" name="reset" value="Reset"style="width: 6%;height: 20px;font-size: 16px;font-weight: oblique; border:0;border-radius: 6px;background-color: #22223A;color: white;cursor: pointer;"></div>
		</center>

	</form>


</body>
<?php
		include "include/Footer.php";
?>
</body>
</html>
