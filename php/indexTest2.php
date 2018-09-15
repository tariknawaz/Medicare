<?php
	$spec = $_GET['spec'];
	
	$conn = mysqli_connect('localhost', 'root', '', 'med');

	$sql = "select * from consultant where docSpecialty='".$spec."'";

	$result = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_assoc($result)) 
	{
		echo $row['docName']." | ".$row['docQualification']." | ".$row['docArea']." | ".$row['centerName']." | ".$row['centerLocation']." | ".$row['centerPhone']."<br/><br/>";
	}

?>