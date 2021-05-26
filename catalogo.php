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
        	<h1>Catálogo de productos</h1>
        </div>
    </header>
    <section id="contenido">
    
    
    <nav id="bot_prod">
			<ul>
				<li><a href="catalogo.php?id=sc">Sillón Capri</a></li>
				<li><a href="catalogo.php?id=mi">Mesa Ipanema</a></li>
				<li><a href="catalogo.php?id=bv">Banco Venecia</a></li>
				
			</ul>
		</nav>
        <?php
         if (isset ($_GET['id'])) {
             
           
           switch ($_GET['id']) {
                case 'sc':
                    $producto = 'Sillón Capri';
                    $info= 'Concebida para ser utilizada tanto bajo techo como a la intemperie. La madera de origen brasilera está acabada con un recubrimiento de Resina Polisten que la embellece.';
                    $precio='$345.00';
                    $imagen='sillon1.jpg';
                    break;
                case 'mi':
                    $producto='Mesa Ipanema';
                    $info='Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC y concebida para ser utilizada tanto bajo techo como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms.';
                    $precio='$500.00';
                    $imagen='ipanema.jpg';
                    break; 
                case 'bv':
                    $producto='Banco Venecia';
                    $info='Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC (SWCOC-091) y concebida para ser utilizada tanto bajo techado como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms.';
                    $precio='$450.00';
                    $imagen='venecia.jpg';
                    break;       
                
                      }
                          
        ?>
    <div id=cont_catalogo>
    <h3><?php echo $producto; ?></h3>
    <img src= "imagenes/<?php echo $imagen; ?>" >
    <p><b>Descripción:</b> <span><?php echo $info; ?></span></p>
    <p id="parrafo_precio">Precio: <span><?php echo $precio; ?></span> </p>
    </div>
                   <?php } else {?>
                       <h2>Selecciona un producto</h2>
                   <?php } ?> 
    </section>

<footer>
Desarrollado por <a href="http://www.elearning-total.com" target="_new">Jonatan Deporte</a></footer>
</section>
</body>
</html>