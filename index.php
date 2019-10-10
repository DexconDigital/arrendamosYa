<?php require 'variables/variables.php';
require 'controllers/indexController.php';
require 'controllers/noticiasController.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    $page = 'Inicio';
    include 'layout/archviosheader.php';
    ?>
</head>

<body>
    <!-- definir estilo menu, true= transparente false= blanco  -->
    <script>
        var isTransparent = true;
    </script>
    <!-- ***********************Menu********************** -->
    <section>
        <?php include 'layout/menu.php' ?>
    </section>

    <!-- **************************Contenido ********************************** -->
    <div class="container-fluid body cont_blog">

        <!-- Slider -->

        <section id="carousel_inicio">
            <div id="carouselExampleControls" class="carousel slide dimencion" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/slide_1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item ">
                        <img src="images/slide_2.jpg" class="d-block w-100" alt="...">
                    </div>


                    <div class="carousel-item ">
                        <img src="images/slide_3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

        <section id="buscador">
            <div class="container">
                <div class="col-md-12 ">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-12  form-group pr-md-0 expacio ">
                            <input type="text" class="form-control " id="codigo_buscar" placeholder="Código">
                        </div>
                        <div class="col-lg-3 col-md-3 col-12 form-group pr-md-0 expacio ">
                            <div class="select w-100">
                                <select id="ciudad_buscar" class="form-control">
                                    <option selected="" value="0">Ciudad</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-12 form-group pr-md-0 expacio ">
                            <div class="select w-100">
                                <select id="barrio_buscar" class="form-control">
                                    <option selected="" value="0">Barrio</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-12 form-group pr-md-0 expacio ">
                            <div class="select w-100">
                                <select id="tipo_gestion_buscar" class="form-control">
                                    <option selected="" value="0">Tipo de Gestión</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-12 form-group pr-md-0">
                            <div class="select w-100">
                                <select id="tipo_inmueble_buscar" class="form-control">
                                    <option selected="" value="0">Tipo de Inmueble</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-3 col-12 form-group pr-md-0">
                            <input type="text" class="form-control " id="banios_buscar" placeholder=" Baños">
                        </div>
                        <div class="col-lg-3 col-md-3 col-12 form-group pr-md-0">
                            <input type="text" class="form-control " id="alcobas_buscar" placeholder=" Habitaciones">
                        </div>
                        <div class="col-lg-3 col-md-3 col-12 form-group pr-md-0">
                            <input type="text" class="form-control " id="garajes_buscar" placeholder=" Garajes">
                        </div>
                        <div class="col-lg-3 col-md-3 col-12 form-group pr-md-0">
                            <input type="text" class="form-control " id="area_minima_buscar" placeholder=" Área Mínima">
                        </div>
                        <div class="col-lg-3 col-md-3 col-12 form-group pr-md-0">
                            <input type="text" class="form-control " id="area_maxima_buscar" placeholder=" Área Máxima">
                        </div>
                        <div class="col-lg-3  col-md-3 form-group pr-md-0">
                            <input type="text" id='precio_minimo_buscar' class="form-control  select_color" placeholder="Precio Mínimo">
                        </div>
                        <div class="col-lg-3  col-md-3 form-group pr-md-0">
                            <input type="text" id='precio_maximo_buscar' class="form-control  select_color" placeholder="Precio Máximo">
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 form-group pr-md-0">

                        </div>
                        <div class="col-12 col-md-12 form-group pr-md-0">
                            <button class="btn btn-md btn-block" type="button" data-toggle="collapse" id="buscar">
                                <span> Búscar</span>
                            </button>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 form-group pr-md-0">

                        </div> 

                    </div>
                </div>
            </div>


        </section>

        <section id="destacadas">
            <div class="container mt-3 ">
                <div class="col-12 text-center">
                    <h2>Propiedades Destacadas</h2>
                </div>
                <div class="col-md-12 mt-4">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- traer inmuebles destacados -->
                            <?php
                            if (is_array($api)) {
                                inmuebles_destacados($api);
                            } else {
                                echo '<h2 class="text-center" >No tiene Inmuebles Destacados</h2>';
                            }
                            ?>
                        </div>


                    </div>
                </div>
            </div>
        </section>

        <section id="contador" class="estadisticas">
            <div class="banner_estadi">

                <div class="">
                    <div class="container  contenedor_banner">
                        <div class="row d-flex justify-content-between" style="padding: 73px;">
                            <div class="invisible div_invisible espacio_div col-xl-1 col-md-3 col-12 text-center">
                                <h2 id="counter-experence"></h2>
                                <h5 class="color_result"><?php echo $texto_contador_estadisticas['parrafos'][0] ?> </h5>
                            </div>
                            <div class=" espacio_div col-xl-3 col-md-3 col-12 text-center">
                                <div>

                                    <h2 id="counter-propertys"></h2>
                                    <h5 class="color_result"><?php echo $texto_contador_estadisticas['parrafos'][1] ?> </h5>
                                </div>
                            </div>
                            <div class=" espacio_div col-xl-3 col-md-3 col-12 text-center">
                                <div>

                                    <h2 id="counter-rent"></h2>
                                    <h5 class="color_result"><?php echo $texto_contador_estadisticas['parrafos'][2] ?> </h5>
                                </div>
                            </div>
                            <div class=" espacio_div col-xl-3 col-md-3 col-12 text-center">
                                <div>

                                    <h2 id="counter-sale">0</h2>
                                    <h5 class="color_result"><?php echo $texto_contador_estadisticas['parrafos'][3] ?> </h5>
                                </div>
                            </div>
                            <div class=" espacio_div col-xl-3 col-md-3 col-12 text-center">
                                <div>

                                    <h2 id="counter-sale-rent">0</h2>
                                    <h5 class="color_result"><?php echo $texto_contador_estadisticas['parrafos'][4] ?> </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </section>

        <section id="aseguradoras">
            <div class="container mt-3">
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 mt-3">
                            <img src="images/documentos.png" alt="">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 text-center">
                            <h2> Formularios Aseguradoras</h2>
                            <div class="col-12 mt-3">
                                <ul class="menu">
                                    <li class="menu-item"><a class="option_foot" href="/">Libertador Persona Jurídica</a></li>
                                    <li class="menu-item"><a class="option_foot" href="/">Libertador Persona Natural</a></li>
                                    <li class="menu-item"><a class="option_foot" href="/">Sura Persona Natural</a></li>
                                    <li class="menu-item"><a class="option_foot" href="/">Sura Persona Jurídica</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="aliados">

            <div class="col-12 p-3">
                <h2 class="main-title text-center">Nuestros Aliados</h2>
            </div>
            <div class="col-12">
                <p class="text-center"> Contamos con aliados de primer nivel para asegurar una
                    experiencia de servicio confiable.</p>
            </div>
            <div class="col-12">
                <div class="owl-carousel owl-theme" id="aliados_slide">
                    <div class="item" style="height: 180px;">
                        <a href=" " target="_blank"><img style="height: 100%; object-fit: contain;" src="images/LOGO SURA.png" alt=""></a>
                    </div>
                    <div class="item" style="height: 180px;">
                        <a href="" target="_blank"><img style="height: 100%; object-fit: contain;" src="images/LOGO EL LIBERTADOR.png" alt=""></a>
                    </div>
                    <div class="item" style="height: 150px;">
                        <a href="" target="_blank"><img style="height: 100%; object-fit: contain;" src="images/LOGO SIMI.png" alt=""></a>
                    </div>

                </div>
            </div>




        </section>

        <section id="destacadas">
            <div class="container mt-3 ">
                <div class="col-12 text-center">
                    <h2>Últimas Noticias</h2>
                </div>
                <div class="col-12 mt-4 d-flex justify-content-around">
                    <div class="row">
                        <?php if (isset($noticias_array)) {
                            modelo_ultima_noticia($noticias_array);
                        } else {
                            echo '<div class="col 12">
                        <h3 class="text-center">Muy pronto publicaremos contenido para ti<h3>
                        </div>';
                        }
                        ?>
                        <!--
                        <div class="col-lg-6 col-md-6 col-12 ">
                            <div class="card" style="width: 30rem;">
                                <a href="">
                                    <img src="images/no_image.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Titulo de la Noticia</h5>
                                    <div class="col-12 row">
                                        <i class="fas fa-calendar-alt mr-2">
                                        </i>
                                        <p> Fecha de publicación </p>
                                    </div>
                                    <div class="col-12 row">
                                        <i class="far fa-newspaper mr-2"></i>
                                        <p> Descripción breve </p>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 ">
                            <div class="card" style="width: 30rem;">
                                <a href="">
                                    <img src="images/no_image.png" class="card-img-top" alt="...">
                                    <span></span>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Titulo de la Noticia</h5>
                                    <div class="col-12 row">
                                        <i class="fas fa-calendar-alt mr-2">
                                        </i>
                                        <p> Fecha de publicación </p>
                                    </div>
                                    <div class="col-12 row">
                                        <i class="far fa-newspaper mr-2"></i>
                                        <p> Descripción breve </p>
                                    </div>


                                </div>
                            </div>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </section>

        <hr style=" width:100%">

        <section id="inmobiliaria_historia">
            <div class="container col-md-2 mb-3 cont_img">
                <img src="images/Logo.png" class="card-img-top" alt="...">
            </div>
            <div class=" container col-md-10">
                <p class="mt-1"><?php echo $texto_quienes_somos['quienes_somos']['parrafos'][0] ?></p>
            </div>
            <div class="container col-md-2 cont_redes">
                <ul class="footer_redes">
                    <li><a class="color_face" href="<?php echo $redes_sociales['facebook']['link'] ?>" target="_blank"><i class="fab fa-facebook-f mr-2"></i></a></li>
                    <li><a class="color_insta" href="<?php echo $redes_sociales['instagram']['link'] ?>" target="_blank"><i class="fab fa-instagram mr-2"></i></a></li>
                    <li><a class="color_youtu" href="<?php echo $redes_sociales['youtube']['link'] ?>" target="_blank"><i class="fab fa-youtube mr-2"></i></a></li>

                </ul>
            </div>
        </section>

    </div>

    <!-- *****************Footer*********** -->


    <!-- *******************Scripts********************* -->
    <?php include 'layout/archivosfooter.php' ?>
    <?php include 'layout/footer.php' ?>

    <!--  contador -->
    <script src="conexion_api/buscador.js"></script>

    <script src="js/countUp.min.js"></script>
    <script src="js/counter-propertys.js"></script>

</body>

</html>