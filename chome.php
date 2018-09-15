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
			<h2> Welcome Home! <?php echo $_SESSION['name'] ?></h2>
		</td>
    </tr>
</table>	

<?php include "footer.php"; ?>