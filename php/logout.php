<?php

	session_start();

	if(session_destroy()){
		header("location: ../login.php");
	}else{
		echo "<script>alert('opps!')</script>";
	}
?>