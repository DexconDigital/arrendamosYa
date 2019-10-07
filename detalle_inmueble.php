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

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'>
    <link rel="stylesheet" href="mapas/leaflet.css" crossorigin="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo 'http://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" />
    <meta property="og:title" content="<?php echo $r['Tipo_Inmueble'] . ' en ' . $r['Gestion']; ?>" />
    <meta property="og:description" content="Inmueble ubicado en: <?php echo $r['barrio'] . ', ' . $r['ciudad'] . ', ' . $r['depto']; ?> " />
    <meta property="og:image" itemprop="image" content="<?php echo $r['fotos'][0]['foto']; ?>" />
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <style>
        #map {
            height: 350px;
            z-index: 20;
        }

        .leaflet-control {
            z-index: 200;
        }

        .leaflet-control {
            z-index: 20;
        }
    </style>

    <link itemprop="thumbnailUrl" href="<?php echo $r['fotos'][0]['foto']; ?>">
    <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
        <link itemprop="url" href="<?php echo $r['fotos'][0]['foto']; ?>">
    </span>



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
                                <span class="style_ubicacion"><i class="color_icono fas fa-map-marker-alt m-2"></i><?php echo $barrio; ?>, <?php echo $ciudad; ?> </span>
                            </li>
                            <li class="con_detalle_inform ">

                                <ul class="info_inmueble mt-3">
                                    <li class="">
                                        <i class="fas fa-chart-area icono_inmueble mr-1"></i>
                                        <span><?php echo $area_construida; ?> mts<sup>2</sup></span>
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
                                <h4 class="precio_style"><?php if ($r['Gestion'] == 'Arriendo') {
                                                                echo '<h3 class="precio">$ ' . $r['ValorCanon'] . '</h3>';
                                                            } else if ($r['Gestion'] == 'Venta') {
                                                                echo '<h3 class="precio">$ ' . $r['ValorVenta'] . '</h3>';
                                                            } else {
                                                                echo '<h3 class="precio">$ ' . $r['ValorCanon'] . ' /$' . $r['ValorVenta'] . '</h3>';
                                                            }
                                                            ?></h4>

                            </li>
                        </ul>
                        <div class="compartir">
                            <a class=" btn btn-outline-primary round-0" href="https://simicrm.app/mcomercialweb/fichas_tecnicas/fichatec3.php?reg=979-<?php echo $co ?>" target="_blank" role="button">Imprimir Ficha</a>
                        </div>

                        <ul class="cont_compart ">
                            <p>Compartir por :</p>
                            <li class="tamaño_redes">
                                <a href="#" class="cont_icon">
                                    <i class="fab fa-facebook-f icono_style" aria-hidden="true"></i>

                                </a>
                            </li>
                            <li class="tamaño_redes">
                                <a href="#" class="cont_icon">
                                    <i class="fab fa-twitter icono_style"></i>

                                </a>
                            </li>
                            <li class="tamaño_redes">
                                <a href="#" class="cont_icon">
                                    <i class="fab fa-whatsapp icono_style"></i>

                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

        </section>


        <section id="carousel_slider">
            <div class="container">
                <!-- partial:index.partial.html -->
                <div class="swiper-container main-slider loading">
                    <div class="swiper-wrapper">
                        <?php
                        if (isset($r['fotos'])) {
                            for ($i = 0; $i < count($r['fotos']); $i++) {
                                echo ' <div class="swiper-slide">
                                        <figure class="slide-bgimg" style="background-image:url(' . $r['fotos'][$i]['foto'] . ')">
                                          <img src="' . $r['fotos'][$i]['foto'] . '" class="entity-img" />
                                        </figure>
                                        <div class="content">
                                            <p class="title"></p>
                                            <span class="caption"></span>
                                        </div>
                                               </div>
                                        
                                       ';
                            }
                        } else {
                            echo  '<div class="contenedor-img">
                                        <img src="images/no_image.png" alt="">
                                    </div>';
                        }
                        ?>
                        <!--
                        <div class="swiper-slide">
                            <figure class="slide-bgimg" style="background-image:url(https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLbVhsNzdIYmlfN1E)">
                                <img src="" class="entity-img" />
                            </figure>
                            <div class="content">
                                <p class="title"></p>
                                <span class="caption"></span>
                            </div>
                        </div>
                    -->
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev swiper-button-white"></div>
                    <div class="swiper-button-next swiper-button-white"></div>
                </div>

                <!-- Thumbnail navigation -->
                <div class="swiper-container nav-slider loading">
                    <div class="swiper-wrapper" role="navigation">
                    <?php
                        if (isset($r['fotos'])) {
                            for ($i = 1; $i < count($r['fotos']); $i++) {
                                echo ' <div class="swiper-slide">
                                        <figure class="slide-bgimg" style="background-image:url(' . $r['fotos'][$i]['foto'] . ')">
                                          <img src="' . $r['fotos'][$i]['foto'] . '" class="entity-img" />
                                        </figure>
                                        <div class="content">
                                            <p class="title"></p>
                                        </div>
                                    </div>
                                        
                                       ';
                            }
                        } else {
                            echo  '<div class="contenedor-img">
                                        <img src="images/no_image.png" alt="">
                                    </div>';
                        }
                        ?>
                        <!--
                        <div class="swiper-slide">
                            <figure class="slide-bgimg" style="background-image:url(https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLbVhsNzdIYmlfN1E)">
                                <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLbVhsNzdIYmlfN1E" class="entity-img" />
                            </figure>
                            <div class="content">
                                <p class="title">Shaun Matthews</p>
                            </div>
                        </div>
                    -->
                    </div>
                </div>

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
                            <div class="Inmuebles_similares">
                                <div class="text-center">
                                    <div>
                                        <h5 class="titulo_similares" class="mb-0"><strong>Inmuebles similares</strong></h5>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-12">

                                            <?php similares($r['IdCiudad'], $r['IdTpInm']); ?>
                                            <!--
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

                                            </div> -->
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
                                    '<div class="col-md-6 row cont_externas">
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
                                <?php if ($r['video'] != "") {
                                    echo
                                        '<div class="card">
                                <div class="card-body">
                                <h4 class="Lineas_separadora"><strong>Video</strong></h4>
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                        <iframe src="' . $r['video'] . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                ';
                                } ?>
                            </div>
                            <div class="col-md-12">
                                <h4 class="Lineas_separadora"><strong>Mapa</strong></h4>
                                <div class="card mapa_tamaño">
                                    <div class="">
                                        <div id="map" class="w-100"></div>
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
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js'></script>
    <script src="./js/corrousel.js"></script>

    <!-- mapa del inmueble -->
    <script src="mapas/leaflet.js" crossorigin=""></script>
    <script>
        var map = L.map('map').setView([<?php echo $r['latitud']; ?>, <?php echo $r['longitud'] ?>], 14);

        L.tileLayer('https://api.maptiler.com/maps/streets/256/{z}/{x}/{y}.png?key=1rAGHv3KcO1nrS6S9cgI', {
            attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">© MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">© OpenStreetMap contributors</a>'
        }).addTo(map);

        L.marker([<?php echo $r['latitud']; ?>, <?php echo $r['longitud'] ?>]).addTo(map)
            .bindPopup('<img src="<?php echo $r['fotos'][0]['foto'] ?>"])" alt="" width="55px" height="auto"><br>Ubicación')
            .openPopup();
    </script>


</body>

</html>