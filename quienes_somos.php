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
                        <div class="col-md-6 cont_img_estadis">
                            <img src="images/no_image.png" alt="">
                            <p class="mt-5"></p>

                        </div>

                        <div class="col-md-6">
                            <h2 class="text-center"><?php echo $texto_quienes_somos['quienes_somos_2']['titulo'] ?></h2>
                            <div class="banner_estadi">
                                <section id="contador">
                                    <div class="text-center">
                                        <div class="container mt-4">
                                            <p><?php echo $texto_quienes_somos['quienes_somos_2']['parrafos'][0]  ?></p>
                                            <p><?php echo $texto_quienes_somos['quienes_somos_2']['parrafos'][1]  ?></p>
                                        </div>
                                    </div>
                                </section>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <p class=""><?php echo $texto_quienes_somos['quienes_somos']['parrafos'][0] ?></p>
                    <p><?php echo $texto_quienes_somos['quienes_somos']['parrafos'][1] ?> <?php echo $texto_quienes_somos['quienes_somos']['parrafos'][2] ?><?php echo $texto_quienes_somos['quienes_somos']['parrafos'][3] ?><?php echo $texto_quienes_somos['quienes_somos']['parrafos'][4] ?></p>
                </div>
            </div>
        </section>
        <section>
            <div class="col-md-12">
                <h2 class="text-center mb-4"> <strong><?php echo $texto_quienes_somos['mision']['titulo'] ?></strong></h2>
                <div class="banner_estadi">
                    <section id="contador">
                        <div class="text-center">
                            <div class="container mt-4">
                                <p><?php echo $texto_quienes_somos['mision'][0] ?></p>
                            </div>
                        </div>
                    </section>


                </div>
            </div>
        </section>
        <section>
            <div class="col-md-12">
                <h2 class="text-center mb-4"> <strong><?php echo $texto_quienes_somos['vision']['titulo'] ?></strong></h2>
                <div class="banner_estadi">
                    <section id="contador">
                        <div class="text-center">
                            <div class="container mt-4">
                                <p><?php echo $texto_quienes_somos['mision'][0] ?></p>
                            </div>
                        </div>
                    </section>


                </div>
            </div>
        </section>
        <section>
            <div class="col-md-12">
                <h2 class="text-center mb-4"> <strong><?php echo $texto_quienes_somos['objetivos']['titulo'] ?></strong></h2>
                <div class="banner_estadi">
                    <section id="contador">
                        <div class="text-center">
                            <div class="container mt-4">
                                <p><?php echo $texto_quienes_somos['objetivos'][0] ?></p>
                            </div>
                        </div>
                    </section>


                </div>
            </div>
        </section>
        <section>
            <div class="col-md-12">
                <h2 class="text-center mb-4"> <strong><?php echo $texto_quienes_somos['valores']['titulo'] ?></strong></h2>
                <div class="banner_estadi">
                    <section id="contador">
                        <div class="">
                            <div class="container mt-4">
                                <ul>
                                    <li><?php echo $texto_quienes_somos['valores'][0] ?></li>
                                    <li><?php echo $texto_quienes_somos['valores'][1] ?></li>
                                    <li><?php echo $texto_quienes_somos['valores'][2] ?></li>
                                    <li><?php echo $texto_quienes_somos['valores'][3] ?></li>
                                    <li><?php echo $texto_quienes_somos['valores'][4] ?></li>
                                </ul>
                            </div>
                        </div>
                    </section>


                </div>
            </div>
        </section>

        <section id="servicios" class="mt-5">
            <h2 class="text-center mb-4"> <strong>Nuestros Servicios</strong></h2>
            <div class="container" style="margin-bottom: 33px;">
                <div class="d-flex justify-content-between col-md-12 row ">
                    <!--Cuadro arriendos -->
                    <div class="col-lg-4 col-md-6 col-12 row ">
                        <div class="col-xl-3 col-md-2 col-2">
                        </div>
                        <div class="col-xl-9 col-md-10 col-10">
                            <div class="col-xl-10 col-md-3 col-4 text-center ">
                                <i class="fas fa-sign"></i>
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
                        <div class="col-xl-3 col-md-2 col-2">

                        </div>
                        <div class="col-xl-9 col-md-10 col-10">
                            <div class="col-xl-12 col-md-3 col-4 text-center">
                                <i class="fas fa-tags"></i>
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
                        <div class="col-xl-3 col-md-2 col-2">

                        </div>
                        <div class="col-xl-9 col-md-10 col-10">
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
                        <div class="col-xl-3 col-md-2 col-2">
                        </div>
                        <div class="col-xl-9 col-md-10 col-10">
                            <div class="col-xl-10 col-md-3 col-4 text-center ">
                                <i class="fas fa-user-tie"></i>
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
                        <div class="col-xl-3 col-md-2 col-2">

                        </div>
                        <div class="col-xl-9 col-md-10 col-10 cont_hipoteca">
                            <div class="col-xl-12 col-md-3 col-4 text-center">
                                <i class="fas fa-hand-holding-usd"></i>
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
                        <div class="col-xl-3 col-md-2 col-2">

                        </div>
                        <div class="col-xl-9 col-md-10 col-10 cont_juridica">
                            <div class="col-xl-12 col-md-3 col-4 text-center">
                                <i class="fas fa-gavel"></i>
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
    <script src="js/countUp.min.js"></script>
</body>

</html>