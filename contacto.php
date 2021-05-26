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
        	<h1>Contactanos</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Contáctenos</h2>
    <form id="formulario" method="POST" action="enviar_mail.php">
			
				<input type="text" placeholder="Nombre*" name="nombre" required maxlength="30">
				<input type="text" placeholder="Apellido*" name="apellido" required maxlength="40">
                <input type="number" min="14" max="90" name="edad" placeholder="Edad*" required>
                <input type="email" placeholder="Email*" name="correo" required maxlength="50">               
                <select name="motivo"><option hidden selected>Motivo de consulta</option><option>Reclamo por servicio</option><option>Presupuesto de servicio</option><option>Consultas generales</option></select>
				<textarea name="consulta" rows="12" placeholder="Su contulta:" cols="30" required></textarea>
				<input type="submit" value="Enviar consulta">
			
		</form>

    
        <?php
            if(isset ($_GET['sended'])){
                echo "<h3>¡Su consulta se envió correctamente!</h3>";
            }   else {                      
        
			    echo "<h4>Los campos marcados con (*) son obligatorios.</h4>";
		    
            }?>   
   
    </section>

<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>