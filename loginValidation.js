const form  = document.getElementById("loginForm");

const username = document.getElementById('username');
const password_hash = document.getElementById('password_hash');
const errorMessage = document.getElementById('error');
  
  form.addEventListener('submit', function (event) {
  // if the email field is valid, we let the form submit
//Username validation code
  if(!username.validity.valid) {
    // If it isn't, we display an appropriate error message
    showError();
    // Then we prevent the form from being sent by canceling the event
    event.preventDefault();
  }
//Password validation code
  if(!password_hash.validity.valid) {
    // If it isn't, we display an appropriate error message
    showError();
    // Then we prevent the form from being sent by canceling the event
    event.preventDefault();
  }
});

function showError() {
//Username Validation Code
  if(username.validity.valueMissing) {
    // If the field is empty,
    // display the following error message.
    errorMessage.textContent = 'Username field cannot be empty.';
  }

  else if(username.validity.patternMismatch) {
    // If the data is too short,
    // display the following error message.
    errorMessage.textContent = 'Invalid username or password';
  }
//Password Validation Code
else if(password_hash.validity.valueMissing) {
    // If the field is empty,
    // display the following error message.
    errorMessage.textContent = 'Password field cannot be empty.';
  }
  else if(password_hash.validity.patternMismatch) {
    // If the data is too short,
    // display the following error message.
    errorMessage.textContent = 'Invalid username or password';
  }
}
