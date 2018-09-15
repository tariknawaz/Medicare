<?php include "header3.php"; ?>

<table align="left" height="495px" width = "895px" border="1px">

	 <tr>
        <td width="300px" valign="top">
            <b>&nbsp;Account</b><hr/>
            <ul>
                
                    <li><a href="patientHome.php" >Dashboard</a></li>
                    <li><a href="patientProfile.php" >View Profile</a></li>
                    <li><a href="patientEdit.php" >Edit Profile</a></li>
                    <li><a href="pChangePass.php" >Change Password</a></li>
					<li><a href="diagnostics.php" >Diagnostic Centers</a></li>
					<li><a href="pappointment.php" >Check Appointments</a></li>
                    <li><a href="php/logout.php">Logout</a></li> 
            
            </ul>  

        </td>
        
		<td valign="top" align="center">
			<h2> Appointments for <?php echo $_SESSION['name'] ?></h2>
			
		</td>
    </tr>
</table>	

<?php include "footer.php"; ?>