var flag=false;
		
		function checkName(){
			var n=document.getElementById("name").value;			
			if(n==''){
				document.getElementById("nameError").innerHTML="*please enter name";
				document.getElementById("nameError").style.color="red";
			}
			else{				
				document.getElementById("nameError").innerHTML="";
				flag=true;				
			}		
			return flag;			
		}
		
		function ucheckName(){
			var n=document.getElementById("uname").value;			
			if(n==''){
				document.getElementById("unameError").innerHTML="*please enter a username";
				document.getElementById("unameError").style.color="red";
			}
			else{				
				document.getElementById("unameError").innerHTML="";
				flag=true;				
			}		
			return flag;			
		}
		
		function checkPass(){
			var p=document.getElementById("pass").value;			
			if(p.length<8){
				document.getElementById("passError").innerHTML="*cannot be less than 8 chars";
				document.getElementById("passError").style.color="red";
			}
			else{				
				document.getElementById("passError").innerHTML="";
				flag=true;				
			}	
			return flag;
		}
		
		function matchPass(){
			var p=document.getElementById("pass").value;
			var cp=document.getElementById("cpass").value;
			if(p!=cp){
				document.getElementById("matchError").innerHTML="*password doesn't match!";
				document.getElementById("matchError").style.color="red";
			}
			else{				
				document.getElementById("matchError").innerHTML="";
				flag=true;				
			}	
			return flag;
		}
		
		function checkLocation(){
			var l = document.getElementById("location").value;
			if(l==''){
				document.getElementById("locationError").innerHTML="*please enter location";
				document.getElementById("locationError").style.color="red";
			}
			else{				
				document.getElementById("locationError").innerHTML="";
				flag=true;				
			}			
			return flag;			
		}
		
		function checkPhone(){
			var p = document.getElementById("phone").value;
			if(p==''){
				document.getElementById("phoneError").innerHTML="*please enter phone";
				document.getElementById("phoneError").style.color="red";
			}
			else{				
				document.getElementById("phoneError").innerHTML="";
				flag=true;				
			}		
			return flag;
		}
