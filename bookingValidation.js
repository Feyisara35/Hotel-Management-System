const form  = document.getElementById("bookingForm");

const accommodationID = document.getElementById('accommodationID');
const customerID = document.getElementById('customerID');
const num_guests = document.getElementById('num_guests');
const errorMessage = document.getElementById('error');
  
  form.addEventListener('submit', function (event) {
  // if the email field is valid, we let the form submit
//AccommodationID validation code
  if(!accommodationID.validity.valid) {
    // If it isn't, we display an appropriate error message
    showError();
    // Then we prevent the form from being sent by canceling the event
    event.preventDefault();
  }
//customerID validation code
  if(!customerID.validity.valid) {
    // If it isn't, we display an appropriate error message
    showError();
    // Then we prevent the form from being sent by canceling the event
    event.preventDefault();
  }

//Number of Guest validation code
  if(!num_guests.validity.valid) {
    // If it isn't, we display an appropriate error message
    showError();
    // Then we prevent the form from being sent by canceling the event
    event.preventDefault();
  }
});

function showError() {
//Accommodation Validation Code
  if(accommodationID.validity.valueMissing) {
    // If the field is empty,
    // display the following error message.
    errorMessage.textContent = 'Accomodation field cannot be empty.';
  }

  else if(accommodationID.validity.patternMismatch) {
    // If the data is too short,
    // display the following error message.
    errorMessage.textContent = 'Invalid Accomodation ID';
  }
//CustomerID Validation Code
else if(customerID.validity.valueMissing) {
    // If the field is empty,
    // display the following error message.
    errorMessage.textContent = 'Customer ID field cannot be empty.';
  }
  else if(customerID.validity.patternMismatch) {
    // If the data is too short,
    // display the following error message.
    errorMessage.textContent = 'Invalid Customer ID';
  }
//Number of Guest Validation Code
else if(num_guests.validity.valueMissing) {
    // If the field is empty,
    // display the following error message.
    errorMessage.textContent = 'Guest field cannot be empty.';
  }
  else if(num_guests.validity.patternMismatch) {
    // If the data is too short,
    // display the following error message.
    errorMessage.textContent = 'Invalid Guest Number';
  }
}
