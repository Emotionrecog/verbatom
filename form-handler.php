<?php
$name=$_Post['name'];
$visitor_email=$_Post['email'];
$message=$_Post['message'];

$email_from='info@verbatom.herokuapp.com';
$email_subject='New website query';
$email_body="User Name: $name.\n".
            "User Email: $email.\n".
            "User Message: $message.\n";

$to='onelasttimejaa02@gmail.com';
$headers="From: $email_from \r\n";
$headers.="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");
?>
