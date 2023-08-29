// DEFINE VARIABLES
// Create a variable for the name input field
const inputName = document.querySelector( '#full-name' ); // usernameEl
// And for the email input field
const inputEmail = document.querySelector( '#email' ); // emailEl

// And for the message field
const inputMessage = document.querySelector( "#message" );

const regName = /\d+$/g; // Javascript reGex for name
const regEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g;  //Javascript reGex for Email Validation.

const form = document.getElementById('contact__form');

const checkUsername = () => {

    let valid = false;

    const min = 2,
        max = 50;

    const valueName = inputName.value.trim(); // valueName = username, inputName = usernameEl

    if (!isRequired(valueName)) {
        showError(inputName, 'Name cannot be blank.');
    } else if (!isBetween(valueName.length, min, max)) {
        showError(inputName, `Name must be between ${min} and ${max} characters.`)
    } else if (!isNameValid(valueName)) {
        showError(inputName, 'Name must not contain numbers.')
    } else {
        showSuccess(inputName);
        valid = true;
    }
    return valid;
};

const checkEmail = () => {
    let valid = false;
    // email = valueEmail, emailEl = inputEmail
    const valueEmail = inputEmail.value.trim();
    if (!isRequired(valueEmail)) {
        showError(inputEmail, 'Email cannot be blank.');
    } else if (!isEmailValid(valueEmail)) {
        showError(inputEmail, 'Email is not valid.')
    } else {
        showSuccess(inputEmail);
        valid = true;
    }
    return valid;
};

const checkMessage = () => {
    let valid = false;
    // email = valueEmail, emailEl = inputEmail
    const valueMessage = inputMessage.value.trim();
    if (!isRequired(valueMessage)) {
        showError(inputMessage, 'Message cannot be blank.');
    } else {
        showSuccess(inputMessage);
        valid = true;
    }
    return valid;
};

const isNameValid = (name) => {
    const regEx = /\d+$/g;
    return !regEx.test(name);
};

const isEmailValid = (email) => {
    const regEx = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return regEx.test(email);
};

const isRequired = value => value === '' ? false : true;

const isBetween = (length, min, max) => length < min || length > max ? false : true;

const showError = (input, message) => {
    // get the form-field element
    const formField = input.parentElement;
    // add the error class
    formField.classList.remove('success');
    formField.classList.add('error');

    // show the error message
    const error = formField.querySelector('small');
    error.textContent = message;
};

const showSuccess = (input) => {
    // get the form-field element
    const formField = input.parentElement;

    // remove the error class
    formField.classList.remove('error');
    formField.classList.add('success');

    // hide the error message
    const error = formField.querySelector('small');
    error.textContent = '';
}

form.addEventListener('submit', function(e) {
    // prevent the form from submitting
    e.preventDefault();

    // validate fields
    let isUsernameValid = checkUsername(),
        isEmailValid = checkEmail(),
        isMessageValid = checkMessage();

    let isFormValid = isUsernameValid &&
        isEmailValid &&
        isMessageValid;

    // submit to the server if the form is valid
    if (isFormValid) {
        console.log('submit');
    }
});


const debounce = (fn, delay = 500) => {
    let timeoutId;
    return (...args) => {
        // cancel the previous timer
        if (timeoutId) {
            clearTimeout(timeoutId);
        }
        // setup a new timer
        timeoutId = setTimeout(() => {
            fn.apply(null, args)
        }, delay);
    };
};

form.addEventListener('input', debounce(function (e) {
    switch (e.target.id) {
        case 'name':
            checkUsername();
            break;
        case 'email':
            checkEmail();
            break;
        case 'message':
            checkMessage();
            break;
    }
}));

