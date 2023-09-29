<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio de sesion Contratista</title>
        <script src="https://kit.fontawesome.com/996a34a527.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <head>

        <link rel="stylesheet" href="estilo.css"/> <!-- fondo -->
        <link rel="stylesheet" href="index.css"/> <!-- fondo -->

        <style>
        .breadcrumb {
            background-color: #3498db; /* Cambia el color de fondo a tu elección */
            color: #ffffff; /* Cambia el color del texto a tu elección */
        }
        </style>
        
    </head>

    <body>
        
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
            </ol>
        </nav>

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 bg-white">
                <form class="form-login p-4 bg-white" method="post" action="login.php">
                    <h5 class="mb-4">Inicio de sesión Constratista</h5>
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Nombre de usuario" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="contrasena" placeholder="Contraseña" required>
                    </div>
                    <div class="text-center"> 
                        <button class="btn btn-lg btn-primary" name="iniciar" type="submit">Iniciar sesión</button>
                    </div>
                </form>
                <form class="bg-white" action="creacion_cuenta.php">
                    <div class="text-center mt-3">
                        <button class="btn btn-lg btn-secondary" name="cuenta_nueva" type="submit">Crear cuenta nueva</button>
                    </div>
                    <br></br>
                </form>
            </div>
        </div>
    </div>
    </div>

    <?php /*
    if (isset($_POST["iniciar"])) {
        // Validaciones y proceso de inicio de sesión
        $usuario = $_POST["username"];
        $pass = $_POST["contrasena"];

        // Verificar las credenciales del usuario en la base de datos
        $query = "SELECT * FROM users WHERE usuario = '$usuario' AND pass = '$pass'";
        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result) > 0) {
            // Las credenciales son válidas, activar la sesión
            session_start();
            $_SESSION["usuario"] = $usuario;
            echo "<script>alert('Usuario correctos. ¡Bienvenido!')</script>";
            header("Location: index.php"); // Redirigir a la página principal o a la página de inicio de sesión exitoso
            exit(); // Terminar el script
        } else {
            // Las credenciales no son válidas
            echo "<script>alert('Usuario o contraseña incorrectos. Por favor, intenta nuevamente. ')</script>"; 
            
        }
    }
    mysqli_close($connection);
    */
    ?>

    </body>
</html>