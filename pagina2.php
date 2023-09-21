<?php 
#include 'conexion.php';
include 'header2.0.php';
?>

<!--  id, saludo (mensaje a mostrar ej "hola trabajo mañana"), empresa, sector (lugar), tipotrabajo,
detalletrabajo, lugar, tipotrabajador, periodopago, fechainicio, duracion, jornada, horario, colacion, 
valorpagar, tipopago, formapago, mediopago, observaciones, nropersonas requeridas, experiencia requerida --> 

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="estilo.css"/> <!-- fondo -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>
  
<div class= "container">
    <div style="height: 20px;"></div>
    <div class="card border-primary">
    <div class="row g-0">
        <!--
        <div class="col-md-4">
            <img class="card-img-top img-fluid" src="<?php #echo $producto['imagen'] ?>" alt="" style="max-width: 100%;">
        </div>
        -->
        <div class="col-md-8">
            <div class="card-body">
                
                <h4 class="card-title">Oferta numero 1</h4>
                <p class="card-text">Hola necesitamos trabajadores para la empresa tanto en lugar ...</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Empresa: ... </li>
                    <li class="list-group-item">Sector: ... </li>
                    <li class="list-group-item">Descripcion: <?php #echo ?></li>
                    <li class="list-group-item">Fecha inicio: $<?php #echo?></li>
                    <li class="list-group-item">Duracion: $<?php #echo?></li>
                    <li class="list-group-item">Jornada: $<?php #echo?></li>
                    <li class="list-group-item">Valor por noche: $<?php #echo?></li>
                </ul>
                <?php
                if (false){
                    $postulacionStatus = 1;
                } else {
                    $postulacionStatus = 0;
                }
                ?>
                <div style="height: 10px;"></div>
                <form method="POST" action="">
                    <input type="hidden" name="wishlistButton" value="<?php echo $postulacionStatus; ?>">
                    <?php if ($postulacionStatus == 0) { ?>    
                                    <button class="btn btn-primary btn-block" name="Agregar_postulacion" value="Agregar_postulacion" type="submit">Postular</button>
                    <?php } else { ?>
                    <button class="btn btn-primary btn-block" name="Sacar_postulacion" value="Sacar_postulacion" type="submit">Ya postulado</button>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

</body>
</html>






