<?php include "header3.php"; ?>
<?php 
	require_once('php/db.php'); 
	if(isset($_SESSION['uname'])){

    	$conn = getConnection();
    	$sql = "SELECT user.name,user.email,user.userName,patient.age,patient.gender,patient.medicalHistory FROM user INNER JOIN patient WHERE user.userName=patient.userName='".$_SESSION['uname']."'";
    	$result = mysqli_query($conn, $sql);
    	$row = mysqli_fetch_assoc($result);		
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
			<h2> Edit Profile <?php echo $_SESSION['name'] ?></h2>
			
		<fieldset>
    <legend><b>EDIT PROFILE</b></legend>
	<form method="POST" action="php/updatePatientProfile.php">
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text" value="<?=$_SESSION['name']?>"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text" value="<?=$_SESSION['email']?>">
					<abbr title="hint: sample@example.com"><b>i</b></abbr>
				</td>
				<td></td>
			</tr>	
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td>
					<input name="userName" type="text" value="<?=$_SESSION['uname']?>">
				</td>
				<td></td>
			</tr>	
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Age</td>
				<td>:</td>
				<td><input name="age" type="text" value="<?=$row['age']?>"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td>
					<input name="gender" type="text" value="<?=$row['gender']?>">				
				</td>
				<td></td>
			</tr>	
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Medical History</td>
				<td>:</td>
				<td>
					<input name="medicalHistory" type="text" value="<?=$row['medicalHistory']?>">
				</td>
				<td></td>
			</tr>
		</table>
		<hr/>
		<input type="submit" name="submit" value="Update">		
	</form>
</fieldset>			
		</td>
    </tr>
</table>
<?php

}else{
    header("location: login.php");
}
?>	

<?php include "footer.php"; ?>