function getCenterData(){
		var center = document.getElementById('c').value;

		var xhttp = new XMLHttpRequest();
	  
		xhttp.open("GET", "php/dCenterSearch.php?c="+center, true);
		xhttp.send();

			xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			     document.getElementById("v").innerHTML = this.responseText;

			    }
			};	
}