<?php


// define variables and set to empty values
// The error variables below will hold error messages for the required fields.
$nameErr = $emailErr = $messageErr = "";
$name = $email = $message = "";
$myemail = 'eleanor.mears@gmail.com';

// Name	Required. + Must only contain letters and whitespace
// E-mail Required. + Must contain a valid email address (with @ and .)
// Message Required. 


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["full-name"])) {
        // check field isn't empty
        $nameErr = "Please write your name";
    } else {
        $name = test_input($_POST["full-name"]);

        // check if name only contains letters and whitespace
        // The preg_match() function searches a string for pattern, 
        // returning true if the pattern exists, and false otherwise.
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
        
    }

    if (empty($_POST["email"])) {
        $emailErr = "Please provide an email address";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["message"])) {
        $messageErr = "Please leave a message";
    } else {
        $message = test_input($_POST["message"]);
    }

//     $to = "eleanor.mears@gmail.com";
//     $subject = "This is the subject line";

//     // Message = user entered message
//     $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;

//     $headers = "From: noreply@demosite.com" . "\r\n" .
//             "CC: somebodyelse@example.com";
// if($email != NULL) {
//     mail($to, $subject, $txt, $headers);
// }



}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



include("views/page/form.php");

?>