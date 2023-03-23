const form  = document.getElementById("registrationform");

const customer_forename = document.getElementById('customer_forename');
const customer_surname  = document.getElementById('customer_surname');
const customer_postcode = document.getElementById('customer_postcode');
const customer_address1 = document.getElementById('customer_address1');
const customer_address2 = document.getElementById('customer_address2');
const password_hash     = document.getElementById('password_hash');
const date_of_birth     = document.getElementById('date_of_birth');
const username          = document.getElementById('username');
const errorMessage      = document.getElementById('error');


form.addEventListener('submit', function (event) {
  // if required field are empty, form will not submit
// First name validation code  
  if(!customer_forename.validity.valid) {
    // If field is empty display error message.
    showError();
    // Event will be cancelled and form will not be submitted. 
    event.preventDefault();
  }
//Surname validation code
  else if(!customer_surname.validity.valid){
    // If field is empty display error message.
    showError();
    // Event will be cancelled and form will not be submitted. 
    event.preventDefault();
  }
//Username validation code
  else if(!username.validity.valid){
    // If field is empty display error message.
    showError();
    // Event will be cancelled and form will not be submitted. 
    event.preventDefault();
  }
//Postcode validation code
else if(!customer_postcode.validity.valid){
  // If field is empty display error message.
  showError();
  // Event will be cancelled and form will not be submitted. 
  event.preventDefault();
}
//Address1 validation code
else if(!customer_address1.validity.valid){
  // If field is empty display error message.
  showError();
  // Event will be cancelled and form will not be submitted. 
  event.preventDefault();
}
//Address2 validation code
else if(!customer_address2.validity.valid){
  // If field is empty display error message.
  showError();
  // Event will be cancelled and form will not be submitted. 
  event.preventDefault();
}
//Address2 validation code
else if(!password_hash.validity.valid){
  // If field is empty display error message.
  showError();
  // Event will be cancelled and form will not be submitted. 
  event.preventDefault();
}
});


function showError() {
//First name validation code  
  if(customer_forename.validity.valueMissing) {
    // If the field is empty, an error message will be displayed.
    errorMessage.textContent = 'First name is required.';
  }
  else if(customer_forename.validity.patternMismatch) {
    // If the field is empty, an error message will be displayed.
    errorMessage.textContent = 'Only text is allowed e.g "John".';
  }
 
//Last name validation code. 
  else if(customer_surname.validity.valueMissing) {
    // If the field is empty, an error message will be displayed.
    errorMessage.textContent = 'Last name is required.';
  }
  else if(customer_surname.validity.patternMismatch) {
    // If the field is empty, an error message will be displayed.
    errorMessage.textContent = 'Only text is allowed e.g "Bash".';
  }

//Username validation code. 
else if(username.validity.valueMissing) {
  // If the field is empty, an error message will be displayed.
  errorMessage.textContent = 'Username is required.';
}
else if(username.validity.patternMismatch) {
  // If the field is empty, an error message will be displayed.
  errorMessage.textContent = 'Invalid username.';
}  

//Postcode validation code. 
else if(customer_postcode.validity.valueMissing) {
  // If the field is empty, an error message will be displayed.
  errorMessage.textContent = 'Postcode is required.';
}
else if(customer_postcode.validity.patternMismatch) {
  // If the field is empty, an error message will be displayed.
  errorMessage.textContent = 'Invalid postcode.';
}  

//Address1 validation code. 
else if(customer_address1.validity.valueMissing) {
  // If the field is empty, an error message will be displayed.
  errorMessage.textContent = 'Address is required.';
}
else if(customer_address1.validity.patternMismatch) {
  // If the field is empty, an error message will be displayed.
  errorMessage.textContent = 'Invalid address.';
}  

//Address1 validation code. 
else if(customer_address2.validity.patternMismatch) {
  // If the field is empty, an error message will be displayed.
  errorMessage.textContent = 'Invalid address.';
}  

//Password validation code. 
else if(password_hash.validity.valueMissing) {
  // If the field is empty, an error message will be displayed.
  errorMessage.textContent = 'password is required.';
}
else if(password_hash.validity.patternMismatch) {
  // If the field is empty, an error message will be displayed.
  errorMessage.textContent = 'Password must be longer than 8 characters. <br> Password must contain atleast one special character, one number & a capital letter';
}  
}
