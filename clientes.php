<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
</head>
<body>
<section id="contenedor">
	<header>
    	<nav id="botonera_principal">
        	<ul>
            	<li><a href="index.php">Home</a></li><li><a href="catalogo.php">Catálogo</a></li><li><a href="noticias.php">Noticias</a></li><li><a href="clientes.php">Clientes</a></li><li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </nav>
        <div id="marca">
        	<h1>Clientes</h1>
        </div>
    </header>
    <section id="contenido_clientes">
    
     <!-- Sentencia para que desaparezca el formulario de registro una vez que envíe los datos
    
        Solo quedará el formulario de Logueo.
    -->
        <?php
            if(isset ($_GET['ok'])){
                echo "<h5>¡Registro exitoso! Recibirá un Email con los datos de su registro.</h5>";
            }   else { ?>
        
                 <div id="datos_personales">
                 <h3>Ingresa tu información de registro.</h3>
                 <form action="insertar_usuarios.php" method="POST">
                     <input type="text" placeholder="Nombre*" maxlength="35" name="nombre" required>
                     <input type="text" placeholder="Apellido*" maxlength="35"name="apellido" required>
                     <input type="number" min="18" max="90"placeholder="Edad*" name="edad" required>
                     <input type="email" placeholder="Correo electrónico*" maxlength="50"name="email" required>
                     <input type="text" placeholder="Sitio WEB" maxlength="50" name="web">
                     <h3>Selecciona tu usuario y contraseña.</h3>
                     <input type="text" placeholder="Usuario*" maxlength="20" name="usuario" required>
                     <input type="password" placeholder="Contraseña*" name="pass" required>
                     <input type="submit" value="Registrar">
                     <h5>Los campos marcados con (*) son obligatorios.</h5>
                 </form>
             </div>
			    
                <?php }?>  
  <!-- Sentencias para eliminar el form de logueo si esta validado el usuario. -->
                <?php
        if(isset ($_GET['error'])){?>
         <div id="user_pass">
             <h2>Ingresar</h2>
             <form action="ingresar_usuarios.php" method="POST">
                 <input type="text" placeholder="Usuario" maxlength="20" name="usuario" required>
                 <input type="text" placeholder="Contraseña" name="pass" required>
                 <input type="submit" value="Ingresar">                 
             </form>
             <h4>Usuario o clave incorrecta <br> intenta de nuevo.</h4>
         </div>                      
        
     <?php }            
           if (isset ($_GET['correcto'])){?>

            <div id="validado">
                <p>Usuario validado</p>
            </div>
            
        <?php
        } else {?>
            <div id="user_pass">
            <h2>Ingresar</h2>
            <form action="ingresar_usuarios.php" method="POST">
                <input type="text" placeholder="Usuario" maxlength="20" name="usuario" required>
                <input type="text" placeholder="Contraseña" name="pass" required>
                <input type="submit" value="Ingresar">                
            </form>
        </div>
       <?php }?>
    </div>
    </section>

<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>