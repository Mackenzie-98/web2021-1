<?php 
require "PHPMailer/Exception.php";
require "PHPMailer/PHPMailer.php";
require "PHPMailer/SMTP.php";
 
$nombre = $_POST['usuario'];
$asunto = $_POST['subject'];
$mensaje = $_POST['message'];
$correo = $_POST['email'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
$oMail= new PHPMailer();
$oMail->isSMTP();
$oMail->Host="smtp.gmail.com";
$oMail->Port=587;
$oMail->SMTPSecure="tls";
$oMail->SMTPAuth=true;
$oMail->Username="edsunadrian@gmail.com";
$oMail->Password="Garunimo03.";
$oMail->setFrom($correo,$nombre);
$oMail->addAddress($correo,$nombre);
$oMail->Subject=$asunto;
$oMail->msgHTML($mensaje);
 
if(!$oMail->send())
  echo $oMail->ErrorInfo; 
?>