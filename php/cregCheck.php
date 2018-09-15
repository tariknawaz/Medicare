<?php
	require_once('db.php');

if(isset($_POST['submit'])){

	//catch data
	$name 				= trim($_POST['name']);
	$uname 				= trim($_POST['uname']);
	$password 			= trim($_POST['password']);
	$confirmPassword 	= trim($_POST['confirmPassword']);
	$email 				= trim($_POST['email']);
	$phone 			    = trim($_POST['phone']);
	$location 			= trim($_POST['location']);

	//validate data
	if($password == $confirmPassword){

		//$password = md5($password);

		if($name == "" || $uname == "" || $password == "" || $confirmPassword == "" || $email == "" || $phone == "" || $location == ""){
			header("location: ../centerReg.php?status=error");
		}else{

			$conn = getConnection();

			$sql = "insert into center values('$name', '$password', '$email', '$phone', '$location', '$uname')";

			if(mysqli_query($conn, $sql)){

				header("location: ../centerReg.php?status=success");
			}else{
				header("location: ../centerReg.php?status=dbError");
			}
		}

	}else{
		header("location: ../centerReg.php?status=passError");
	}
}
	
?>