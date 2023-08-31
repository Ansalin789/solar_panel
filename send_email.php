<?php

   $to = "ansalinsagar789@gmail.com";
   $subject = "New Customer Submission Form";
   $message = "A new Quotes form has been received.\n\n";
   $message .= "Name: " . $_POST["name"] . "\n";
   $message .= "Phone: " . $_POST["number"] . "\n";
   $message .= "Address: " . $_POST["address"] . "\n";
   $message .= "Subject: " . $_POST["message"];
   $headers = "From: no-reply@example.com";
   mail($to, $subject, $message, $headers);
   header("Location: index.html");

?>