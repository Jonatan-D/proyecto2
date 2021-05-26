<?php
/* Variables del formulario*/
$nombre_formulario = $_POST['nombre'];
$apellido_formulario = $_POST['apellido'];
$edad_formulario = $_POST['edad'];
$email_formulario = $_POST['correo'];
$motivo_formulario = $_POST['motivo'];
$areatexto_formulario = $_POST['consulta'];
/*Variables para responder mail */
$equipo_soporte='Equipo de soporte';
$recibido = "¡Hemos recibido tu consulta!";
$correo_pagina = 'jonatandeporte@gmail.com';
/* mail enviado como autorespuesta confirmando recepcion de consulta */
$remitente_automensaje= "From: $equipo_soporte <$correo_pagina>";
$cuerpo_respuesta = "Estimado/a ".$nombre_formulario." gracias por enviarnos tu consulta, en breve
 nos contactaremos por este medio atendiendo a la misma."."r\n\". Saludos cordiales.";

@mail ($email_formulario,$recibido,$cuerpo_respuesta,$remitente_automensaje);

/* Correo de consulta*/
$cuerpo = "Nombre: ".$nombre_formulario ."r\n\". Apellido: ".$apellido_formulario ."r\n\".Edad: " .$edad_formulario.
"r\n\". Correo electrónico: ".$email_formulario ."r\n\". Motivo del mensaje: ".$motivo_formulario."r\n\".  Mensaje: " .$areatexto_formulario;

$respuesta = "From: $nombre_formulario $apellido_formulario <$email_formulario>";
@mail ("jonatandeporte@gmail.com","Consulta enviada desde sitio web",$cuerpo,$respuesta); 


include('conexion.php');

mysqli_query($datos_db,"INSERT INTO consultas VALUES (DEFAULT, '$nombre_formulario','$apellido_formulario','$edad_formulario','$email_formulario','$motivo_formulario','$areatexto_formulario')");



header("Location: contacto.php?sended");

?>