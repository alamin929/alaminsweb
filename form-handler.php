<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $POST['subject'];
$messege = $POST['messege'];

$email_form = 'alaminbinashadali777@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Messege: $messege.\n"

$to = 'alaminbinashadali777@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-to: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("location: Contact.html");

?>