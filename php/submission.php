<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Validation Contact Form</title>
    <link rel="stylesheet" href="../css/foundation.css" />

  </head>
  <body>
<?php

  // Setup Variables
  $name = $_POST["name"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $selectionBox = $_POST["selectionBox"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];
  $hQuestion = $_POST["hQuestion"];

  $email_from = "noreply@stereocrate.com";
  $email_subject = "New Form Submission";
  $email_body = "You have received a new message from the user $name.\n".
                "You can call them back at $phone.\n".
                "They have heard about you from $selectionBox.\n".
                "It is regarding $subject.\n".
                    "Here is the message:\n $message\n".
                "Their answer for the human test was $hQuestion\n".

  $to = "yourname@yourdomain.com"; // Your Email
  $headers = "From: $email \r\n"; // Visitor's Email
  $headers .= "Reply-To: $email \r\n";

  mail ($to, $email_subject, $email_body, $headers);
?>
<div class="row">
  <div class="small-12 columns">
<h3>Thank you, Your message have been sent.</h3>
  </div>
</div>
<script src="../js/vendor/jquery.js"></script>
<script src="../js/foundation.min.js"></script>
<script>
  $(document).foundation();
</script>
</body>
</html>
