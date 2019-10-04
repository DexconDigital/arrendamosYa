<?php require 'variables/variables.php';
require 'controllers/detalleInmuebleController.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    $page = 'Detalle Inmueble';
    include 'layout/archviosheader.php';
    $preci = $_GET['pre'] ?>


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

    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/carousel.tamanos.css">



    <!-- **************************Contenido ********************************** -->
    <div class="container-fluid body cont_blog">
        <section id="inf_detalle">
            <div class="container">
                <div class="col-md-12">
                    <div class="conteedor_general ">
                        <ul class="cont_list ">
                            <li class="cont_titulo">
                                <div class="codigo_style">
                                    <span class="color_codigo">Codigo <?php echo $co; ?></span>
                                </div>
                                <h4 class="Titulo_principal"><?php echo $tipo_inmueble; ?> en <?php echo $gestion; ?> </h4>
                                <span class="style_ubicacion"><i class="color_icono fas fa-map-marker-alt m-2"></i><?php echo $barrio;?>, <?php echo $ciudad; ?> </span>
                            </li>
                            <li class="con_detalle_inform ">

                                <ul class="info_inmueble mt-3">
                                    <li class="">
                                        <i class="fas fa-chart-area icono_inmueble mr-1"></i>
                                        <span><?php echo $area_construida;?> m<sup>2</sup></span>
                                    </li>
                                    <li class="">
                                        <i class="fas fa-bath icono_inmueble mr-1"></i>
                                        <span><?php echo $banios; ?></span>
                                    </li>
                                    <li class="">
                                        <i class="fa fa-bed icono_inmueble mr-1"></i>
                                        <span>3</span>
                                    </li>
                                    <li class="">
                                        <i class="fa fa-car icono_inmueble mr-1"></i>
                                        <span><?php echo $garaje; ?></span>
                                    </li>
                                </ul>
                            </li>
                            <li class="cont_precio ">
                                <h4 class="precio_style"><?php echo $preci ?></h4>

                            </li>
                        </ul>
                        <div class="compartir">
                            <a class=" btn btn-outline-primary round-0" href="#" role="button">Compartir Ficha</a>
                        </div>

                        <ul class="cont_compart ">
                            <li class="tamaño_redes">
                                <a href="#" class="cont_icon">
                                    <i class="fab fa-facebook-f icono_style" aria-hidden="true"></i>

                                </a>
                            </li>
                            <li class="tamaño_redes">
                                <a href="#" class="cont_icon">
                                    <i class="fab fa-instagram icono_style"></i>

                                </a>
                            </li>
                            <li class="tamaño_redes">
                                <a href="#" class="cont_icon">
                                    <i class="fab fa-youtube icono_style"></i>

                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

        </section>

        <section class="container ">

            <div class="container">

            </div>

        </section>

        <section>
            <div class="container ">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4  ">
                            <div class="text-center">
                                <div>
                                    <h5 class="titulo_asesor" class="mb-0"> <strong>Contacto con el asesor</strong></h5>
                                </div>
                                <div class="col-md-12">

                                    <div class="side-bar-agent-detail mt-3">
                                        <figure>
                                            <img class="cont_img" src="<?php echo $asesor['FotoAsesor']; ?>" alt="">
                                        </figure>
                                        <div class="col-12  mt-2 text-center">
                                            <div><?php echo $asesor['ntercero']; ?></div>
                                            <div><i class=""></i><a class="color_negro" href="tel:+57<?php echo $asesor['celular']; ?>"><?php echo $asesor['celular']; ?></a></div>
                                            <div><i class=""></i><a class="color_negro" href="mailto:"><?php echo $asesor['correo']; ?></a></div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 row cont_caract">
                            <!-- descripcion -->
                            <div class="col-md-6" style="margin-bottom: 12px;">
                                <h4 class="Lineas_separadora"><strong>Características</strong></h4>
                                <ul class="pl-4">
                                    <li>Código: <?php echo $co; ?></li>
                                    <li>Alcobas: <?php echo $alcobas; ?></li>
                                    <li>Baños: <?php echo $banios; ?></li>
                                    <li>Área Construida: <?php echo $area_construida; ?>m<sup>2<sup></li>
                                    <li>Área Privada: <?php echo $area_privada; ?>m<sup>2<sup></li>
                                    <li>Garaje: <?php echo $garaje; ?></li>
                                    <li>Estrato: <?php echo $estrato; ?></li>
                                    <li>Edad Inmueble: <?php echo $edad_inmueble; ?> años</li>
                                    <?php if ($administracion != "") {
                                        echo '<li>Administración: $' . $administracion . '</li>';
                                    } ?>
                                </ul>
                            </div>
                            <!-- fin de descripcion -->
                            <?php
                            if (count($r['caracteristicasInternas']) > 0) {
                                echo
                                    '<div class="col-md-6" style="margin-bottom: 12px;">
                                    <h4 class="Lineas_separadora"><strong>Características Internas</strong></h4>
                                        <ul>';
                                for ($i = 0; $i < count($r['caracteristicasInternas']); $i++) {
                                    $caracteristicas = ltrim($r['caracteristicasInternas'][$i]['Descripcion']);
                                    echo '<li>' . $caracteristicas . '</li>';
                                }
                                echo  '</ul>
                                </div>
                            ';
                            }
                            ?>
                            <?php
                            if (count($r['caracteristicasExternas']) > 0) {
                                echo
                                    '<div class="col-md-6 row" style="margin-bottom: 12px;">
                                    <h4 class="Lineas_separadora"><strong>Características Externas</strong></h4>
                                        <ul>';
                                for ($i = 0; $i < count($r['caracteristicasExternas']); $i++) {
                                    $caracteristicas = ltrim($r['caracteristicasExternas'][$i]['Descripcion']);
                                    echo '<li>' . $caracteristicas . '</li>';
                                }
                                echo  '</ul>
                                </div>
                            ';
                            }
                            ?>
                            <?php
                            if (count($r['caracteristicasAlrededores']) > 0) {
                                echo
                                    '<div class="col-md-6" style="margin-bottom: 12px;">
                                    <h4 class="Lineas_separadora"><strong>Características de los alrededores</strong></h4>
                                        <ul>';
                                for ($i = 0; $i < count($r['caracteristicasAlrededores']); $i++) {
                                    $caracteristicas = ltrim($r['caracteristicasAlrededores'][$i]['Descripcion']);
                                    echo '<li>' . $caracteristicas . '</li>';
                                }
                                echo  '</ul>
                                </div>
                            ';
                            }
                            ?>
                            <div class="col-md-12" style="margin-bottom: 12px;">
                                <h4 class="Lineas_separadora"><strong>Video</strong></h4>

                            </div>
                            <div class="col-md-12" style="margin-bottom: 12px;">
                                <h4 class="Lineas_separadora"><strong>Mapa</strong></h4>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4  Inmuebles_similares">
                        <div class="text-center">
                            <div>
                                <h5 class="titulo_similares" class="mb-0"><strong>Inmuebles similares</strong></h5>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="item mb-4">
                                        <div class="card" style="">
                                            <div class="property">
                                                <a href="detalle_inmueble.php?co=' . $codigo . '">
                                                    <div class="property-image">
                                                        <img class="alto_img" alt="" src="images/no_image.png"></div>
                                                    <div class="overlay">

                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-12 margen_card">
                                                <div class="col-12">
                                                    <p class="mb-1"><b>Tipo inmueble / Gestión</b></p>
                                                </div>
                                                <div class="col-12">
                                                    <p class="mb-1"><i class="fas fa-map-marker-alt mr-2"></i> <strong>Bario / ciudad</strong></p>
                                                </div>
                                                <div class="col-12">
                                                    <p class="mb-1"> <small> <strong>Codigo</strong>

                                                        </small>
                                                    </p>
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



    </div>

    <!-- *****************Footer*********** -->

    <?php include 'layout/footer.php' ?>
    <!-- *******************Scripts********************* -->
    <?php include 'layout/archivosfooter.php' ?>
    <script src="js/slick.min.js"></script>




</body>

</html>