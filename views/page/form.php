<h3>FORM</h3>

<!-- Launch the validateForm function (form.js) when the user clicks the submit button -->
<form method="POST" id="contact__form" name="contact_form" class="form" action="#" method="POST">
    <div class="form__field">
        <label for="full-name" class="form__label">Name:</label>
        <input type="text" class="form__input" name="full-name" id="full-name" placeholder="e.g. Anna Brown" value="">
        <small></small>

        <!-- generates the correct error message if needed -->
        <span class="error"><?php echo $nameErr; ?></span>


    </div>
    <div class="form__field">
        <label for="email" class="form__label">Email:</label>
        <input type="email" name="email" id="email" class="form__input" placeholder="name@email.com">
        <small></small>

        <span class="error"><?php echo $emailErr; ?></span>

    </div>
    <div class="form__field">
        <label for="message" class="form__label">Message:</label>
        <textarea class="form__textarea" name="message" id="message" rows="3" placeholder="What would you like to discuss?"></textarea>
        <small></small>

        <!-- generates the correct error message if needed -->
        <span class="error"><?php echo $messageErr; ?></span>

    </div>
    <div class="button">
        <button type="submit" class="button__body button__body--form">Submit</button>

    </div>
</form>

<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>

<?php
echo "<h5>Your Input:</h5>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $message;
echo "<br>";


$sender = 'eleanor.mears@gmail.com';
$recipient = 'info@eleanor-mears.com';

$subject = "php mail test";
$message = "php test message";
$headers = 'From:' . $sender;

if (mail($recipient, $subject, $message, $headers))
{
    echo "Message accepted";
}
else
{
    echo "Error: Message not accepted";
}

?>

<?PHP

?>

</div>