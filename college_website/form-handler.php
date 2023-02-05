<?php 

$name=$_POST['name']
$visitors_email=$_POST['email']
$subject=$_POST['subject']
$message=$_POST['message']

// our domain name
$email_from="xyz.com"
$email_subject="New form submission"
$email_body="user name: $name.\n".
             "user email: $visitors_email.\n".
             "subject: $subject.\n".
             "user message: $message.\n".

            //  to receive data in our mail
            $to="sfhll@gmail.com";
            $headers="From: $email_from \r\n";
            $headers="Reply-To: $Visitors_email \r\n"

            mail($to, $email_subject,$email_body,$headers);
            header("Location: Contact.html")
?>