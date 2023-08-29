// By default, forms submit their content to a server-side endpoint. The default is the URL itself. You override this by setting the action attribute of the HTML form element. The POST method is more secure. 

// To start intercepting forms with JavaScript you need to intercept the submit event on the form element. I have done it in the HTML using onsubmit on the form element. But you can also do it in the js file itself

// const form = document.querySelector( 'form' );
// form.addEventListener( 'submit', event =>
// {
//     // submit event detected. Add event.preventDefault() to avoid the default behaviour of the page reloading on submit
//     event.preventDefault();
//     console.log( 'submit' );
// } );

// DEFINE VARIABLES
// Create a variable for the name input field
const inputName = document.querySelector( '#full-name' );
// And for the email input field
const inputEmail = document.querySelector( '#email' );
// And for the message field
const inputMessage = document.querySelector( "#message" );
const regName = /\d+$/g; // Javascript reGex for name
const regEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g;  //Javascript reGex for Email Validation.


console.log( `inputName = ${ inputName }, inputEmail = ${ inputEmail }, inputMessage = ${ inputMessage }` ); // Returns : inputName = [object HTMLInputElement], inputEmail = [object HTMLInputElement], inputMessage = [object HTMLTextAreaElement]

// RECUPERATE VALUES ENTERED
// recuperate the value from name input field
inputName.addEventListener( 'input', event =>
{
    console.log( `The value entered is ${ inputName.value }` );
} );


inputEmail.addEventListener( 'input', event =>
{
    console.log( `The value entered is ${ inputEmail.value }` );
} );
inputMessage.addEventListener( 'input', event =>
{
    console.log( `The value entered is ${ inputMessage.value }` );
} );

// You can also listen for the following events in form fields:
// input - fired when change in value detected
// cut, copy, paste - fired when the user does any of these actions in the form field
// focus - fired when the form element gains focus
// blur - fired when the form element loses focus

inputName.addEventListener( 'focus', event =>
{
    // console.log('focus')
} );

inputName.addEventListener( 'blur', event =>
{
    // console.log('blur')
} );

// FORM VALIDATION
// We will call the validateForm function when the onsubmit event occurs
function validateForm ( event )
{
    event.preventDefault();
    console.log( 'submit' );

//     Before validating the form, you can develop some reusable utility functions to check if:

// A field is required.
// The length of a field is between min and max.
// The name doesn't contain numbers.
// The email is in a valid format.

// returns true if the input argument is empty:
const isRequired = value => value === '' ? false : true;

// returns false if the length argument is not between the min and max argument:
const isBetween = (length, min, max) => length < min || length > max ? false : true;


// use a regEx to check if name is valid (it doesn't contain numbers)
const isNameValid = (name) => {
    const regEx = /\d+$/g; 
    return regEx.test(name);
};

// use a regEx to check if email is valid
const isEmailValid = (email) => {
    const regEx = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return regEx.test(email);
};


    // DEFINE VARIABLES
    // Create a variable for the name input field
    const inputName = document.querySelector( '#full-name' );
    const valueName = inputName.value;
    console.log(valueName);
    // And for the email input field
    const inputEmail = document.querySelector( '#email' );
    const valueEmail = inputEmail.value;
    console.log(valueEmail);
    // And for the message field
    const inputMessage = document.querySelector( "#message" );
    const valueMessage = inputMessage.value;
    console.log(valueMessage);

    const regName = /\d+$/g; // Javascript reGex for name
    const regEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g;  //Javascript reGex for Email Validation.


    // let atpos = inputEmail.value.indexOf( "@" ); // Find out where the @ sign is in the email string
    // let dotpos = inputEmail.value.lastIndexOf( "." ); // Find out where the final . is in the email string
    // console.log( `atpos : ${ atpos }, dotpos : ${ dotpos }` );

    // if ( inputName.value == "" )
    // {
    //     //TODO And if inputName has less than two character?
    //     console.log( "Please provide your name!" );
    //     inputName.focus();
    //     //    the return false stops the form from submitting.
    //     return false;
    // } 

    // An email address must contain at least a ‘@’ sign and a dot (.). Also, the ‘@’ must not be the first character of the email address, and the last dot must at least be one character after the ‘@’ sign.
    // if (atpos < 1 || ( dotpos - atpos < 2 )) {
    //     alert("Please enter a valid email address")
    //     inputName.focus(); ;
    //     return false;
    //  }

    //  Regular_Expression.test(String) will check the user entered string with the standard regEx, 
    // If it matches then if condition will be satisfied and !Regular_Expression.test(String) will check for alternative condition.

    //TODO And if inputName has less than two character?

    if ( valueName == "" || regName.test( valueName ) )
    {
        console.log( "Please enter your name properly." );
        console.log(valueName);
        // inputName.focus();
        return false;
    } 

    if ( valueEmail == "" || !regEmail.test( valueEmail ) )
    {
        console.log( "Please enter a valid e-mail address." );
        console.log(`valueEmail = ${valueEmail}`);
        // inputEmail.focus();
        return false;
    }

    if ( valueMessage == "" )
    {

        console.log( "Please write a valid message" );
        // inputMessage.focus();
        return false;
    }

    return ( true );

}

const realName = "eleanor";
const regexName = /\d+$/g; 
const resultRealName = regexName.test(realName); 
console.log(`resultRealName = ${resultRealName}`); // resultRealName = false

const badName = "44";
const resultBadName = regexName.test(badName);
console.log(`resultBadName = ${resultBadName}`); // resultRealName = true

const realEmail = "eleanor.mears@gmail.com";
const regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g; 
const resultRealEmail = !regexEmail.test(realEmail);
console.log(`resultRealEmail = ${resultRealEmail}`);

const badEmail = "eleanor.mears@gmail";
const resultBadEmail = !regexEmail.test(badEmail);
console.log(`resultBadEmail = ${resultBadEmail}`);

const badMessage = "";
const resultBadMessage = function () {
    if (badMessage == "") {
    console.log("badMessage is not a valid message");
} else {
    console.log("badMessage is a valid message");
};
}
resultBadMessage()