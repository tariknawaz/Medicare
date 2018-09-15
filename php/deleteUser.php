<?php
    session_start();
    require_once('db.php');

    if(isset($_SESSION['name'])){

    		$email = $_GET['email'];
    		
			$conn = getConnection();
			$sql = "DELETE FROM `user` WHERE email='$email'";

			if(mysqli_query($conn, $sql)){

				header("location: ../delete_user.php?status=success");
			}else{
				header("location: ../delete_user.php?status=dbError");
			}
	}
?>