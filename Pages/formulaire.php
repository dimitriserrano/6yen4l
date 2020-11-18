<?php
ini_set("SMTP","smtp.gmail.com");
ini_set('sendmail_from', 'celian.frasca@gmail.com');
ini_set("smtp_port","465");
     $to      = 'celian.frasca@gmail;com';
     $subject = 'le sujet';
     $message = 'Bonjour !';
     $headers = 'From: webmaster@example.com' . "\r\n" .
     'Reply-To: webmaster@example.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $subject, $message, $headers);
 ?>