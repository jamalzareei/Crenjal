<?php
require_once '../MAIL/class.phpmailer.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output
/*
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'user@example.com';                 // SMTP username
$mail->Password = 'secret';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
*/
$mail->setFrom('jzcs89@gmail.com', 'jamal zareie');
$mail->addAddress('jzcs89@gmail.com', 'jamz');     // Add a recipient
$mail->addAddress('jzcbvvhvhvs89@gmail.com');               // Name is optional
$mail->addReplyTo('info@crenjal.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                       // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
$mail->isHTML(true);           
$mail->isMail();
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}



$to = "jzcs89@gmail.com";
$subject = "موضوع ایمیل";
$message = "متن پیامی که میخوایید ارسال کنید.";
$header = "From:abc@somedomain.com \r\n";
//ارسال ایمیل و برگرداندن وضعیت ارسال که میتونه موفق یا درست و یا ناموق یا غلط  باشه
$retval = mail ($to,$subject,$message,$header);
if( $retval == true ) 
{
    echo "ایمیل با موفقیت ارسال شد...";
}
else
{
    echo "ایمیل ارسال نشد...";
}