<?php

	require_once('db.php');
	$con = getConnection();
	
	$centerName = $_POST['centerName'];
	$centerLocation = $_POST['centerLocation'];
	$centerPhone = $_POST['centerPhone'];
	$docName = $_POST['docName'];
	$docSpecialty = $_POST['docSpecialty'];
	$docArea = $_POST['docArea'];
	
	$sql = "INSERT into consultant values ('$centerName','$centerLocation','$centerPhone','$docName','$docSpecialty','$docArea')";
	
	if(mysqli_query($conn, $sql))
	{
		header("location: ../dcenter.php?status=success");
	}
	else
	{
		header("location: ../dcenter.php?status=dbError");
	}
	
	
	
?>