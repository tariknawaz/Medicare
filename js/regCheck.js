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
		
		function checkuName(){
			var u=document.getElementById("uname").value;			
			if(u==''){
				document.getElementById("unameError").innerHTML="*please enter username";
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
		
		function validation(){
			return flag;
		}
		