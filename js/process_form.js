//onFocus Functions
//----------------------------------------------------------

// First Name Input Focus
// ---------------------------------------------------------
function firstNameFocus(){

	var fnContent = document.getElementById('fnvalid');
	console.log("OnFocus");
	 
	var fnLettersFocus = document.createElement('p');
	document.getElementById("fnvalid").style.color="black";
	var fnLettersFocusText = document.createTextNode("Please enter a valid first name.");
	fnLettersFocus.appendChild(fnLettersFocusText);
	var fnLettersFocus2 = document.createElement('p');
	var fnLettersFocusText2 = document.createTextNode("[Must contain letters only]");
	fnLettersFocus2.appendChild(fnLettersFocusText2);
				
	fnContent.appendChild(fnLettersFocus);
	fnContent.appendChild(fnLettersFocus2);
		
	return;
}

// Last Name Input Focus
// --------------------------------------------------------------
function lastNameFocus(){
	
	var lnContent = document.getElementById('lnvalid');
	console.log("OnFocusLn" );
	 
	var lnLettersFocus = document.createElement('p');
	document.getElementById("lnvalid").style.color="black";
	var lnLettersFocusText = document.createTextNode("Please enter a valid last name.");
	lnLettersFocus.appendChild(lnLettersFocusText);
	var lnLettersFocus2 = document.createElement('p');
	var lnLettersFocusText2 = document.createTextNode("[Must contain letters only]");
	lnLettersFocus2.appendChild(lnLettersFocusText2);
	 
	lnContent.appendChild(lnLettersFocus);
	lnContent.appendChild(lnLettersFocus2);
	 
	return;
}


//Email Input Focus
//-----------------------------------------------------
function emailFocus(){
	var emailContent = document.getElementById('emailvalid');
	//console.log("OnFocusEmail");
	 
	var emailFocus = document.createElement('p');
	document.getElementById("emailvalid").style.color="black";
	var emailFocusText = document.createTextNode("Please enter a valid email address.");
	emailFocus.appendChild(emailFocusText);
	var emailFocus2 = document.createElement('p');
	var emailFocusText2 = document.createTextNode("[Must contain @]");
	emailFocus2.appendChild(emailFocusText2);

	emailContent.appendChild(emailFocus);
	emailContent.appendChild(emailFocus2);	
	
	return;
}

//Phone Number Focus
//-----------------------------------------------------
function phoneFocus(){
	
	var phoneContent = document.getElementById('phonevalid');
	//console.log("OnFocusPhone" );
	 
	var phoneFocus = document.createElement('p');
	document.getElementById("phonevalid").style.color="black";
	var phoneFocusText = document.createTextNode("Please enter a valid phone number.");
	phoneFocus.appendChild(phoneFocusText);
	var phoneFocus2 = document.createElement('p');
	var phoneFocusText2 = document.createTextNode("[Format: xxx-xxx-xxxx]");
	phoneFocus2.appendChild(phoneFocusText2);
			
	phoneContent.appendChild(phoneFocus);
	phoneContent.appendChild(phoneFocus2);
		
	return;
}

//Sulley Input Focus
//-----------------------------------------------------
function sulleyFocus(){
	
	var sulleyContent = document.getElementById('sulleyvalid');
	console.log("OnFocusSulley" );
	 
	var sulleyFocus = document.createElement('p');
	document.getElementById("sulleyvalid").style.color="black";
	var sulleyFocusText = document.createTextNode("Please enter a valid sulley address.");
	sulleyFocus.appendChild(sulleyFocusText);
	var sulleyFocus2 = document.createElement('p');
	var sulleyFocusText2 = document.createTextNode("[Must begin with http:// and contain ~]");
	sulleyFocus2.appendChild(sulleyFocusText2);
				
	sulleyContent.appendChild(sulleyFocus);
	sulleyContent.appendChild(sulleyFocus2);
	
	return;
}


// Validation
//------------------------------------------------------------------

