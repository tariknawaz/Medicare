<?php include "header3.php"; ?>
<html>
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
			<h2> Welcome Home! <?php echo $_SESSION['name'] ?></h2><br/>
			<h3>Search Diagnostic Center</h3>
			<input type = "text" name = "search" id="center" placeholder = "Enter Center Name"/>
			<input type="button" name="button" value="Search" onclick="getCenterData()"/>
			<br/><br/>
			<div id="view"></div>
			<h3>Search Doctor by Specialty</h3>
			<select name="spec" id="spec" onchange="getSelectedData()">
			<option value="ENT">ENT</option>
			<option value="Cardiology">Cardiology</option>
			<option value="Oncology">Oncology</option>
			<option value="Orthopedics">Orthopedics</option>
			<option value="Diabetology">Diabetology</option>			
			<option value="Nephrology">Nephrology</option>
			<option value="Neurologist">Neurologist</option>
			<option value="Gastroenterology">Gastroenterology</option>
			</select>
			<div id="show"></div>
			<br/><br/>
		</td>
    </tr>
</table>
<script type="text/javascript" src='js/patientHome.js'></script>	
</html>
<?php include "footer.php"; ?>