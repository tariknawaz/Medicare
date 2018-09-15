<?php
	require_once('db.php');

if(isset($_POST['submit'])){

	//catch data
	$name 				= trim($_POST['name']);
	$email 				= trim($_POST['email']);
	$userName 			= trim($_POST['userName']);
	$password 			= trim($_POST['password']);
	$confirmPassword 	= trim($_POST['confirmPassword']);
	$type 			    = trim($_POST['type']);

	//validate data
	if($password == $confirmPassword){

		//$password = md5($password);

		if($name == "" || $email == "" || $userName == "" || $password == "" || $confirmPassword == "" || $type == ""){
			header("location: ../registration.php?status=error");
		}else{

			$conn = getConnection();

			$sql = "insert into user values('$name', '$email', '$userName', '$password', '$type')";
			$sql2 = "insert into doctor values('', '', '', '', '$userName')";
			$sql3 = "insert into patient values('$userName', '', '', '')";

			if(mysqli_query($conn, $sql)){
				if($type == 'doctor'){
					if(mysqli_query($conn, $sql2)){
						header("location: ../registration.php?status=success");
					}else{
						header("location: ../registration.php?status=dbError");
					}
				}else{
					if(mysqli_query($conn, $sql3)){
						header("location: ../registration.php?status=success");
					}else{
						header("location: ../registration.php?status=dbError");
					}
				}				
			}
	}}
			else{
					header("location: ../registration.php?status=dbError");
				}
	}else{
		header("location: ../registration.php?status=passError");
	}
	
?>