function validateData(){
	//console.log("Start Validation");
	var letters = /^[a-zA-Z]+/;
	var numbers = /^[0-9]+$/;
	var fnContent = document.getElementById('fnvalid');
	var fnLetterFocus;
	var lnContent = document.getElementById('lnvalid');
	var lnLetterFocus;
	var emailContent = document.getElementById('emailvalid');
	var email = "@";
	var phoneContent = document.getElementById('phonevalid');
	var phonenum = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/; 
	var sulleyContent = document.getElementById('sulleyvalid');
	var sulley = "~";
	var start = 1;
	
	
//Validate First name	
	while (start==1){
		//console.log("fn while loop");
		if( document.info.firstname.value.match(numbers) || document.info.firstname.value === ''  ){
			console.log("Please enter only letters!" );
			var fnvalid = document.getElementById("fnvalid").value="Please use letters only.";
			
			image = document.getElementById('validImage1');
			image.src = "img/x.gif";
		 
			var node = document.getElementById('fnvalid');
			node.removeChild(node.childNodes[0]);	

			var fnLettersFocus = document.createElement('p');
			document.getElementById("fnvalid").style.color="red";
		 
			var fnLettersFocusText = document.createTextNode("Please use only letters!");
			fnLettersFocus.appendChild(fnLettersFocusText);
				
			fnContent.appendChild(fnLettersFocus);
			document.info.firstname.focus();
			return;
		}
		
		else if( document.info.firstname.value.match(letters)  ){
			//console.log("Letter entered" );	
			image = document.getElementById('validImage1');
			image.src = "img/check.gif";
			document.getElementById("fnvalid").style.color="green";
			start=2;
			//console.log("Add 1 to start");
			break;
		}
	
		console.log("Broke out of fn loop");
	}
	/*
    var firstname = document.getElementById('firstname').value;
	localStorage.setItem('firstname', firstname);
	console.log("Storing first name");
*/
//Validate last name
	start=2;
	while(start==2){
		console.log("Validate last name");
		if( document.info.lastname.value.match(numbers) || document.info.lastname.value === ''  ){
			//console.log("Please enter only letters!" );
			var lnvalid = document.getElementById("lnvalid").value="Please use letters only.";
		 
			image = document.getElementById('validImage2');
			image.src = "img/x.gif";
		 
			var lnLettersOnly = document.createElement('p');
			document.getElementById("lnvalid").style.color="red";
			var lnLettersOnlyText = document.createTextNode("Please use only letters!");
			lnLettersOnly.appendChild(lnLettersOnlyText);
					
			lnContent.appendChild(lnLettersOnly);
			document.info.lastname.focus();
			return;
		}
		
		else if( document.info.lastname.value.match(letters)){
			//console.log("Please enter only letters!" );	
		 
			image = document.getElementById('validImage2');
			image.src = "img/check.gif";
		 
			var lnLettersGood = document.createElement('p');
			document.getElementById("lnvalid").style.color="green";
			var lnLettersGoodText = document.createTextNode("Please use only letters!");
			lnLettersGood.appendChild(lnLettersGoodText);
					
			lnContent.appendChild(lnLettersGood);
			//console.log("Add 1 to start = 3");
			start=3;
			console.log("Start = 3");
			break;
		}
		console.log("Broke out of ln loop");
		start=3;		
		break;
}
//Validate Email
	start=3;
	while(start==3){
		if ( document.info.email.value.indexOf(email) > -1 ) {
			console.log( "found @" );
			var emailGood = document.createElement('p');
			document.getElementById("emailvalid").style.color="green";
			var emailGoodText = document.createTextNode("Valid!");
		 
			image = document.getElementById('validImage3');
			image.src = "img/check.gif";
		 
			emailGood.appendChild(emailGoodText);		
			emailContent.appendChild(emailGood);
			start=4;
			console.log("start=4");
			break;
		} 
		else{
			console.log( "@ not found" );
			var emailOnly = document.createElement('p');
			document.getElementById("emailvalid").style.color="red";
			var emailOnlyText = document.createTextNode("Please use a valid email address!");
		 
			image = document.getElementById('validImage3');
			image.src = "img/x.gif";
			
			emailOnly.appendChild(emailOnlyText);
			emailContent.appendChild(emailOnly);
		
			document.info.email.focus();
			return;
		}
		break;
		console.log("Broke out of email loop");
	}
	
//Validate Phone
	start=4;
	while(start==4){ 
		console.log("Validate Phone");
		if(document.info.phone.value.match(phonenum)){  
			console.log("phone number good");
			var phoneGood = document.createElement('p');
			document.getElementById("phonevalid").style.color="green";
			var phoneGoodText = document.createTextNode("Valid!");
			
			image = document.getElementById('validImage4');
			image.src = "img/check.gif";
		 
			phoneGood.appendChild(phoneGoodText);			
			phoneContent.appendChild(phoneGood);
			start=5;
			break;
		}  
		else{  
			console.log("phone number invalid");
			var phoneOnly = document.createElement('p');
			document.getElementById("phonevalid").style.color="red";
			var phoneOnlyText = document.createTextNode("Please enter a valid phone number!");
			
			image = document.getElementById('validImage4');
			image.src = "img/x.gif";
			
			phoneOnly.appendChild(phoneOnlyText);		
			phoneContent.appendChild(phoneOnly);
		
			document.info.phone.focus();		
			return;
		} 
	}



//Validate Sulley

	start=5;
	while(start==5){
		console.log("Validate Sulley Loop");
		if ( document.info.sulley.value.indexOf(sulley) > -1 && document.info.sulley.value.indexOf('http://') === 0) {
			console.log( "found ~" );
			var sulleyGood = document.createElement('p');
			document.getElementById("sulleyvalid").style.color="green";
			var sulleyGoodText = document.createTextNode("Valid!");
		 
			image = document.getElementById('validImage5');
			image.src = "img/check.gif";
		 
			sulleyGood.appendChild(sulleyGoodText);
			sulleyContent.appendChild(sulleyGood);
			start=6;
			break;
		} 
		else {
			console.log( "~ not found" );
			var sulleyOnly = document.createElement('p');
			document.getElementById("sulleyvalid").style.color="red";
			var sulleyOnlyText = document.createTextNode("Please use a valid sulley address!");
	 
			image = document.getElementById('validImage5');
			image.src = "img/x.gif";
	 
			sulleyOnly.appendChild(sulleyOnlyText);
			sulleyContent.appendChild(sulleyOnly);
	
			document.info.sulley.focus();
			return;
		}
		break;
	}
}


