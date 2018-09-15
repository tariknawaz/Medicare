<?php include "header2.php"; ?>

<table align="left" height="495px" width = "895px" border="1px">

	 <tr>
        <td width="300px" valign="top">
            <b>&nbsp;Account</b><hr/>
            <ul>
                
                    <li><a href="dhome.php" >Dashboard</a></li>
                    <li><a href="dprofile.php" >View Profile</a></li>
                    <li><a href="dedit.php" >Edit Profile</a></li>
                    <li><a href="dChangePass.php" >Change Password</a></li>
					<li><a href="dpatients.php" >View Patients</a></li>
					<li><a href="dappointment.php" >Check Appointments</a></li>
					<li><a href="dcenter.php" >Diagnostic Center</a></li>
                    <li><a href="php/logout.php">Logout</a></li>
            
            </ul>  

        </td>
        
		<td valign="top" align="center">
			<h2> Change Password <?php echo $_SESSION['name'] ?></h2>
			
			<center>
	<form method = "POST" action = "php/changePass.php">
		<table border="0" cellspacing="0" cellpadding="5">
			<tr>
				<td>
					<fieldset>
						<legend>CHANGE PASSWORD</legend>
						Current Password<br />
						<input type="password" name = "pass" /><br />
						New Password<br />
						<input type="password" name = "newpass"/><br />
						Retype New Password<br />
						<input type="password" name = "repass" />								
						<hr />
						<input type="submit" name = "submit" value="change" />     
												
					</fieldset>
				</td>
			</tr>
			
			<tr>
			
			</tr>
		</table>
	</form>
</center>
			
		</td>
    </tr>
	</table>
	
<?php

if(isset($status)){
	if($status == 'error')
	{
		echo "<h1 style='color:red;'> Null value found! Please submit again!</h1>";
	}
	else if($status == "")
	{
		echo "";
	}
	else if($status == 'passError')
	{
		echo "<h1 style='color:red;'>Password and confirm password didn't match!</h1>";
	}
	else if($status == 'samePassError')
	{
		echo "<h1 style='color:red;'>Password and new password cant be same!</h1>";
	}
	else if($status == 'dbError')
	{
		echo "<h1 style='color:red;'>Something wrong! Please try again...</h1>";
	}
	else 
	{
		echo "<h1 style='color:green;'> Success!</h1>";
	}
}
	
?>


<?php include "footer.php"; ?>