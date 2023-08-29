<?php
// define variables and set to empty values
// The error variables below will hold error messages for the required fields.
$nameErr = $emailErr = $messageErr = "";
$name = $email = $message = "";
// Name	Required. + Must only contain letters and whitespace
// E-mail Required. + Must contain a valid email address (with @ and .)
// Message Required. 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["fullname"])) {
        // check field isn't empty
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["fullname"]);
        // check if name only contains letters and whitespace
        // The preg_match() function searches a string for pattern, returning true if the pattern exists, and false otherwise.
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["message"])) {
        $nameErr = "Name is required";
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>



                                                                   

<!-- Launch the validateForm function (form.js) when the user clicks the submit button -->
<form method="POST" id="contact__form" name="contact_form" class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <div class="form__field">
        <label for="full-name" class="form__label">Name:</label>
        <input type="text" class="form__input" name="full-name" id="full-name" placeholder="e.g. Anna Brown" value="">
        <small></small>

        <!-- generates the correct error message if needed -->
        <!-- <span class="error">* <?php echo $nameErr; ?></span>  -->


    </div>
    <div class="form__field">
        <label for="email" class="form__label">Email:</label>
        <input input type="email" name="email" id="email" class="form__input" placeholder="name@email.com">
        <small></small>

        <!-- <span class="error">* <?php echo $emailErr; ?></span>  -->

    </div>
    <div class="form__field">
        <label for="message" class="form__label">Message:</label>
        <textarea class="form__textarea" name="message" id="message" rows="3" placeholder="What would you like to discuss?"></textarea>
        <small></small>

        <!-- generates the correct error message if needed -->
        <!-- <span class="error">* <?php echo $messageErr; ?></span> -->

    </div>
    <div class="button">
        <button type="submit" class="button__body button__body--form">Submit</button>

    </div>
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $message;
?>
