<?php
	$center = $_GET['center'];
	
	$conn = mysqli_connect('localhost', 'root', '', 'med');

	$sql = "select * from consultant where centerName='".$center."'";

	$result = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_assoc($result)) 
	{
		echo $row['docName']." | ".$row['docQualification']." | ".$row['docArea']." | ".$row['centerName']." | ".$row['centerLocation']." | ".$row['centerPhone']." "."<a href='php/appointment.php'>Get Appointment</a><br/><br/>";
		;
	}

	
?>