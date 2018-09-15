<?php
	
	require_once('db.php');
	
	$centerName = $_GET['center'];
	
	$conn = getConnection();

	$sql = "SELECT name,email,location,phone FROM center where name='".$centerName."'";

	$result = mysqli_query($conn, $sql);

	if($row = mysqli_fetch_assoc($result)) 
	{
	
		$centerName = $row['name'];
		$centerLocation = $row['location'];
		$centerPhone = $row['phone'];
		
		$docName = $_SESSION['uname'];
		
		$sql_2 = "SELECT qualification,specialty,area FROM doctor where userName='".$_SESSION['uname']."'";
		
		$result2 = mysqli_query($conn, $sql2);
		
	if($row = mysqli_fetch_assoc($result2))
	{
		
		$docQualification = $_row['qualification'];
		$docSpecialty = $_row['specialty'];
		$docArea = $_row['area'];
		
		
		$sql_3 = "INSERT into consultant values ('$centerName','$centerLocation','$centerPhone','$docName','$docSpecialty','$docQualification','$docArea')";
		
	if(mysqli_query($conn, $sql_3))
		{
			header("location: ../dcenter.php?status=success");
		}
		else
		{
			header("location: ../dcenter.php?status=dbError");
		}
	
	
	}
	
	}
	
?>