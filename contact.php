<?php
$name=$_post['Name'];
$visitor_email =$_post['email'];

$msg=$_post['msg'];

$email_from='vivekjoshithejack@gmail.com';

$email_subject="New msg";

$email_body="User Name: $Name. \n",
            "User Mail:$email. \n",
            "User message: $msg.\n";

$to="vivekjoshi681996@gmail.com";
$headers="From: $email_from \n";
$headers="Reply To:$visitor_email \n";
mail($to,$email_subject,$email_body,$headers);
header("location: contact.html");
?>
