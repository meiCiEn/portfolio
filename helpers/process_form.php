<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = $_POST["name"];
   $email = $_POST["_replyto"];
   $message = $_POST["message"];

   $to = "eleanor.mears@gmail.com";
   $subject = "Contact Form Submission";
   $headers = "From: $email";
   $messageBody = "Name: $name\nEmail: $email\nMessage:\n$message";

   if (mail($to, $subject, $messageBody, $headers)) {
      echo "Your message has been sent successfully.";
   } else {
      echo "There was an error sending your message. Please try again.";
   }
}
?>
