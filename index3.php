<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<title>mail send</title>
</head>
<body>
<br>
<br>
<div class="container">
<h2 class="text-align:center">Send Email from localhost server through PHPMailer</h2>
	<form action="" method="POST">
	    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">To</label>
  <input type="email" name="mail_to" class="form-control" id="exampleFormControlInput1" placeholder="selim@gmail.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Subject</label>
  <input type="text" name="mail_sub" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Subject">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea name="mail_msg" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write's your on mind."></textarea>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
	</form>
    </div>
</body>
</html>

<?php
// All Error Reporting Enabled
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
error_reporting(0);

$mailto=$_POST['mail_to'];
$mailsub=$_POST['mail_sub'];
$mailmsg=$_POST['mail_msg'];


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);


    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'selimrezaswadhin@gmail.com';                     //SMTP username
    $mail->Password   = '12101989';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('selimrezaswadhin@gmail.com', 'web developer Selim');
    $mail->addAddress($mailto, 'The meaning of life is programming');     //Add a recipient
  
    //Attachments

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $mailsub;
    $mail->Body    = $mailmsg;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

   if($mail->send()){
    echo '<h3 style="color:green">Hi Change Selim Message has been sent</h3>';
} else {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>