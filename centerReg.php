<?php
if (isset($_GET['status']))
{
	$status=$_GET['status'];
}
?>
<html>
<fieldset>
<legend><h3>DIAGNOSTIC CENTER REGISTRATION</h3></legend>
<form method="POST" action="php/cregCheck.php">
	<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td>		
					Name<br/><input type="text" name="name" id="name" onblur="checkName()"/><span id="nameError"></span><br/>
					User Name<br/><input type="text" name="uname" id="uname" onblur="ucheckName()"/><span id="unameError"></span><br/>
					Password<br/><input type="password" name="password" id="pass" onblur="checkPass()"/><span id="passError"></span><br/>
					Confirm Password<br/><input type="password" name="confirmPassword" id="cpass" onblur="matchPass()"/><span id="matchError"></span><br/>
					Email<br/><input type="email" name="email" id="email" onblur="checkEmail()"/><abbr title="hint: sample@example.com"><b>i</b></abbr><span id="mailError"></span><br/>
					Phone<br/><input type="text" name="phone" id="phone" onblur="checkPhone()"/><span id="phoneError"></span><br/>
					Location<br/><input type="text" name="location" id="location" onblur="checkLocation()"/><span id="locationError"></span><br/>					
					<br/>
			</td>
		</tr>                                
	</table><hr/>
	<input type="submit" name="submit" value="Register">		
	<input type="reset">
</form>
</fieldset><br/>

<a href="registration.php">Back to User Registration</a><br/><br/>
<a href="index.php">Back to Home</a><br/><br/>
<script type="text/javascript" src='js/centerRegCheck.js'></script>
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
