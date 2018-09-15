<?php include "header2.php"; ?>
<?php require_once('php/db.php');
	
	//if(isset($_SESSION['userName']))
	$conn = getConnection();
	
	//$sql = "SELECT user.userName,doctor.specialty,doctor.qualification,doctor.area FROM user INNER JOIN doctor 
			//ON user.userName=doctor.userName";
	
	$sql = "SELECT specialty,qualification,area FROM doctor WHERE userName='".$_SESSION['uname']."'";
	
	$result = mysqli_query($conn, $sql);

	$count =  mysqli_num_rows($result);

		if($count == 1 )
		{
			$row = mysqli_fetch_assoc($result);
			
			$_SESSION['specialty'] = $row['specialty'];
			$_SESSION['qualification'] = $row['qualification'];
			$_SESSION['area'] = $row['area'];
		}
		
?>
<table align="left" height="495px" width = "895px" border="1px">

	 <tr>
        <td width="300px" valign="top">
            <b>&nbsp;Account</b><hr/>
            <ul>
                
                    <li><a href="dhome.php" >Dashboard</a></li>
                    <li><a href="dprofile.php" >View Profile</a></li>
                    <li><a href="dedit.php" >Edit Profile</a></li>
                    <li><a href="change_password.php" >Change Password</a></li>
					<li><a href="dpatients.php" >View Patients</a></li>
					<li><a href="dappointment.php" >Check Appointments</a></li>
					<li><a href="dcenter.php" >Diagnostic Center</a></li>
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
				<td>Email</td>
				<td>:</td>
				<td><?php echo $_SESSION['email']?></td>
			</tr>
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>User Name</td>
				<td>:</td>
				<td><?php echo $_SESSION['uname']?></td>
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
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Specialty</td>
				<td>:</td>
				<td><?php echo $_SESSION['specialty']?></td>
				
			</tr>	
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Qualification</td>
				<td>:</td>
				<td><?php echo $_SESSION['qualification']?></td>
				
			</tr>	
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Area of Specialization</td>
				<td>:</td>
				<td><?php echo $_SESSION['area']?></td>
				
			</tr>	
		</table>	
        <hr/>
				</form>
			</fieldset>
			
		</td>
		
		
			
	
    </tr>
</table>	

<?php include "footer.php"; ?>