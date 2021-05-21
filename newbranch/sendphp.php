<?php
 
 if (isset($_POST['submit'])) {
     $to = "alireza.j.lich@gmail.com";
     $from = ""; /** i can't use wampserver :( **/
 
     $subject = $_POST['subject'];
     $message = $_POST['message'];
     $name = $_POST['name'];
     $email = $_POST['email'];
 
     $body = "Name: $name\r\n E-Mail: $email\r\n Message:\r\n $message";
 
 
     $headers = 'From: ' . $from . "\r\n" .
         'Reply-To: ' . $email . "\r\n" .
         'X-Mailer: PHP/' . phpversion();
 
     if (@mail($to, $subject, $body, $headers)) { 
         $message = "Email Sent Successfully!";
     } else {
         $message = "Error: Sending email failed.";
     }
 }
 ?>