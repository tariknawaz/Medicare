<?php
	require_once('db.php');
	session_start();
	
	if(isset($_POST['submit']))
	{

	//catch data
	$name 				= trim($_POST['name']);
	$email 				= trim($_POST['email']);
	$uname			    = trim($_POST['userName']);
	$specialty 			= trim($_POST['specialty']);
	$qualification 		= trim($_POST['qualification']);
	$area			    = trim($_POST['area']);

	//validate data

		if($name == "" || $email == "" || $uname == "" || $specialty == "" || $qualification == "" || $area == "")
		{
			header("location: ../dedit.php?status=errorNull");
		}else
		{

			$conn = getConnection();
			$sql = "UPDATE user SET name='$name', email='$email',userName='$uname' WHERE userName='".$_SESSION['uname']."'";
			
			$sql_2 = "UPDATE doctor SET specialty='$specialty', qualification='$qualification',area='$area' WHERE userName='".$_SESSION['uname']."'";
			
			echo $sql;

			if(mysqli_query($conn, $sql))
			{
				if(mysqli_query($conn, $sql_2))
				{
									header("location: ../dedit.php?status=success");
				}

			}
			else
			{
				header("location: ../dedit.php?status=dbError");
			}
		}
}
	
?>