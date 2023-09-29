<?php 
#include 'conexion.php';
?>

<!--  id, saludo (mensaje a mostrar ej "hola trabajo mañana"), empresa, sector (lugar), tipotrabajo,
detalletrabajo, lugar, tipotrabajador, periodopago, fechainicio, duracion, jornada, horario, colacion, 
valorpagar, tipopago, formapago, mediopago, observaciones, nropersonas requeridas, experiencia requerida --> 

<!DOCTYPE html>
<html lang="es"> 
    <head>

        <link rel="stylesheet" href="estilo.css"/> <!-- fondo -->
        <link rel="stylesheet" href="index.css"/> <!-- fondo -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    </head>




    <body>
  
        <h1> Elegir profesion (cambiar) </h1>
        <!-- temporero / transportista / constratista -->
        <div class="d-flex flex-column justify-content-center align-items-center" style="height: 80vh;">
                <button class="btn btn-primary mb-3 bloque-index" type="button">Temporero</button>

                <a href="http://localhost/infosoc/pagina2.php" class="btn btn-primary mb-3 bloque-index" role="button">Temporero</a>

                <a href="http://localhost/infosoc/pagina2.php" class="btn btn-primary mb-3 bloque-index text-center align-middle mx-auto"  role="button">Transportista</a>

                <a href="http://localhost/infosoc/login_contratista.php" class="btn btn-primary mb-3 bloque-index centrar-boton" role="button">Contratista</a>

        </div>
    </body>
</html>






