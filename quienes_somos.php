<?php require 'variables/variables.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    $page = 'Quienes Somos';
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

        <section id="imagen_cont">
            <div class="container">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="images/no_image.png" alt="">
                            <p class="mt-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
                        </div>
                        <div class="col-md-6">
                            <h2 class="text-center"> Arrendamos Ya SAS</h2>
                            <div class="banner_estadi">

                                <div class="text-center">
                                    <div class="container  contenedor_banner">
                                        <div class="row d-flex justify-content-between" style="padding: 24px;">
                                            <div class="col-md-12">
                                                <h2 id="counter-experence"></h2>
                                                <h4> <strong>5</strong> </h4>
                                                <h5 class="color_result"><strong><?php echo $texto_contador_estadisticas['parrafos'][0] ?></strong></h5>
                                            </div>
                                            <div class=" espacio_div col-xl-12 col-md-3 col-12 text-center mb-3">
                                                <div>
                                                    <h2 id="counter-propertys"></h2>
                                                    <h4> <strong>19</strong> </h4>
                                                    <h5 class="color_result"><strong><?php echo $texto_contador_estadisticas['parrafos'][1] ?></strong></h5>
                                                </div>
                                            </div>
                                            <div class=" espacio_div col-xl-12  col-md-3 col-12 text-center mb-3">
                                                <div>

                                                    <h2 id="counter-rent"></h2>
                                                    <h4> <strong>30</strong> </h4>
                                                    <h5 class="color_result"><strong><?php echo $texto_contador_estadisticas['parrafos'][2] ?></strong> </h5>
                                                </div>
                                            </div>
                                            <div class=" espacio_div col-xl-12  col-md-3 col-12 text-center mb-3">
                                                <div>

                                                    <h2 id="counter-sale"></h2>
                                                    <h4> <strong>26</strong> </h4>
                                                    <h5 class="color_result"><strong><?php echo $texto_contador_estadisticas['parrafos'][3] ?></strong> </h5>
                                                </div>
                                            </div>
                                            <div class=" espacio_div col-xl-12  col-md-3 col-12 text-center mb-3">
                                                <div>

                                                    <h2 id="counter-sale-rent"></h2>
                                                    <h4> <strong>5</strong> </h4>
                                                    <h5 class="color_result"><strong><?php echo $texto_contador_estadisticas['parrafos'][4] ?></strong></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="servicios" class="mt-5">
            <h2 class="text-center mb-4"> <strong>Nuestros Servicios</strong></h2>
            <div class="container" style="margin-bottom: 33px;">
                <div class="d-flex justify-content-between col-md-12 row ">
                    <!--Cuadro arriendos -->
                    <div class="col-lg-4 col-md-6 col-12 row ">
                        <div class="col-xl-3 col-md-3 col-4">
                        </div>
                        <div class="col-xl-9 col-md-9 col-8">
                            <div class="col-xl-10 col-md-3 col-4 text-center ">
                                <i class="fas fa-tags "></i>
                            </div>
                            <div>
                                <h4><strong><?php echo $texto_servicios['arrendamientos']['titulo'] ?></strong></h4>
                            </div>
                            <div class="margen_serv" style=" text-align: justify;">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...<a href="servicios.php#"> Ver más</a> </p>
                            </div>
                        </div>
                    </div>
                    <!--Cuadro ventas -->
                    <div class="col-lg-4 col-md-6 col-12 row ">
                        <div class="col-xl-3 col-md-3 col-4">

                        </div>
                        <div class="col-xl-9 col-md-9 col-8">
                            <div class="col-xl-12 col-md-3 col-4 text-center">
                                <i class="fas fa-sign"></i>
                            </div>
                            <div>
                                <h4><strong><?php echo $texto_servicios['ventas']['titulo'] ?></strong></h4>
                            </div>
                            <div class="margen_serv" style=" text-align: justify;">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...<a href="servicios.php#"> Ver más</a> </p>
                            </div>
                        </div>
                    </div>
                    <!--Cuadro Avaluos -->
                    <div class="col-lg-4 col-md-6 cont_avaluos col-12 row ">
                        <div class="col-xl-3 col-md-3 col-4">

                        </div>
                        <div class="col-xl-9 col-md-9 col-8">
                            <div class="col-xl-12 col-md-3 col-4 text-center">
                                <i class="fas fa-balance-scale"></i>
                            </div>
                            <div>
                                <h4><strong><?php echo $texto_servicios['avaluos']['titulo'] ?></strong></h4>
                            </div>
                            <div class="margen_serv" style=" text-align: justify;">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...<a href="servicios.php#"> Ver más</a> </p>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="d-flex justify-content-between col-md-12 row ">
                    <!--Cuadro administracion -->
                    <div class="col-lg-4 col-md-6 col-12 row ">
                        <div class="col-xl-3 col-md-3 col-4">
                        </div>
                        <div class="col-xl-9 col-md-9 col-8">
                            <div class="col-xl-10 col-md-3 col-4 text-center ">
                                <i class="fas fa-coins"></i>
                            </div>
                            <div>
                                <h4><strong><?php echo $texto_servicios['administracion']['titulo'] ?></strong></h4>
                            </div>
                            <div class="margen_serv" style=" text-align: justify;">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...<a href="servicios.php#"> Ver más</a> </p>
                            </div>
                        </div>
                    </div>
                    <!--Cuadro hipotecas -->
                    <div class="col-lg-4 col-md-6 col-12 row ">
                        <div class="col-xl-3 col-md-3 col-4">

                        </div>
                        <div class="col-xl-9 col-md-9 col-8">
                            <div class="col-xl-12 col-md-3 col-4 text-center">
                                <i class="fas fa-archway"></i>
                            </div>
                            <div>
                                <h4><strong><?php echo $texto_servicios['hipotecas']['titulo'] ?></strong></h4>
                            </div>
                            <div class="margen_serv" style=" text-align: justify;">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...<a href="servicios.php#"> Ver más</a> </p>
                            </div>
                        </div>
                    </div>
                    <!--Cuadro asesoria_juridica -->
                    <div class="col-lg-4 col-md-6 cont_avaluos col-12 row ">
                        <div class="col-xl-3 col-md-3 col-4">

                        </div>
                        <div class="col-xl-9 col-md-9 col-8">
                            <div class="col-xl-12 col-md-3 col-4 text-center">
                                <i class="fas fa-user-friends"></i>
                            </div>
                            <div>
                                <h4><strong><?php echo $texto_servicios['asesoria_juridica']['titulo'] ?></strong></h4>
                            </div>
                            <div class="margen_serv" style=" text-align: justify;">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...<a href="servicios.php#"> Ver más</a> </p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </section>

    </div>

    <!-- *****************Footer*********** -->


    <!-- *******************Scripts********************* -->
    <?php include 'layout/archivosfooter.php' ?>
    <?php include 'layout/footer.php' ?>
    <!--  contador -->

    <script src="js/counter-propertys.js"></script>
</body>

</html>