<?php include "header3.php"; ?>
<?php require_once('php/db.php');
	
	//if(isset($_SESSION['userName']))
	$conn = getConnection();
	
	//$sql = "SELECT user.userName,doctor.specialty,doctor.qualification,doctor.area FROM user INNER JOIN doctor 
			//ON user.userName=doctor.userName";
	
	$sql = "SELECT age,gender,medicalHistory FROM patient WHERE userName='".$_SESSION['uname']."'";
	
	$result = mysqli_query($conn, $sql);

	$count =  mysqli_num_rows($result);

		if($count == 1 )
		{
			$row = mysqli_fetch_assoc($result);
			
			$_SESSION['age'] = $row['age'];
			$_SESSION['gender'] = $row['gender'];
			$_SESSION['medicalHistory'] = $row['medicalHistory'];
		}		
?>
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
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Age</td>
				<td>:</td>
				<td><?php echo $_SESSION['age']?></td>
				
			</tr>	
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td><?php echo $_SESSION['gender']?></td>
				
			</tr>	
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Medical History</td>
				<td>:</td>
				<td><?php echo $_SESSION['medicalHistory']?></td>				
			</tr>
		</table>	
        <hr/>
				</form>
			</fieldset>			
		</td>	
    </tr>
</table>	

<?php include "footer.php"; ?>