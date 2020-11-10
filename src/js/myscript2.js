function checkingPwd(){
       var a= document.getElementById("pwd").value;
	   var b= document.getElementById("pwd2").value;
	   if(a==b){
	   
	         alert("Password Matches");
			 
	    }
		else{
	
		      alert("Password Doesn't Match");
			  
		}

}		
function checking(){

         if(document.getElementById("cb").checked){

             document.getElementById("sub").disabled=false;


            }
         else{
		 
	   
	    document.getElementById("sub").disabled=true;
	   
	   }

}
