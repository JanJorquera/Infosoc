<?php
require_once 'conexiones.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registros</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }
    .titulo-centrado {
        text-align: center;
        margin-bottom: 20px;
    }
    form {
        margin: auto;
        max-width: 600px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }
    input[type="text"],
    input[type="tel"],
    input[type="date"],
    input[type="number"],
    select,
    textarea {
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    input[type="submit"] {
        background-color: #007BFF;
        color: white;
        padding: 14px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>
    <script>
        function toggleDetallesJubilacion() {
            var checkBox = document.getElementById("jubilado");
            var textArea = document.getElementById("detalles_jubilacion");
            var label = document.getElementById("label_detalles_jubilacion");
            
            if (checkBox.checked == true){
                textArea.style.display = "block";
                label.style.display = "block";
            } else {
                textArea.style.display = "none";
                label.style.display = "none";
            }
        }
    </script>
</head>
<body>
<h1 class="titulo-centrado">Formulario de Registro de Trabajadores</h1>
<form action="Registro.php" method="post" enctype="multipart/form-data">

    <label for="rut">Rut:</label>
    <input type="text" id="rut" name="rut" required><br>
    
    <label for="nombre1">Primer Nombre:</label>
    <input type="text" id="nombre1" name="nombre1" required><br>

    <label for="nombre2">Segundo Nombre:</label>
    <input type="text" id="nombre2" name="nombre2" required><br>

    <label for="apellido1">Apellido Paterno:</label>
    <input type="text" id="apellido1" name="apellido1" required><br>

    <label for="apellido2">Apellido Materno:</label>
    <input type="text" id="apellido2" name="apellido2" required><br>

    <label for="fechanacimiento">Fecha de Nacimiento:</label>
    <input type="date" id="fechanacimiento" name="fechanacimiento" required><br>

    <label for="direccion">Direccion:</label>
    <input type="text" id="direccion" name="direccion" required><br>

    <label for="sector">Sector:</label>
    <input type="text" id="sector" name="sector" required><br>

    <label for="ciudad">Ciudad:</label>
    <input type="text" id="ciudad" name="ciudad" required><br>

    <label for="telefono">Teléfono:</label>
    <input type="tel" id="telefono" name="telefono" required><br>

    <label for="whatsapp">WhatsApp:</label>
    <input type="tel" id="whatsapp" name="whatsapp" required><br>

    <label for="sistemaprevision">Sistema de Previsión:</label>
    <select id="sistemaprevision" name="sistemaprevision" required>
        <option value="AFP CAPITAL">AFP CAPITAL</option>
        <option value="AFP CUPRUM">AFP CUPRUM</option>
        <option value="AFP HABITAT">AFP HABITAT</option>
        <option value="AFP MODELO"> AFP MODELO</option>
        <option value="AFP PLANVITAL">AFP PLANVITAL</option>
        <option value="AFP PROVIDA">AFP PROVIDA</option>
        <option value="AFP UNO">AFP UNO</option>
        <option value="AFP SISTEMA">AFP SISTEMA</option>
    </select><br>

    <label for="sistemasalud">Sistema de Salud:</label>
    <select id="sistemasalud" name="sistemasalud" required>
        <option value="Fonasa">Fonasa</option>
        <option value="Isapre">Isapre</option>
    </select><br>
    
    <label for="jubilado">¿Está jubilado?</label>
    <input type="checkbox" id="jubilado" name="jubilado" value="1" onclick="toggleDetallesJubilacion()" ><br>

    <label id="label_detalles_jubilacion" for="detalles_jubilacion" style="display:none;">Detalles de Jubilación (omitir este campo si lo desea):</label>
    <textarea id="detalles_jubilacion" name="detalles_jubilacion" rows="4" cols="50" style="display:none;"></textarea><br>

    <label for="anios_experiencia">Años de Experiencia:</label>
    <input type="number" id="anios_experiencia" name="anios_experiencia" required><br>

    <label for="detalles_experiencia">Detalles de Experiencia (omitir este campo si lo desea):</label>
    <textarea id="detalles_experiencia" name="detalles_experiencia" rows="4" cols="50"></textarea><br>

    <label for="foto1">Cédula identidad cara 1/Visa cara 1:</label>
    <input type="file" id="foto1" name="foto1" required><br>

    <label for="foto2">Cédula identidad cara 2/Visa cara 2:</label>
    <input type="file" id="foto2" name="foto2" required><br>

    <input type="submit" value="Enviar" name="enviar">
</form>

<?php
if (isset($_POST['enviar'])) {
    try {
        $rut = $_POST['rut'];
        $nombre1 = $_POST['nombre1'];
        $nombre2 = $_POST['nombre2'];
        $apellido1 = $_POST['apellido1'];
        $apellido2 = $_POST['apellido2'];
        $fecha = $_POST['fechanacimiento'];
        $direccion = $_POST['direccion'];
        $sector = $_POST['sector'];
        $ciudad = $_POST['ciudad'];
        $telefono = $_POST['telefono'];
        $whatsapp = $_POST['whatsapp'];
        $sistemaprevision = $_POST['sistemaprevision'];
        $sistemasalud = $_POST['sistemasalud'];
        $jubilacion = isset($_POST['jubilado']) ? $_POST['jubilado'] : 0;
        $detalles_jubilacion = $_POST['detalles_jubilacion'];
        $anios_experiencia = $_POST['anios_experiencia'];
        $detalles_experiencia = $_POST['detalles_experiencia'];
        $foto1 = $_FILES['foto1'];
        $foto2 = $_FILES['foto2'];


        $foto1 = file_get_contents($_FILES['foto1']['tmp_name']);
        $foto2 = file_get_contents($_FILES['foto2']['tmp_name']);




        $sql = "INSERT INTO regtrabajadores (
            run, nombre1, nombre2, apellido1, apellido2, fecha_nacimiento, direccion, 
            sector, ciudad, telefono, prevision, salud, jubilado, detalle, años, 
            detallexp, foto1, foto2
        ) VALUES (
            :rut, :nombre1, :nombre2, :apellido1, :apellido2, :fecha, :direccion,
            :sector, :ciudad, :telefono, :sistemaprevision, :sistemasalud, :jubilacion, 
            :detalles_jubilacion, :anios_experiencia, :detalles_experiencia, :foto1, :foto2
        )";

        $stmt = $conn->prepare($sql);

        // Vincular los parámetros
        $stmt->bindParam(':rut', $rut);
        $stmt->bindParam(':nombre1', $nombre1);
        $stmt->bindParam(':nombre2', $nombre2);
        $stmt->bindParam(':apellido1', $apellido1);
        $stmt->bindParam(':apellido2', $apellido2);
        $stmt->bindParam(':fecha', $fecha);
        $stmt->bindParam(':direccion', $direccion);
        $stmt->bindParam(':sector', $sector);
        $stmt->bindParam(':ciudad', $ciudad);
        $stmt->bindParam(':telefono', $telefono);
        #$stmt->bindParam(':whatsapp', $whatsapp);
        $stmt->bindParam(':sistemaprevision', $sistemaprevision);
        $stmt->bindParam(':sistemasalud', $sistemasalud);
        $stmt->bindParam(':jubilacion', $jubilacion);
        $stmt->bindParam(':detalles_jubilacion', $detalles_jubilacion);
        $stmt->bindParam(':anios_experiencia', $anios_experiencia);
        $stmt->bindParam(':detalles_experiencia', $detalles_experiencia);
        $stmt->bindParam(':foto1', $foto1, PDO::PARAM_LOB);
        $stmt->bindParam(':foto2', $foto2, PDO::PARAM_LOB);

        // Ejecutar la consulta
        $stmt->execute();

        echo "Nuevo registro creado exitosamente.";

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    } finally {
        // Cerrar la conexión
        $conn = null;
    }
}

?>
</body>
</html>




