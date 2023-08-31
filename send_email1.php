<?php

   $to = "ansalinsagar789@gmail.com";
   $subject = "New Customer Submission Form";
   $message = "A new Quotes form has been received.\n\n";
   $message .= "Name: " . $_POST["name"] . "\n";
   $message .= "Email: " . $_POST["email"] . "\n";
   $message .= "Phone: " . $_POST["number"] . "\n";
   $message .= "Message: " . $_POST["message"] . "\n";
   $message .= "Subject: " . $_POST["send"];
   $headers = "From: no-reply@example.com";
   mail($to, $subject, $message, $headers);
   header("Location: contact.html");

?>