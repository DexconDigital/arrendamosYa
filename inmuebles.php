<?php require 'variables/variables.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    $page = 'Inmuebles';
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

    <section id="cont_inmuebles">
        <div class="col-md-12 text-center mb-4">
            <h2><strong>Nuestra Oferta de Inmuebles</strong></h2>
        </div>
        <div class="container">
            <div class="row">

                <div class="col-md-3 border  fonto_buscador">
                    <div class="col-lg-12 col-md-6 col-12 form-group pr-md-0 mt-3">
                        <input type="text" class="form-control " id="codigo_buscar" placeholder="Código">
                    </div>
                    <div class="col-lg-12 col-md-4 col-12 form-group pr-md-0 ">
                        <div class="select w-100">
                            <select id="ciudad_buscar" class="form-control">
                                <option selected="" value="0">Ciudad</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-4 col-12 form-group pr-md-0 ">
                        <div class="select w-100">
                            <select id="barrio_buscar" class="form-control">
                                <option selected="" value="0">Barrio</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-12 form-group pr-md-0">
                        <div class="select w-100">
                            <select id="tipo_gestion_buscar" class="form-control">
                                <option selected="" value="0">Tipo de Gestión</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-4 col-12 form-group pr-md-0">
                        <div class="select w-100">
                            <select id="tipo_inmueble_buscar" class="form-control">
                                <option selected="" value="0">Tipo de Inmueble</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-12 form-group pr-md-0">
                        <input type="text" class="form-control " id="banios_buscar" placeholder=" Baños">
                    </div>
                    <div class="col-lg-12 col-md-6 col-12 form-group pr-md-0">
                        <input type="text" class="form-control " id="alcobas_buscar" placeholder=" Habitaciones">
                    </div>
                    <div class="col-lg-12 col-md-6 col-12 form-group pr-md-0">
                        <input type="text" class="form-control " id="garajes_buscar" placeholder=" Garajes">
                    </div>
                    <div class="col-lg-12 col-md-6 col-12 form-group pr-md-0">
                        <input type="text" class="form-control " id="area_minima_buscar" placeholder=" Área Mínima">
                    </div>
                    <div class="col-lg-12 col-md-6 col-12 form-group pr-md-0">
                        <input type="text" class="form-control " id="area_maxima_buscar" placeholder=" Área Máxima">
                    </div>
                    <div class="col-lg-12 col-md-6 col-12 form-group pr-md-0">
                        <input type="text" class="form-control " id="precio_minimo_buscar" placeholder="Precio Mínimo">
                    </div>
                    <div class="col-lg-12 col-md-6 col-12 form-group pr-md-0">
                        <input type="text" class="form-control " id="precio_maximo_buscar" placeholder="Precio Máximo">
                    </div>
                    <div class="col-lg-12  col-md-12 form-group pr-md-0">
                        <button type="button" id="buscar" class="btn  btn-lg btn-block ">Buscar</button>
                    </div>

                </div>

                <div class="col-md-9  cont_ficha">
                    <div class="row mb-5">
                        <div class="col-md-6 ">
                            <a href="detalle_inmueble.php?"><img src="images/no_image.png" alt=""></a>
                        </div>
                        <div class="col-md-6 ">

                            <div class="contenedor_ficha">
                                <div class="imagen_stile">
                                    <div class="cont_ficha">
                                        <div class="espacio_ficha">
                                            <div class="elemneto">
                                                <div class="">
                                                    <span class="texto">Código</span>
                                                    <h3 class="texto2"><a>Tipo gestion / Inmueble</a></h3>
                                                    <p class="texto3"> <i class="fas fa-map-marker-alt mr-2">
                                                        </i><span class="ion-ios-location-outline listing__location-icon"></span>Ubicaión</p>
                                                    <p class="texto4">$Precio</p>
                                                </div>

                                            </div>
                                            <div class="listing__details">
                                                <ul class="info_inmueble mt-3">
                                                    <li class="container_li">
                                                        <i class="fas fa-chart-area icono_inmueble mr-1"></i>
                                                        <span>113m</span>
                                                    </li>
                                                    <li class="container_li">
                                                        <i class="fas fa-bath icono_inmueble mr-1"></i>
                                                        <span>2</span>
                                                    </li>
                                                    <li class="container_li">
                                                        <i class="fa fa-bed icono_inmueble mr-1"></i>
                                                        <span>3</span>
                                                    </li>
                                                    <li class="container_li">
                                                        <i class="fa fa-car icono_inmueble mr-1"></i>
                                                        <span>1</span>
                                                    </li>
                                                </ul>
                                                <button type="button" class="btn rounded-0 col-12 botoon_inmueble waves-effect waves-light" id="buscar"><span>Ver más</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-6 ">
                            <a href=""><img src="images/no_image.png" alt=""></a>
                        </div>
                        <div class="col-md-6 ">

                            <div class="contenedor_ficha">
                                <div class="imagen_stile">
                                    <div class="cont_ficha">
                                        <div class="espacio_ficha">
                                            <div class="elemneto">
                                                <div class="">
                                                    <span class="texto">Código</span>
                                                    <h3 class="texto2"><a>Tipo gestion / Inmueble</a></h3>
                                                    <p class="texto3"> <i class="fas fa-map-marker-alt mr-2">
                                                        </i><span class="ion-ios-location-outline listing__location-icon"></span>Ubicaión</p>
                                                    <p class="texto4">$Precio</p>
                                                </div>

                                            </div>
                                            <div class="listing__details">
                                                <ul class="info_inmueble mt-3">
                                                    <li class="">
                                                        <i class="fas fa-chart-area icono_inmueble mr-1"></i>
                                                        <span>113m</span>
                                                    </li>
                                                    <li class="">
                                                        <i class="fas fa-bath icono_inmueble mr-1"></i>
                                                        <span>2</span>
                                                    </li>
                                                    <li class="">
                                                        <i class="fa fa-bed icono_inmueble mr-1"></i>
                                                        <span>3</span>
                                                    </li>
                                                    <li class="">
                                                        <i class="fa fa-car icono_inmueble mr-1"></i>
                                                        <span>1</span>
                                                    </li>
                                                </ul>
                                                <button type="button" class="btn rounded-0 col-12 botoon_inmueble waves-effect waves-light" id="buscar"><span>Ver más</span></button>
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

    <!-- **************************Contenido ********************************** -->
    <div class="container-fluid body cont_blog">



    </div>

    <!-- *****************Footer*********** -->


    <!-- *******************Scripts********************* -->
    <?php include 'layout/archivosfooter.php' ?>
    <?php include 'layout/footer.php' ?>
    <!--  contador -->

    <script src="js/counter-propertys.js"></script>
</body>

</html>