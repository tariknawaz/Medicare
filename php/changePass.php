<?php
	
	require_once('db.php');

	if(isset($_POST['submit']))
	{
		if($_POST['pass']== '')
		{
			header("location: ../dChangePass.php?status=error");
		}
		elseif($_POST['newpass']=='')
		{
			header("location: ../dChangePass.php?status=error");
		}
		elseif($_POST['repass']=='')
		{
			header("location: ../dChangePass.php?status=error");
		}
		elseif($_POST['newpass']!==$_POST['repass'])
		{
			header("location: ../dChangePass.php?status=passError");
		}
		elseif($_POST['pass']==$_POST['newpass'])
		{
			header("location: ../dChangePass.php?status=samePassError");
		}
		else
		{
			$oldpass = $_POST['pass'];
			$newpass = $_POST['newpass'];
			$repass = $_POST['repass'];
			
			$conn = getConnection();
			
			$sql = "UPDATE user SET password='$newpass' WHERE password='$oldpass'";
			$result = mysqli_query($conn,$sql);
		
			if(mysqli_query($conn, $sql))
			{
				header("location: ../dChangePass.php?status=success");
			}
			else
			{
				header("location: ../dChangePass.php?status=dbError");
			}
		}

	}
	
?>