<?php
// Set the recipient email address
// $to = 'manavmaj2001@gmail.com';
$to = 'ayushlanka106@gmail.com';
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$phone = $_POST['phone'];

// Prepare the email headers
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: $email" . "\r\n";

// Compose the email body
$email_body = "
<html>
<head>
  <title>Contact Form Message</title>
</head>
<body>
  <p>Name: $name</p>
  <p>Email: $email</p>
  <p>Phone: $phone</p>
  <p>Subject: $subject</p>
  <p>Message:</p>
  <p>$message</p>
</body>
</html>
";

// Send the email
mail($to, $subject, $email_body, $headers);

// Redirect the user back to the contact page with a success message
header("Location: contact.php?success=1");
exit();
?>
