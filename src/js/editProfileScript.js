function passwordMatch(){
	var pswrd = document.getElementById("npwd").value;
	var cnfrm = document.getElementById("confirm").value;
	
	if(pswrd==cnfrm){
		alert("Password Matched");
		return true;
	}
	else{
		alert("Please cofirm your New Password!");
		return false;
	}
}