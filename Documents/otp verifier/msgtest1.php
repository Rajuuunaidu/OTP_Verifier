<?php
function sendsms($cemail,$otp)
{
require("PHPMailer_5.2.4/class.phpmailer.php");

$mail = new PHPMailer();
$mail->IsSMTP();
//Enable SMTP debugging. 
$mail->SMTPDebug = 3;   
$mail->From = "rajuuu567@gmail.com";
$mail->FromName = "raju naidu";
                            
//Set PHPMailer to use SMTP.           
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = "tls"; 
$mail->Port = 587;                                   
 $mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "rajuuu567@gmail.com";                 
$mail->Password = "rajunaidu567!";                           
//If SMTP requires TLS encryption then set it
                      
//Set TCP port to connect to 


$mail->addAddress("$cemail", "broader insight");

$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>$otp</i>";
$mail->AltBody = " testing  for  otp";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}
}
?>