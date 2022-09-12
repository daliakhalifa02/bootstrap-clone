function validateName() {
    let x = document.forms["myForm"]["name"].value;
    if (x.length < 5) {
        alert("Name must be filled out");
        return false;
   }
} 

function validateMessage() {
    let x = document.forms["myForm"]["message"].value;
     if (x.length < 100) {
        document.getElementById("demo").innerHTML = "Message should be at least 100 charachter";
     return false;
    }
 } 
 /*function myFunction() {
    const inpObj = document.getElementById("message");
    if (!inpObj.checkValidity()) {
      document.getElementById("demo").innerHTML = inpObj.validationMessage;
    } else {
      document.getElementById("demo").innerHTML = "Input OK";
    } 
  } */

 /*function validateForm() {
    let x=document.forms["myForm"]["name"].value;
    let y=document.forms["myForm"]["message"].value;
    if (x.length<5 || x==""){  
        alert("Name must be filled out");  
        return false;  
    }
    if (y.length<100){  
        alert("Message must be at least 100 characters");  
        return false;  
    }  
}*/
 //var btn = document.getElementById("send-button"); 
     
// Assigning event listeners to the button
//btn.addEventListener("click", validateMessage); 
//btn.addEventListener("click", validateName); 

/*function validateEmail(email){
    var allowed=/^([a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$)/;
    let x= document.forms["myForm"]["email"].value;
    if (x!= allowed){
        alert("Invalid email address!");
        return false;
    }
    return allowed.test(email);
} */

function myNumber() {
    var phoneno = /^\(?([961]{3})\)?[-. ]?([0-9]{3,8})$/;
    let x= document.forms["myForm"]["number"].value;
    if(x.match(phoneno)){
        return true;
    }
    else{
        alert("Please enter a valid phone number");
        return false;
    }       
}