<?php
	
	require_once(db.php);
	
	$con = getConnection();
	
	$sql = "SELECT * FROM consultant";
		
	$result = mysqli_query($con, $sql);
	
	$count =  mysqli_num_rows($result);
	
	if($count == 1)
	{
		//javascript code to display in html
	}
?>