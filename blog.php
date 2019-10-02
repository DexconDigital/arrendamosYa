<?php require 'variables/variables.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    $page = 'Blog';
    include 'layout/archviosheader.php';
    ?>
</head>

<body>
    <!-- definir estilo menu, true= transparente false= blanco  -->
    <script>
        var isTransparent = false;
    </script>
    <!-- ***********************Menu********************** -->
    <section>
        <?php include 'layout/menu.php' ?>
    </section>

    <!-- **************************Contenido ********************************** -->
    <div class="container-fluid body cont_blog">    

        <section id="cont_blog">
            <div class="container">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card" style="width: 22rem;">
                                <img src="images/no_image.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Titulo noticia</h5>
                                    <p>Fecha D/M/A</p>
                                    <p class="card-text">Descripción de la noticia</p>
                                    <a href="#" class="btn">Ver más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 22rem;">
                                <img src="images/no_image.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Titulo noticia</h5>
                                    <p>Fecha D/M/A</p>
                                    <p class="card-text">Descripción de la noticia</p>
                                    <a href="#" class="btn">Ver más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 22rem;">
                                <img src="images/no_image.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Titulo noticia</h5>
                                    <p>Fecha D/M/A</p>
                                    <p class="card-text">Descripción de la noticia</p>
                                    <a href="#" class="btn">Ver más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </div>

    <!-- *****************Footer*********** -->

    <?php include 'layout/footer.php' ?>
    <!-- *******************Scripts********************* -->
    <?php include 'layout/archivosfooter.php' ?>
    

</body>

</html>