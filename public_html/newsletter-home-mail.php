<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/vendor/autoload.php';

//Create an instance; passing true enables exceptions
$mail = new PHPMailer(true);

$fromname= "Amvion Labs";
//$to = $emailid;
//$to="jeyamravip@gmail.com";
$to="webdeveloper1@amvionlabs.com";

$email=$_POST['email'];


$sub = "amvion labs";
//$mailcc="dineshuk88@gmail.com";


$username="webdeveloper1@amvionlabs.com";
$password="Amvion.321";

//$to="jeyamravip@gmail.com";   

$mailtxt='<table align="center" border="1" cellspacing="3" cellpadding="3" width="100%" style="background:#f5f5f5; color: black; margin-top:10px; border:1px solid #e8e8e8; -moz-border-radius:7px; -webkit-border-radius: 7px; -khtml-border-radius: 7px; border-radius: 7px;">
<tbody>
<tr>
<td colspan="2" style="font-weight:bold;text-align:center;font-size:17px;">Amvion Client Details</td>

<tr>
<td style="width:250px;">Email: </td> <td>'. $email.'</td>
</tr>


<tr>
    <td colspan="2">
<br/><br/>
    
</tbody>
</table>
';


$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug  = 0; 
$mail->Host = 'smtp.hostinger.com';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username='webdeveloper1@amvionlabs.com';
$mail->Password='Amvion.321';
#jidj putr slzp wpdi
$mail->FromName = "From Home page Subscription";

$mail->addAddress($to);
$mail->isHTML(true);    
$mail->addAddress($to);
$mail->addReplyTo($email, $name);

// Adding CC recipient(s)
$mailcc = "";
$mail->AddCC($mailcc);

$mail->Subject = "Email Subscription Sucessfull !!!";
$mail->Body=$mailtxt;

if (!$mail->send()) {
    echo '<script>alert("Email could not be sent. Please try again later.");</script>';
} else {
    echo '<script>alert("Your Message sent successfully. We will get back soon..!");</script>';
    header("location: thank-you.php");
}
?>