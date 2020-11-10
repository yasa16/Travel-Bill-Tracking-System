function checkingPwd()
{
		var a= document.getElementById("id").value;
		var b= document.getElementById("pwdad").value;
	    if((a=="admin")&&(b=="1234"))
	     {
			
			alert("Successfully Logged");
			return true;

         }
         else
		 {
			alert("Check your credentials");
			return false;
	   
	     }	   
}