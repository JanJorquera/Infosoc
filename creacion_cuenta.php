<?php
//include 'config.php';
//include 'conexion.php';
/*
if (isset($_POST["registrar"])) {
    // Validaciones y proceso de creación de cuenta
    $usuario = $_POST["usuarioreg"];
    $pass = $_POST["contrasenareg"];
    $dia = $_POST["diareg"]; // Obtener el valor del dia ingresado en el formulario
    $mes = $_POST["mesreg"]; // Obtener el valor del mes ingresado en el formulario
    $año = $_POST["añoreg"]; // Obtener el valor del año ingresado en el formulario
    $correo = $_POST["correoreg"]; // Obtener el valor del correo ingresado en el formulario
    
    // Verificar si el usuario ya existe en la base de datos
    $query = "SELECT * FROM users WHERE usuario = '$usuario'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        // El usuario ya está registrado
        echo"<script>alert('El usuario ya está registrado. Por favor, elige otro nombre de usuario.')</script>";
    } else {
        // Insertar el nuevo usuario en la bdd
        $insertQuery = "INSERT INTO users (usuario, pass, correo, dia, mes, año) VALUES ('$usuario', '$pass', '$correo', '$dia', '$mes', '$año')";
        if (mysqli_query($connection, $insertQuery)) {
            // Registro exitoso
            echo"<script>alert('Cuenta creada exitosamente. ¡Bienvenido!')  window.location='login.php'</script>";
            header("Location: login.php");
            
        } else {
            // Error al insertar el nuevo usuario
            echo"<script>alert('Error al crear la cuenta. Por favor, intenta nuevamente.')</script>";
        }
        
    }
}
mysqli_close($connection);
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>...</title>
    <script src="https://kit.fontawesome.com/996a34a527.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css"/>


    <style>
        .breadcrumb {
            background-color: #3498db; /* Cambia el color de fondo a tu elección */
            color: #ffffff; /* Cambia el color del texto a tu elección */
        }
        nav a {
            text-decoration: none; /* Eliminar subrayado de enlaces */
            color: white; /* Color de texto para enlaces */
        }
    </style>

</head>
<body>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                <li class="breadcrumb-item"><a href="login_contratista.php">Inicio de sesion</a></li>
            </ol>
        </nav>

    <div class="row justify-content-center">
      <div class="col-lg-4">
        <section class="form-login p-4 bg-white m-4">
          <h2 class="text-center">Crear cuenta</h2>
          <form method="post" action="creacion_cuenta.php">
            <div class="form-group">
              <label>Nombre usuario</label>
              <input class="form-control" type="text" name="usuarioreg" value="" placeholder="Usuario" required>
            </div>
            <div class="form-group">
              <label>Fecha de nacimiento</label>
              <div class="row">
                <div class="col">
                  <select class="form-control" name="diareg" value="" required>
                    <option value="">Día</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                  </select>
                </div>
              </div>
              <div class="row mt-3 ">
                <div class="col">
                  <select class="form-control" name="mesreg" required>
                    <option value="">Mes</option>
                    <option value="1">Enero</option>
                    <option value="2">Febrero</option>
                    <option value="3">Marzo</option>
                    <option value="4">Abril</option>
                    <option value="5">Mayo</option>
                    <option value="6">Junio</option>
                    <option value="7">Julio</option>
                    <option value="8">Agosto</option>
                    <option value="9">Septiembre</option>
                    <option value="10">Octubre</option>
                    <option value="11">Noviembre</option>
                    <option value="12">Diciembre</option>
                  </select>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col">
                  <select class="form-control" name="añoreg" required>
                    <option value="">Año</option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Correo electrónico</label>
              <input class="form-control" type="text" name="correoreg" value="" placeholder="Correo electrónico" required>
            </div>
            <div class="form-group">
              <label>Contraseña</label>
              <input class="form-control" type="password" name="contrasenareg" value="" placeholder="Contraseña" required>
            </div>
            <div class="text-center">
              <button class="btn btn-primary" href="login.php" type="submit" name="registrar">Registrar</button>
            </div>
            <p class="mt-3 text-center"><a href="login_contratista.php">Regresar</a></p>
          </form>
        </section>
      </div>
    </div>
  </div>
</body>
</html>


