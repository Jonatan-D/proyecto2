<?php

include('conexion2.php');

$usuario = $_POST ['usuario'];
$pass = $_POST['pass'];

$consulta = mysqli_query ($base_de_datos, "SELECT usuario,clave from usuarios WHERE usuario = '$usuario' and clave = '$pass'");

// Sentencia para evitar que se siga ejecutando si falla la consulta
if(!$consulta){ 
     
   echo mysqli_error($mysqli);
   
   exit;

   } 
     
// Sentencia de validacion de datos
if($user = mysqli_fetch_assoc($consulta)) {
 header("Location: clientes.php?correcto");

  echo "el usuario y la pwd son correctas";
} else {
    header("Location: clientes.php?error");
        
}

?>