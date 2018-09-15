function getCenterData(){
		var center = document.getElementById('center').value;

		var xhttp = new XMLHttpRequest();
	  
		xhttp.open("GET", "php/searchTest1.php?center="+center, true);
		xhttp.send();

			xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			     document.getElementById("view").innerHTML = this.responseText;

			    }
			};	
}

function getSelectedData(){
		
		var spec = document.getElementById('spec').value;

		var xhttp = new XMLHttpRequest();
	  
		xhttp.open("GET", "php/searchTest2.php?spec="+spec, true);
		xhttp.send();

			xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			     document.getElementById("show").innerHTML = this.responseText;

			    }
			};	
}
