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
            <H1>DESTACADOS</H1>
        	
        </div> 
        
    </header>
    <section id="contenido">

    <div id="cuerpo_noticia">
        <?php 
         $noticia = array (
             array('Consejos muy simples para lidiar con la 
         fatiga que nos generan las pantallas','Según un reciente estudio publicado en la revista American Journal 
         of Ophthalmology, el exceso de exposición a las pantallas digitales
          y las actividades al aire libre limitadas están asociadas a la aparición y la 
          progresión de la miopía y podrían agravarse durante y posteriormente al período
           de la pandemia. Incluso algunos oftalmólogos advierten que la fatiga visual digital en la pandemia
            de la covid-19 es una amenaza emergente para la salud pública.','vista.jpg'),
             array('Para muchos trabajadores, volver a trabajar en la oficina no es una opción.',
             'Si algo está claro sobre el trabajo remoto es que mucha gente lo prefiere y no quiere que sus jefes se lo quiten.
             Cuando la pandemia obligó a los empleados a quedarse en sus casas y les impidió pasar tiempo de manera presencial con sus colegas, casi de inmediato muchos se dieron cuenta de que preferían el teletrabajo en vez de las rutinas y costumbres de la oficina.
             ','nomade.jpg'),
             array('Juntos por el Cambio presentó un proyecto de ley para que la educación sea esencial en la provincia de Buenos Aires',
             'El miércoles que viene los senadores bonaerenses de Juntos por el Cambio van a citar a la comisión de Educación del Senado de la provincia de Buenos Aires para tratar dos proyectos de ley que presentó la oposición que apuntan a asegurar la presencialidad de la educación.',
             'jxc.jpg'),
             array ('Malestar de empresas y profesionales de la salud por las declaraciones de Alberto Fernández: “El sector nunca se relajó”','El Presidente señaló que el sector privado priorizó atender necesidades quirúrgicas que podían esperar. Los médicos iniciaron una campaña en redes sociales con fotos y fuertes críticas al jefe de Estado','doctores.jpg'),
             

         );

         ?>
         <?php
         $longitud = count($noticia);
         for ($i=0; $i< $longitud; $i++) {?> 
             <div class= "noti">
                <h3>
                    <?php echo $noticia [$i][0];?>
                </h3>
                <figure>
                <img src="imagenes/<?php echo $noticia[$i][2];?>">
                </figure>
                <p>
                <?php echo $noticia [$i][1];?>

                </p>
                
             </div>
        <?php     
         }
         ?>



    </div>

    <h2>Noticias</h2>
  
   
    </section>

<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Jonatan Deporte</a></footer>
</section>
</body>
</html>