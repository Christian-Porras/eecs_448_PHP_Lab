function checkUsername(){
	var username = document.getElementById("Username").value;
	var containsAtSymbol = false;
	var containsDotCom = false;
	
	if( username.indexOf('@') >= 0){
		containsAtSymbol = true;
	}
	
	if( username.endsWith(".com")){
		containsDotCom = true;
	}
	
	if( containsAtSymbol && containsDotCom ){
		return true;
	}
	else if( !containsAtSymbol && !containsDotCom ){
		alert("Username does not contain @ or .com");
	}
	else if( !containsAtSymbol ){
		alert("Username does not contain @");
	}
	else if( !containsDotCom ){
		alert("Username does not contain .com");
	}
	return false;
}

function checkPassword(){
	var password = document.getElementById("Password").value;
	if( password == "" ){
		alert("Password Empty");
		return false;
	}
	return true;
}

function checkShipping(){
	var shippingOption = document.getElementsByName("shipping");
	for (var i = 0; i < shippingOption.length; i++){
		if(shippingOption[i].checked){
			var selectedOption = shippingOption[i].value;
			alert(selectedOption);
		}
	}
	if( selectedOption == undefined ){
		alert("Shipping option not selected");
		return false;
	}
	return true;
}

function checkQuantities(){
	var quantity1 = document.getElementById("Quantity1").value;
	var quantity2 = document.getElementById("Quantity2").value;
	var quantity3 = document.getElementById("Quantity3").value;
	
	if(quantity1 == "" || quantity2 == "" || quantity3 == ""){
		alert("Quantities cannot be zero");
		return false;
	}
	return true;
}

function formChecker(){
	var usernameValidated = checkUsername();
	var passwordValidated = checkPassword();
	var shippingValidated = checkShipping();
	var quantitiesValidate = checkQuantities();
	
	if( !usernameValidated || !passwordValidated || !shippingOption ){
		document.getElementById("store").action = "customerFrontend.html";
	}

}