
/*function checkempty(form) { 
            if (form.name.value == null||  
                form.name.value == undefined || 
                form.name.value.length == 0)
			{ 
                alert("Name cannot be empty\n"); 
                return false; 
            } else { 
                function success(); 
                return true; 
            } 
        } */
function loaddata(data){
	if (data == "send"){
		var a = document.getElementById("name").value;
		var b = a.length;
	
			if (b == 0)
			{
				document.getElementById("psuccess").innerHTML = "Name cannot be empty"
			}
			else 
			{ 
				alert("Your Massage sent successfully!");
              
			} 
		}
}





function check()
{
	var a = document.getElementById("name").value;
	var b = a.length;
	
	if (b == 0)
	{
		alert("Name cannot be empty\n");
	}
	else 
	{ 
        document.getElementById("psuccess").innerHTML = "Your Massage sent successfully!"
              
    } 
}




function success()
{
	
		document.getElementById("psuccess").innerHTML = "Your Massage sent successfully!"
		
}
