<?php
/* Variables del formulario de registro*/
$nombre_registro = $_POST['nombre'];
$apellido_registro = $_POST['apellido'];
$edad_registro = $_POST['edad'];
$email_registro = $_POST['email'];
$web_registro = $_POST['web'];
$usuario_registro =$_POST['usuario'];
$pass_registro = $_POST['pass'];

/*Variables para responder mail */
$soporte = 'Equipo elearning';
$email_soporte = 'elearning-soporte@gmail.com';
$remitente = "From: $soporte<$email_soporte>";
$asunto_email = "Registro exitoso. Información de la cuenta";
$cuerpo_email ="Bienvenido/a " .$nombre_registro. " gracias por registrarte,
 ahora podes ingresar al sitio con tu usuario y contraseña. n\
Usuario: ".$usuario_registro ."\n  Contraseña: " .$pass_registro ."\n. Saludos cordiales.";

/* mail enviado como autorespuesta con datos de registro*/

@mail($email_registro,$asunto_email,$cuerpo_email,$remitente);

/* Ingreso de información a la base de datos*/

include('conexion2.php');
mysqli_query($base_de_datos,"INSERT INTO usuarios VALUES ('$usuario_registro','$pass_registro',
'$nombre_registro','$apellido_registro','$edad_registro','$email_registro','$web_registro')");




header("Location: clientes.php?ok");




?>