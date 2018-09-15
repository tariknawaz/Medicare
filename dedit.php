<?php include "header2.php"; ?>
<?php 
	
	require_once('php/db.php'); 
	if(isset($_SESSION['uname'])){

    	$conn = getConnection();
    	$sql = "SELECT user.name,user.email,user.userName,doctor.specialty,doctor.qualification,doctor.area FROM user INNER JOIN doctor WHERE user.userName=doctor.userName='".$_SESSION['uname']."'";
    	$result = mysqli_query($conn, $sql);
    	$row = mysqli_fetch_assoc($result);
		
		
?>

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
			<h2> Edit Profile <?php echo $_SESSION['name'] ?></h2>
			
		<fieldset>
    <legend><b>EDIT PROFILE</b></legend>
	<form method="POST" action="php/updateProfile.php">
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
				<td>Specialty</td>
				<td>:</td>
				<td><input name="specialty" type="text" value="<?=$row['specialty']?>"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Qualification</td>
				<td>:</td>
				<td>
					<input name="qualification" type="text" value="<?=$row['qualification']?>">				
				</td>
				<td></td>
			</tr>	
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Area of Specialization</td>
				<td>:</td>
				<td>
					<input name="area" type="text" value="<?=$row['area']?>">
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