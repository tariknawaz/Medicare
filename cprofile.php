<?php include "header4.php"; ?>

<table align="left" height="495px" width = "895px" border="1px">

	 <tr>
        <td width="300px" valign="top">
            <b>&nbsp;Account</b><hr/>
            <ul>
                
                    <li><a href="chome.php" >Dashboard</a></li>
                    <li><a href="cprofile.php" >View Profile</a></li>
                    <li><a href="edit_profile.php" >Edit Profile</a></li>
                    <li><a href="change_password.php" >Change Password</a></li>
					<li><a href="doctors.php" >Edit Doctors</a></li>
					<li><a href="appointments.php" >Check Appointments</a></li>
                    <li><a href="php/logout.php">Logout</a></li>
            
            </ul>  

        </td>
        
		<td valign="top" align="center">
			
			<h2><?php echo $_SESSION['name'] ?> Profile!</h2>
			
			<fieldset>
				<legend><b>Profile</b></legend>
				<form>
				<br/>
				<table cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><?php echo $_SESSION['name']?></td>
			
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>User Name</td>
				<td>:</td>
				<td><?php echo $_SESSION['uname']?></td>
				
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>			
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><?php echo $_SESSION['email']?></td>
			</tr>
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><?php echo $_SESSION['pass']?></td>
			</tr>
			
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Type</td>
				<td>:</td>
				<td><?php echo $_SESSION['type']?></td>
			</tr>
		</table>	
        <hr/>
				</form>
			</fieldset>
			
		</td>
		
		
			
	
    </tr>
</table>	

<?php include "footer.php"; ?>