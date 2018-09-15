<?php 
	include "header.php";
?>
    <tr width="100%" height = "100%">
        <td align="center">
			<h1>Welcome to Medicare!</h1><br/><br/><br/><br/>
			<h3>Search by Diagnostic Center</h3>
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
	
	<script type="text/javascript" src='js/index.js'></script>
    
	<tr style = "color:white; background-color:black;">
        <td align="center">
		<h5>copyright@Medicare2018<br>
			All Rights Reserved</h5>
        </td>
	</tr>