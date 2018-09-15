<?php
	
	if(isset($_GET['status'])){
		$status = $_GET['status'];
	}
?>

<html>

<fieldset>
    <legend><b>REGISTRATION</b></legend>
	<form method="POST" action="php/regCheck.php" onsubmit="return validation()">
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text" id="name" onblur="checkName()"/><span id="nameError"></span></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="email" id="email" onblur="checkEmail()"/><span id="mailError"></span>
					<abbr title="hint: sample@example.com"><b>i</b></abbr>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>User Name</td>
				<td>:</td>
				<td><input name="userName" type="text" id="uname" onblur="checkuName()"/><span id="unameError"></span></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="password" type="password" id="pass" onblur="checkPass()"/><span id="passError"></span></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Confirm Password</td>
				<td>:</td>
				<td><input name="confirmPassword" type="password" id="cpass" onblur="matchPass()"/><span id="matchError"></span></td>
				<td></td>
			</tr>
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>User Type</legend>    
						<input name="type" value="patient" type="radio">Patient
						<input name="type" value="doctor" type="radio">Doctor
					</fieldset>
				</td>
				<td></td>
			</tr>
		</table><hr/>
		<input type="submit" value="Register" name="submit">
		<input type="reset">
	</form>
</fieldset><br/>
<a href="centerReg.php">Diagnostic Center Registration</a><br/><br/>
<a href="index.php">Back to Home</a>

<script type="text/javascript" src='js/regCheck.js'></script>
</html>
<?php

if(isset($status)){
	if($status == 'error'){
		echo "<h1 style='color:red;'> Null value found! Please submit again....</h1>";
	}else if($status == ""){
		echo "";
	}else if($status == 'passError'){
		echo "<h1 style='color:red;'>Password and confirm pass didn't match!</h1>";
	}else if($status == 'dbError'){
		echo "<h1 style='color:red;'>Something wrong! Please try again...</h1>";
	}else {
		echo "<h1 style='color:green;'> Success!</h1>";
	}
}
	
?>