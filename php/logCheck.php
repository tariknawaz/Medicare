<?php
	session_start();
	require_once('db.php');

	$uname 	= $_POST['uname'];
	$pass 	= $_POST['pass'];

	if($uname == "" || $pass == "")
	{
		header("location: ../login.php?status=error");
	}
	else
	{
		//$pass = md5($pass);		

		$conn = getConnection();
		
		if(isset($_REQUEST['remember']))
			$escapedRemember = mysqli_real_escape_string($conn,$_REQUEST['remember']);
			
			if(isset($escapedRemember))
			{
				setcookie("user",time()+(86400 *30), "/");
				setcookie("pass",time()+(86400 *30), "/");
			}
			

		$sql = "select * from user where username='".$uname."' and password='".$pass."'";
		$result = mysqli_query($conn, $sql);

		$count =  mysqli_num_rows($result);

		if($count == 1 ){
			
			$row = mysqli_fetch_assoc($result);
			$_SESSION['name'] = $row['name'];
			$_SESSION['pass'] = $row['password'];
			$_SESSION['uname'] = $row['userName'];
			$_SESSION['type'] = $row['type'];
			$_SESSION['email'] = $row['email'];
			
			$_COOKIE['user']=22;
			
			if($_SESSION['type'] == 'patient')
			{
			header("location: ../patientHome.php");
			}
			
			elseif($_SESSION['type'] == 'doctor')
			{
				header("location: ../dhome.php");
			}
		}
		
		else
		{
			$conn = getConnection();
			if(isset($_REQUEST['remember']))
			$escapedRemember = mysqli_real_escape_string($conn,$_REQUEST['remember']);
			
			if(isset($escapedRemember))
			{
				setcookie("user",time()+(86400 *30), "/");
				setcookie("pass",time()+(86400 *30), "/");
			}

			$sql_1 = "select * from center where username='".$uname."' and password='".$pass."'";
			$result = mysqli_query($conn, $sql_1);

			$count =  mysqli_num_rows($result);
			
			if($count == 1 )
			{
			
			$row = mysqli_fetch_assoc($result);
			$_SESSION['name'] = $row['name'];
			$_SESSION['pass'] = $row['password'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['phone'] = $row['phone'];
			$_SESSION['location'] = $row['location'];
			$_SESSION['uname'] = $row['userName'];
			$_SESSION['type'] = $row['type'];
			
			
			//if($_SESSION['type'] == 'center')
			
			header("location:../chome.php");
			}
			else
			{
				header("location: ../login.php?status=error");
			}			
		}
	}	
?>