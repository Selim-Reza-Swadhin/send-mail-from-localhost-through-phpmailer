First turn on from your gmail >>
>> Security
>> Less secure app access pane

Then 2nd Step

C:\xampp\php and open the php.ini file.
Find [mail function] by pressing ctrl + f.
Search and pass the following values:

SMTP=smtp.gmail.com
smtp_port=587
//sendmail_from = YourGmailId@gmail.com
sendmail_from = selim.swadhin@gmail.com

sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"
or
sendmail_path = "\"H:\xampp7.4\sendmail\sendmail.exe\" -t"


Then 3rd Step

C:\xampp\sendmail and open the sendmail.ini file.

Find [sendmail] by pressing ctrl + f.
Search and pass the following values

smtp_server=smtp.gmail.com
smtp_port=587 or 25 //use any of them
error_logfile=error.log
debug_logfile=debug.log
//auth_username=YourGmailId@gmail.com
auth_username=selim.swadhin@gmail.com
//auth_password=Your-Gmail-Password
auth_password=1234567

//force_sender=YourGmailId@gmail.com(optional)
force_sender=selim.swadhin@gmail.com



################
PHP Source Code
################

<?php
$to_email = "receipient@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
$headers = "From: sender email";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}

?>