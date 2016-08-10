<?php

// Get variables from the contact form
$fName = $_POST['name'];
$fEmail = $_POST['email'];
$fPhone = $_POST['phone'];
$fMessage = $_POST['message'];


// Validate email address
if (!filter_var($fEmail, FILTER_VALIDATE_EMAIL))
{
    $errors = "This is not a valid email address.";
}

// Make sure none of the fields are empty
if (empty($fName) || empty($fEmail) || empty($fPhone) || empty($fMessage))
{
     $errors = "All fields must be filled out.";
}


// If there are no errors, finish preparing, and send email
if(!isset($errors))
{
// Define Variables for who to sent the email to, and the subject
$to = 'jordan.widdison@gmail.com';
$subject = 'New message sent via jordanwiddison.com from ' . $fName;

// Define message text in one variable
$email_message = 'Here is your message from ' . $fName . ":\n\n" .
                  'Email Address: ' . $fEmail . "\n\n" .
                  'Phone Number: ' . $fPhone . "\n\n" .
                  'Message: ' . "\n\n" . $fMessage;

// Define headers
$headers = "From: jordan@widdisonturbine.com\r\n";
$headers .= "Reply-To: $fEmail";

// Send email using PHP's mail() function
mail($to,$subject,$email_message,$headers);

   ?>
      <!DOCTYPE html>
      <html>
         <head>
            <title>Redirect</title>
         </head>
      <body>
         <meta http-equiv="refresh" content="0; url=success">
      </body>
      </html>
   <?php
}
else
{
   ?>
      <!DOCTYPE html>
      <html>
         <head>
            <title>Redirect</title>
         </head>
      <body>
         <meta http-equiv="refresh" content="0; url=oops">
      </body>
      </html>
   <?php
}
?>
