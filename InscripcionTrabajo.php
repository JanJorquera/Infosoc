<?php 
include 'conexiones.php';
include 'header2.0.php';
$ofnumero = 1; //Se debe implementar la lógica para obtener el número de oferta.

$query = "SELECT saludo, deschuerto, sector, desctrabajo, detrabajo, lugartrabajo, fechainicio, telcontacto FROM antecofertas WHERE ofnumero = :ofnumero";
$statement = $conn->prepare($query);
$statement->bindParam(':ofnumero', $ofnumero, PDO::PARAM_INT);
$statement->execute();
$result = $statement->fetch(PDO::FETCH_ASSOC);
?>

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
                <h4 class="card-title">Oferta numero <?php echo $ofnumero;?></h4>
                <p class="card-text"><?php echo $result['saludo'];?></p>
                <form method="POST" action="InscripcionTrabajo.php"> <!-- Reemplaza 'tu_archivo_php.php' con la ruta correcta de tu archivo PHP -->
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Empresa/Huerto: <?php echo $result['deschuerto'];?></li>
                    <li class="list-group-item">Sector: <?php echo $result['sector'];?></li>
                    <li class="list-group-item">Tipo de Trabajo: <?php echo $result['desctrabajo'];?></li>
                    <li class="list-group-item">Detalle del trabajo: <?php echo $result['detrabajo'];?></li>
                    <li class="list-group-item">Lugar de trabajo: <?php echo $result['lugartrabajo'];?></li>
                    <li class="list-group-item">Telefono contacto: <?php echo $result['telcontacto'];?></li>
                    <li class="list-group-item">
                        <label for="runtrabajador">Run Trabajador:</label>
                        <input type="text" id="runtrabajador" name="runtrabajador">
                    </li>
                    <li class="list-group-item">
                        <label for="runpersonainscribe">Run Persona que inscribe:</label>
                        <input type="text" id="runpersonainscribe" name="runpersonainscribe">
                    </li>
                </ul>
                <button class="btn btn-primary btn-block" name="Postular" value="Postular" type="submit">Postular</button>
                </form>
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Postular'])) {
                    $runtrabajador = $_POST['runtrabajador'];
                    $runqueinscribe = $_POST['runpersonainscribe'];
                    $fechainscripcion = date("Y-m-d");
                    $horainscripcion = date('H:i:s');

                    // Verificar si existe una fila en la tabla regtrabajadores que cumple con las condiciones
                    $consultaRegTrabajadores = "SELECT COUNT(*) AS count FROM regtrabajadores WHERE runtrabajador = :runtrabajador";
                    $stmt = $conn->prepare($consultaRegTrabajadores);
                    $stmt->bindParam(':runtrabajador', $runtrabajador, PDO::PARAM_STR);
                    $stmt->execute();
                    $resultRegTrabajadores = $stmt->fetch(PDO::FETCH_ASSOC);

                    $consultaInstrabajo = "SELECT COUNT(*) AS count FROM instrabajo WHERE ofnumero = :ofnumero AND runtrabajador = :runtrabajador";
                    $stmt = $conn->prepare($consultaInstrabajo);
                    $stmt->bindParam(':ofnumero', $ofnumero, PDO::PARAM_INT);
                    $stmt->bindParam(':runtrabajador', $runtrabajador, PDO::PARAM_STR);
                    $stmt->execute();
                    $resultInstrabajo = $stmt->fetch(PDO::FETCH_ASSOC);

                    if ($resultRegTrabajadores['count'] > 0) {
                        if ($resultInstrabajo['count'] <= 0) {
                            // Consulta SQL para obtener el máximo nroinscripcion
                            $consultaMaxNroInscripcion = "SELECT MAX(nroinsc) AS max_nroinscripcion FROM instrabajo WHERE ofnumero = :ofnumero";

                            // Preparar la consulta
                            $stmt = $conn->prepare($consultaMaxNroInscripcion);

                            // Vincular los parámetros con los valores
                            $stmt->bindParam(':ofnumero', $ofnumero, PDO::PARAM_STR);
                            $stmt->execute();
                            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
                            
                            if ($resultado !== false && isset($resultado['max_nroinscripcion'])) {
                                $maxNroInscripcion = $resultado['max_nroinscripcion'];
                                $nroinscripcion = $maxNroInscripcion + 1;
                            } else {
                                // Si no se encontraron resultados, asigna 1 a $nroinscripcion
                                $nroinscripcion = 1;
                            }

                            // Consulta SQL para insertar los datos en la tabla instrabajo
                            $consultaInsert = "INSERT INTO instrabajo (runtrabajador, runinscribe, ofnumero, fechainsc, horainsc, nroinsc) VALUES (:runtrabajador, :runqueinscribe, :ofnumero, :fechaincripcion, :horainscripcion, :nroinscripcion)";

                            // Preparar la consulta
                            $stmt = $conn->prepare($consultaInsert);

                            // Vincular los parámetros con los valores
                            $stmt->bindParam(':runtrabajador', $runtrabajador);
                            $stmt->bindParam(':runqueinscribe', $runqueinscribe);
                            $stmt->bindParam(':ofnumero', $ofnumero);
                            $stmt->bindParam(':fechaincripcion', $fechainscripcion);
                            $stmt->bindParam(':horainscripcion', $horainscripcion);
                            $stmt->bindParam(':nroinscripcion', $nroinscripcion);
                            $stmt->execute();
                            echo 'Postulación exitosa.';
                        } else {
                            echo 'Ya postulaste a esta oferta.';
                        }
                    } else {
                        header("Location: Registro.php");
                        exit();
                    }
                }
                ?>
                <div style="height: 10px;"></div>
            </div>
        </div>
    </div>
</div>
</div>

</body>
</html>