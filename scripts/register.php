<?php

function generateRandomNumber() {
    $number = rand(0, 999);  // Generate a random number between 0 and 999
    return str_pad($number, 3, '0', STR_PAD_LEFT);  // Pad the number with leading zeros to ensure it's 3 digits
}

$name = $_POST['name'];
$email = $_POST['email'];
$uniqueId = generateRandomNumber();

$name = ucfirst($name);
$email = ucfirst($email);

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;
$mail->Username = "thecodeeventca@gmail.com";
$mail->Password = 'enter-password';


$mail->setFrom($mail->Username, "TheCode Bot");
$mail->addAddress($mail->Username, "TheCode Bot Registration");

$mail->Subject = "Registration Confirmation for " . $name .  ".";
$mail->Body = "$name registered, here are his/her info : 
    name : $name,
    email : $email, 
    ID : $uniqueId
    ";

$mail->send();

$mail->Body = "";
$mail->Subject = "";
$mail->clearAddresses();
$mail->clearAddresses();
$mail->clearAllRecipients();
$mail->clearAttachments();
$mail->clearBCCs();
$mail->clearCCs();
$mail->clearCustomHeaders();


$mail->setFrom($mail->Username, "TheCode Event");
$mail->addAddress($email, $name);

$mail->Subject = "Thank you for registering " . $name . "!";
$mail->Body = "We sucessfully registered you for the awesome 250$ Giveaway. 
Here's your Unique ID : $uniqueId.

Don't forget to grab your ticket on our eventbrite event:
    - https://www.eventbrite.ca/e/afro-spooky-night-tickets-734436408067

We can't wait to se you on saturday 😊!";

$mail->send();

$mail->Body = "";
$mail->Subject = "";
$mail->clearAddresses();
$mail->clearAddresses();
$mail->clearAllRecipients();
$mail->clearAttachments();
$mail->clearBCCs();
$mail->clearCCs();
$mail->clearCustomHeaders();

header("Location: ../thanks-script.php?name=" . urlencode($name));
exit();

?>
