<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = "info@cactusdigitalmedia.com";
  $subject = "New Contact Form Submission";
  $body = "From: $name\nEmail: $email\nMessage: $message";

  if (mail($to, $subject, $body)) {
    echo "Thank you for your message!";
  } else {
    echo "Error: Something went wrong. Please try again later.";
  }
}
?>
