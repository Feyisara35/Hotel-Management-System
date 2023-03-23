const form  = document.getElementById("searchForm");

const search = document.getElementById('search');
const errorMessage = document.getElementById('error');

form.addEventListener('submit', function (event){
    if(!search.validity.valid){
        showError();

        event.preventDefault;
    }
});


function showError(){
    if(search.validity.valueMissing){
        errorMessage.textContent = "Field cannot be empty.";
    }

    else if(search.validity.patternMismatch){
        errorMessage.textContent = 'Invalid Search!'
    }
}