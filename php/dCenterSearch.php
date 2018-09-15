<?php
	
	require_once('db.php');
	
	$centerName = $_GET['c'];
	
	$conn = getConnection();

	$sql = "SELECT name,email,location,phone FROM center where name='".$centerName."'";

	$result = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_assoc($result)) 
	{
		echo $row['name']." | ".$row['email']." | ".$row['location']." | ".$row['phone']." "."<a href='php/dCenterReg.php'>Register here!</a><br/><br/>";		

	}
	
?>

<?php
	if(isset($_GET['on'])) {
        register();
		}
		
		function register(){
		
		echo "Yo!";		
		
	};

?>