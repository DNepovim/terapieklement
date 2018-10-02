<?php
//require_once('class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
require 'PHPMailerAutoload.php';

$fromname = $_POST['jmeno'];
$body =$_POST['zprava'];
$frommail = $_POST['mail'];
$toname = 'Martin Klement';
$toemail = 'terapieklement@gmail.com';
$toemailcopy = 'nik@skaut.cz';

$mail             = new PHPMailer(); // defaults to using php "mail()"

//$body             = file_get_contents('contents.html');
//$body             = eregi_replace("[\]",'',$body);

$mail->SMTPDebug    =   2;
$mail->CharSet      =   'UTF-8';

$mail->SetFrom          ($frommail, $fromname);
$mail->AddAddress       ($toemail, $toname);
$mail->AddCC            ($toemailcopy);

$mail->Subject      =   "Zpráva z webu terapiklement.cz od ".$fromname;
$mail->Body         =   $body;

if(!$mail->Send()) {
    echo '<p class="negative">Zprávu se nepodařilo odeslat.<br>Zkuste to znovu, nebo mi napište na <a href="mailto:terapieklement@email.cz">terapieklement@email.cz</a>.</p> ';
} else {
    echo '<p class="positive">Děkuji, brzy se vám ozvu.</p>';
}

?>
