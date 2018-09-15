<?php
	require_once('db.php');
	session_start();
	
	if(isset($_POST['submit']))
	{

	//catch data
	$name 				= trim($_POST['name']);
	$email 				= trim($_POST['email']);
	$uname			    = trim($_POST['userName']);
	$age 				= trim($_POST['age']);
	$gender 			= trim($_POST['gender']);
	$medicalHistory		= trim($_POST['medicalHistory']);

	//validate data

		if($name == "" || $email == "" || $uname == "" || $age == "" || $gender == "")
		{
			header("location: ../patientEdit.php?status=errorNull");
		}else
		{

			$conn = getConnection();
			$sql = "UPDATE user SET name='$name', email='$email',userName='$uname' WHERE userName='".$_SESSION['uname']."'";
			
			$sql_2 = "UPDATE patient SET userName='$uname', age='$age', gender='$gender',medicalHistory='$medicalHistory' WHERE userName='".$_SESSION['uname']."'";

			if(mysqli_query($conn, $sql))
			{
				if(mysqli_query($conn, $sql_2))
				{
									header("location: ../patientEdit.php?status=success");
				}

			}
			else
			{
				header("location: ../patientEdit.php?status=dbError");
			}
		}
}
	
?>