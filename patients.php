<?php include "header2.php"; ?>

<h1>Patients</h1>

<body>
	<fieldset>
	<legend>Male Patients</legend>
	<div >
		<select name="name" id="name" onchange="getSelectedData()">
			<option value="Anderson Smith">Anderson Smith</option>
			<option value="Tom Riddle">Tom Riddle</option>
		</select>

		<div id="demo">

		</div>
	</div>
	
	</fieldset>

	<script>
		
		function getSelectedData(){
		
		var name = document.getElementById('name').value;

		var xhttp = new XMLHttpRequest();
	  
		xhttp.open("GET", "test.php?name="+name, true);
		xhttp.send();

			xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			     document.getElementById("demo").innerHTML = this.responseText;

			    }
			};
		}

	</script>
</body>

<?php include "footer.php"; ?>