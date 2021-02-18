<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_phone = $_POST['cf_phone'];
$field_comments = $_POST['cf_comments'];
$mail_to = 'info@mindhealthservices.org';
$subject = 'Website Enquiry Received  '.$field_name;
$body_message ="From: $field_name
Email Address: $field_email
Phone: $field_phone
Message: $field_comments";


$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n"; 

$mail_status = mail($mail_to, $subject, $body_message, $headers);
header ('Location: http://www.mindhealthservices.org/thanks.html');

exit ();
?>