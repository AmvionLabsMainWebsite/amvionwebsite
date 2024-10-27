<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/vendor/autoload.php';

//Create an instance; passing true enables exceptions
$mail = new PHPMailer(true);

$fromname = "Amvion Labs";
$to = "webdeveloper1@amvionlabs.com";  // Set the correct email address here
$name = $_POST['name'];
$email = $_POST['email'];
$countrycode = $_POST['countrycode'];
$experience = $_POST['experience'];
$designation = $_POST['designation'];
$message = $_POST['message'];
$phone = $_POST['phone'];




$sub = "amvion labs";

// SMTP credentials
$username = "webdeveloper1@amvionlabs.com";  // Enter your SMTP username
$password = "Amvion.321";  // Enter your SMTP password

// Mail message body
$mailtxt = '
<table align="center" border="1" cellspacing="3" cellpadding="3" width="100%" style="background:#f5f5f5; color: black; margin-top:10px; border:1px solid #e8e8e8; border-radius: 7px;">
<tbody>
<tr>
<td colspan="2" style="font-weight:bold;text-align:center;font-size:17px;">Amvion Client Details</td>
</tr>
<tr>
<td style="width:250px;">Name: </td><td>' . $name . '</td>
</tr>
<tr>
<td style="width:250px;">Email: </td><td>' . $email . '</td>
</tr>
<tr>
<td style="width:250px;">Phone Number : </td><td>' . $countrycode . '</td><td>' . $phone . '</td>
</tr>
<tr>
<td style="width:250px;">Experience : </td><td>' . $experience . '</td>
</tr>
<tr>
<td style="width:250px;">Designation : </td><td>' . $designation . '</td>
</tr>
<tr>
<td style="width:250px;">Message : </td><td>' . $message . '</td>
</tr>

</tbody>
</table>
';

// Configuring PHPMailer
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug  = 2; 
$mail->Host = 'smtp.hostinger.com';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = $username;
$mail->Password = $password;

$mail->FromName = $fromname;
$mail->addAddress($to); // Add recipient's email address
$mail->isHTML(true);    
$mail->addReplyTo($email, $name);

$mail->Subject = $sub;
$mail->Body = $mailtxt;

// Sending the email
if (!$mail->send()) {
    echo '<script>alert("Email could not be sent. Please try again later.");</script>';
} else {
    echo '<script>alert("Your message has been sent successfully. We will get back to you soon!");</script>';
    header("location: thank-you.php");
}
?>
