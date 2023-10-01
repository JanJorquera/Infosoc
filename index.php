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

    <style>
            .boton {
            text-decoration: none; /* Eliminar subrayado de enlaces */
            color: white; /* Color de texto para enlaces */
            display: inline-block;
            padding: 30px 100px; /* Ajusta el relleno según tus preferencias */
            /*width: 100px; /* Ajusta el relleno según tus preferencias */
            /*height: 20px; /* Ajusta el relleno según tus preferencias */
            background-color: #007BFF; /* Cambia el color de fondo a tu elección */
            color: #fff; /* Cambia el color del texto a tu elección */
            text-decoration: none;
            border: none;
            border-radius: 5px; /* Agrega esquinas redondeadas si lo deseas */
            cursor: pointer;
            font-size: 150%;
            
        }

        .boton:hover, .boton:focus {
            text-decoration: none; /* Elimina el subrayado en el estado hover y focus */
            background-color: #0056b3; /* Cambia el color de fondo al pasar el cursor sobre el botón */
            color: #fff; /* Cambia el color del texto al pasar el cursor sobre el botón */
        }

        nav a {
            text-decoration: none; /* Eliminar subrayado de enlaces */
            color: white; /* Color de texto para enlaces */
        }
        
    </style>

    <body>
  
        <h1> Elegir profesion (cambiar) </h1>
        <!-- temporero / transportista / constratista -->
        <div class="d-flex flex-column justify-content-center align-items-center" style="height: 80vh;">
            <a href="oferta_temporero.php" class="boton mb-3">  Temporero  </a>
            <a href="" class="boton mb-3">Transportista</a>
            <a href="login_contratista.php" class="boton mb-3"> Contratista </a>
        </div>
    </body>
</html>
