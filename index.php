<?php
    $oferta1 = ["Santiago", "$15.000"];
    $oferta2 = ["Temuco", "$10.000"];
    $oferta3 = ["Arica", "$17.000"];
    $ofertas = [$oferta1, $oferta2, $oferta3];
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Infosoc</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet"/>
        <link href="https://www.flaticon.es/iconos-gratis/viaje" rel="icon"/>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Infosoc</h1>
            <ol class="breadcrumb mb-4">
                <h3>Ofertas de Trabajo</h3>
            </ol>
            <div class=row>
            <?php
            foreach($ofertas as $oferta){
                $lugar = $oferta[0];
                $paga = $oferta[1];
                ?>
                <div class="col-x1-3 col-md-6">
                    <div class="card bg-secondary text-dark mb-4">
                        <div class="card-body">
                            <div style="width: 100%;"></div>
                            <p class="card-text mt-3">Lugar: <?php echo $lugar ?></p>
                            <p class="card-text mt-3">Paga: <?php echo $paga ?></p>
                            <button type="button" class="btn btn-outline-dark">
                                <a class="link-dark" style="text-decoration: none" href="infosoc.php">Postular</a>
                            </button>
                        </div>
                    </div>
                </div>
                <?php 
                }
                ?>
            </div>
        </div>
    </body>
</html>
