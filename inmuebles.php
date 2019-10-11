<?php
require 'variables/variables.php';
require 'controllers/inmueblesController.php';
?>
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



    <!-- **************************Contenido ********************************** -->
    <section id="cont_inmuebles" class=" wow bounceInLeft" data-wow-duration="2s">
        <div class="col-md-12 text-center mb-4">
            <h2><strong>Nuestra Oferta de Inmuebles</strong></h2>
        </div>
        <div class="container">
            <div class="row">

                <div class=" col-lg-3 col-md-4 border  fonto_buscador">
                    <div class="col-lg-12 col-md-12 col-12 form-group pr-md-0 mt-3 margen_botones">
                        <input type="text" class="form-control " id="codigo_buscar" placeholder="Código">
                    </div>
                    <div class="col-lg-12 col-md-12 col-12 form-group pr-md-0 ">
                        <div class="select w-100">
                            <select id="ciudad_buscar" class="form-control">
                                <option selected="" value="0">Ciudad</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-12 form-group pr-md-0 ">
                        <div class="select w-100">
                            <select id="barrio_buscar" class="form-control">
                                <option selected="" value="0">Barrio</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-12 form-group pr-md-0">
                        <div class="select w-100">
                            <select id="tipo_gestion_buscar" class="form-control">
                                <option selected="" value="0">Tipo de Gestión</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-12 form-group pr-md-0">
                        <div class="select w-100">
                            <select id="tipo_inmueble_buscar" class="form-control">
                                <option selected="" value="0">Tipo de Inmueble</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-12 form-group pr-md-0">
                        <input type="text" class="form-control " id="banios_buscar" placeholder=" Baños">
                    </div>
                    <div class="col-lg-12 col-md-12 col-12 form-group pr-md-0">
                        <input type="text" class="form-control " id="alcobas_buscar" placeholder=" Habitaciones">
                    </div>
                    <div class="col-lg-12 col-md-12 col-12 form-group pr-md-0">
                        <input type="text" class="form-control " id="garajes_buscar" placeholder=" Garajes">
                    </div>
                    <div class="col-lg-12 col-md-12 col-12 form-group pr-md-0">
                        <input type="text" class="form-control " id="area_minima_buscar" placeholder=" Área Mínima">
                    </div>
                    <div class="col-lg-12 col-md-12 col-12 form-group pr-md-0">
                        <input type="text" class="form-control " id="area_maxima_buscar" placeholder=" Área Máxima">
                    </div>
                    <div class="col-lg-12 col-md-12 col-12 form-group pr-md-0">
                        <input type="text" class="form-control " id="precio_minimo_buscar" placeholder="Precio Mínimo">
                    </div>
                    <div class="col-lg-12 col-md-12 col-12 form-group pr-md-0">
                        <input type="text" class="form-control " id="precio_maximo_buscar" placeholder="Precio Máximo">
                    </div>
                    <div class="col-lg-12  col-md-12 form-group pr-md-0">
                        <button type="button" id="buscar" class="btn  btn-lg btn-block ">Buscar</button>
                    </div>

                </div>

                <div class="col-lg-9 col-md-8  cont_ficha">

                    <!-- //listar Inmuebles -->
                    <?php
                    if (is_array($r)) {
                        modelo_inmueble_listar($r['Inmuebles']);
                    } else {
                        echo '<h2 class="text-center" >No tiene Inmuebles</h2>';
                    }
                    ?>
                </div>
                <div class="col-12 text-center">
                    <?php if (is_array($r)) : ?>
                        <ul class="pagination mt-4 align-items-end justify-content-center">
                            <?php if ($paginator->getPrevUrl()) : ?>
                                <li class="page-item"><a href="<?php echo $paginator->getPrevUrl(); ?>" class="page-link">&laquo; Atras</a></li>
                            <?php endif; ?>
                            <?php foreach ($paginator->getPages() as $page) : ?>
                                <?php if ($page['url']) : ?>
                                    <li <?php echo $page['isCurrent'] ? 'class="page-item active"' : ''; ?>>
                                        <a href="<?php echo $page['url']; ?>" class="page-link"><?php echo $page['num']; ?></a>
                                    </li>
                                <?php else : ?>
                                    <li class="page-item disabled"><span><?php echo $page['num']; ?></span></li>
                                <?php endif; ?>
                            <?php endforeach; ?>

                            <?php if ($paginator->getNextUrl()) : ?>
                                <li class="page-item"><a href="<?php echo $paginator->getNextUrl(); ?>" class="page-link">Siguiente &raquo;</a></li>
                            <?php endif; ?>
                        </ul>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </section>

    <div class="container-fluid body cont_blog">

    </div>

    <!-- *****************Footer*********** -->


    <!-- *******************Scripts********************* -->
    <?php include 'layout/archivosfooter.php' ?>
    <?php include 'layout/footer.php' ?>
    <script src="conexion_api/buscador.js"></script>
    <!--  contador -->


</body>

</html>