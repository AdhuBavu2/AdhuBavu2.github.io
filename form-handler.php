<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'compostingutah@gmail.com';

$email_subject = 'New form submission';

$email_body = "Username: $name .\n".
                "User email: $visitor_email .\n".
                  "Subject: $subject .\n".
                    "User message: $message .\n"





?>
