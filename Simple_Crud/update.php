<?php
// include database connection file
	include "config.php";
	include "include/Header.php";
?>

<?php
if(isset($_POST["submit"]))
{	
	//Get DATA
	$update_id =mysqli_real_escape_string($conn,$_POST["update_id"]);
	$name=mysqli_real_escape_string($conn,$_POST["username"]);
	$email=mysqli_real_escape_string($conn,$_POST["email"]);
	$password=mysqli_real_escape_string($conn,$_POST["password"]);
		// update user data
	$query="UPDATE user SET name='$name',email='$email',password='$password' WHERE id=$update_id";
	if(mysqli_query($conn,$query))
	{

		// Redirect to homepage to display updated user in list
			header("Location: view.php");
	}
	else{
			echo "ERROR:" . mysqli_error($conn); 

		}
}
				//GET ID
				$id =mysqli_real_escape_string($conn,$_GET["id"]);
				// CREATE QUERY
				$query ="SELECT * FROM user WHERE id=$id";
				// GET RESULT
				$result=mysqli_query($conn,$query);
				// FETCH DATA
				$post=mysqli_fetch_assoc($result);
				// FREE RESULT
				
				mysqli_free_result($result);
				
				
?>

<br><br>
<html>
<head>
	<title>Update User Data</title>
</head>

<body bgcolor="#5CDB95">


	<form name="update_user" method="post" action="update.php">
		<fieldset>
				<br><br><legend><b><i>Login Details</i></b></legend>&ensp;
			<div style="font-size: 18px;text-indent: 22px;">Name &ensp;&ensp;&ensp; <input type="text" name="username"style="width: 20%;height: 20px;border-radius: 5px" value="<?php echo $post["name"];?>"></div><br><br>
			<div style="font-size: 18px;text-indent: 22px;">Email &ensp;&ensp;&ensp;&ensp;<input type="email" name="email"style="width: 20%;height: 20px;border-radius: 5px"value="<?php echo $post["email"];?>"></div><br><br>
			<div style="font-size: 18px;text-indent: 22px;">Password&ensp;<input type="text" name="password" style="width: 20%;height: 20px;border-radius: 5px"value="<?php echo $post["password"];?>"></div><br><br><br>
		</fieldset><br>
		
				<input type="hidden" name="update_id" value="<?php echo $post['id'];?>">
				<div style="font-size: 18px;text-indent: 154px;"><input type="submit" name="submit" value=" Update "style="width: 5%;height: 20px;font-weight: oblique;border: 0;border-radius: 8px;background-color: #22223A;color: white;cursor: pointer;"></div>

	
	</form>
</body>
</html>
<?php
	include "include/Footer.php";
?>
