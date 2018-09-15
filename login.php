<?php
	if(isset($_GET['status'])){
		$status = $_GET['status'];
	}
?>
<table width="30%" height = "20%" align="center" cellspacing="0" cellpadding="10" border="1">
		<tr>					
			<td valign="middle" height="50">
				<a href="index.php" target="iFrame">
					<img height="48" src="image/2.jpg">
				</a>
			</td> 
		</tr>
		
		<tr>
			<td>
				<fieldset>
					<legend align = "center"><b>LOGIN</b></legend>
						<form method="POST" action="php/logCheck.php" align = "center">
							
							<table>
								<tr>
									<td>User Name</td>
									<td>:</td>
									<td><input type="text" id="uname"  name="uname"> <span id="nameError"> </span></td>
								</tr>
          
								<tr>
									<td>Password</td>
									<td>:</td>
									<td><input type="password" id="pass" name="pass">  <span id="passError"> </span></td>
								</tr>
							</table>
        <hr/>
		<input name="remember" type="checkbox">Remember Me
		<br/><br/>
        <input type="submit" value="Log In" name="submit" style="background-color:maroon;color:white;" ><br/><br/>

		<a href="forgot_password.html">Forgot Password?</a><br/>
		<a href ="index.php">Back to home</a>
    </form>
        </fieldset>
		</td>
		</tr>
</table>			
		


<?php

if(isset($status)){
	if($status == 'error'){
		echo "<h1 style='color:red;'>Invalid User! Try again.</h1>";
	}else if($status == 'dbError'){
		echo "<h1 style='color:red;'>Something wrong! Please try again.</h1>";
	}
}
	
?>
