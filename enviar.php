<?php
$destinatario = 'edsunadrian@gmail.com';
echo "Hello world!";

$nombre = $_POST['usuario'];
$asunto = $_POST['subject'];
$mensaje = $_POST['message'];
$correo = $_POST['email'];

$header = "Enviado por Edinsson Melo";

mail($destinatario,$asunto, $mensaje,$header);
echo "<script>alert("El correo fue enviado correctamente.")</script>"
echo "<script>setTimeout(\"location.href='contacto.html'\",1000)</script>"
?>