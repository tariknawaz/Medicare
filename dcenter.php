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
			<h2> Diagnostic Center </h2>
			<h3>Search Diagnostic Center</h3>
			<input type = "text" name = "search" id="c" placeholder = "Enter Center Name"/>
			<input type="button" name="button" value="Search" onclick="getCenterData()"/>
			<br/><br/>
			<div id="v"></div>
			
		</td>
    </tr>
</table>	
<script type="text/javascript" src='js/dCheck.js'></script>	

<?php include "footer.php"; ?>