// Anonymous Checkbox
//--------------------------------------------------------------------
function checkbox(){
	console.log("Checking checkbox status");
	if (document.info.anonymous.checked==true){
		console.log(document.info.anonymous.checked);
		console.log("Checkbox is checked");
		document.info.firstname.disabled=true;
		document.info.lastname.disabled=true;
		document.info.email.disabled=true;
		document.info.phone.disabled=true;
		document.info.sulley.disabled=true;
	}
	else if(document.info.anonymous.checked==false){
		console.log(document.info.anonymous.checked);
		console.log("Checkbox is not checked");
		document.info.firstname.disabled=false;
		document.info.lastname.disabled=false;
		document.info.email.disabled=false;
		document.info.phone.disabled=false;
		document.info.sulley.disabled=false;
	}
}

	
// Submit Form
// ---------------------------------------------------------------------
function submitForm(info){

	console.log("questions start");
	var total=0;
	var total = total + (parseInt(document.info.question1.value) + parseInt(document.info.question2.value)
				+ parseInt(document.info.question3.value) + parseInt(document.info.question4.value));

	console.log(document.info.question1.value);
	console.log(document.info.question2.value);
	console.log(document.info.question3.value);
	console.log(document.info.question4.value);
	console.log(parseInt(document.info.question1.value) + parseInt(document.info.question2.value)
				 + parseInt(document.info.question3.value) + parseInt(document.info.question4.value));	
	console.log("quiz total = " + total);

	if (total>0 && total<6){ 
	//Cambot Results
		console.log("Display Cambot Results");
		document.getElementById('resultscrow').style.display="none";
		document.getElementById('resultscambot').style.display="block";
		document.getElementById('resultsgypsy').style.display="none";
		document.getElementById('resultstom').style.display="none";		
	}
	else if (total>5 && total<9){
	//Gypsy Results
		console.log("Display Gypsy Results");
		document.getElementById('resultscrow').style.display="none";
		document.getElementById('resultscambot').style.display="none";
		document.getElementById('resultsgypsy').style.display="block";
		document.getElementById('resultstom').style.display="none";			
	}
	else if (total>8 && total<13){ 
	//Crow Results
		console.log("Display Crow Results");
		document.getElementById('resultscrow').style.display="block";
		document.getElementById('resultscambot').style.display="none";
		document.getElementById('resultsgypsy').style.display="none";
		document.getElementById('resultstom').style.display="none";
	}

	else if (total>11 && total<17){
	//Tom Results
		console.log("Display Tom Results");
		document.getElementById('resultscrow').style.display="none";
		document.getElementById('resultscambot').style.display="none";
		document.getElementById('resultsgypsy').style.display="none";
		document.getElementById('resultstom').style.display="block";		
	}
}