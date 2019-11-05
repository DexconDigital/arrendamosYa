<?php
// modelo inmueble propiedades destacadas Recibe el array y la cantidad de inmuebles a mostrar
function modelo_inmueble_destacadas($r, $cantidad_inmuebles)
{
    // Recorrer el array la cantidad de veces que se le indique
    for ($i = 0; $i < $cantidad_inmuebles; $i++) {

        // validar si existe la imagen, si no existe colocar la imagen de no imagen
        $imagen = existeImagen(($r[$i]['foto1']));

        // Eliminar el id de la inmobiliaria
        $codigo = str_ireplace("979-", "", $r[$i]['Codigo_Inmueble']);

        // a la variable "api" le asignamos el array con la iteraccion
        $api = $r[$i];
        $precio = price_validate($api);
        // Renombrar variables
        $ciudad = $api['Ciudad'];
        $barrio = $api['Barrio'];
        $gestion = $api['Gestion'];
        $tipo_inmueble = $api['Tipo_Inmueble'];
        $alcobas = $api['Alcobas'];
        $banios = $api['banios'];
        $garaje = $api['garaje'];
        $area_construida = $api['AreaConstruida'];
        $area_privada = $api['AreaLote'];
        $administracion = $api['Administracion'];
        $canon = $api['Canon'];
        $edad_inmueble = $api['EdadInmueble'];
        $estrato = $api['Estrato'];
        $venta = $api['Venta'];

        echo
            '
            <div class="card" style="width: 22rem;">
                                <a  href="detalle_inmueble.php?co=' . $codigo . '">
                                    <img src="' . $imagen . '" class="card-img-top" alt="...">
                                </a>
                                <span class="codigo_inmueble">Código:' . $codigo . '</span>
                                <span class="precio_inmueble_destacadas">' . $precio . '</span>
                                <div class="card-body">
                                    <h5 class="card-title">' . $tipo_inmueble . ' en ' . $gestion . '</h5>
                                    <div class="col-12 row">
                                       <i class="fas fa-map-marker-alt mr-2">
                                        </i>
                                        <p> ' . $barrio . ', ' . $ciudad . ' </p>
                                    </div>
                                    <div class="col-md-12 row ">
                                        <ul class="info_inmueble mt-3">
                                            <li class="container_li">
                                                <i class="fas fa-chart-area icono_inmueble mr-1"></i>
                                                <span>' . $area_construida . 'm<sup>2</sup></span>
                                            </li>
                                            <li class="container_li">
                                                <i class="fas fa-bath icono_inmueble mr-1"></i>
                                                <span>' . $banios . '</span>
                                            </li>
                                            <li class="container_li">
                                                <i class="fa fa-bed icono_inmueble mr-1"></i>
                                                <span>' . $alcobas . '</span>
                                            </li>
                                            <li class="container_li">
                                                <i class="fa fa-car icono_inmueble mr-1"></i>
                                                <span> ' . $garaje . '</span>
                                            </li>
                                        </ul>
                                    </div>


                                </div>
                            </div>
            ';
    }
}



function modelo_inmueble_listar($r)
{
    // Recorrer el array la cantidad de veces que se le indique
    for ($i = 0; $i < count($r); $i++) {

        // validar si existe la imagen, si no existe colocar la imagen de no imagen
        $imagen = existeImagen(($r[$i]['foto1']));

        // Eliminar el id de la inmobiliaria
        $codigo = str_ireplace("979-", "", $r[$i]['Codigo_Inmueble']);


        // a la variable "api" le asignamos el array con la iteraccion
        $api = $r[$i];
        $descripcion = $api['descripcionlarga'];
        $limite_de_cadena = 100;
        // recortar cadena
        if (strlen($descripcion) >= $limite_de_cadena) {
            $descripcion = substr($descripcion, 0, $limite_de_cadena) . '...';
        } else {
            $descripcion = $descripcion . '...';
        }
        // fin de recortar cadena
        $precio = price_validate($api);
        // Renombrar variables
        $ciudad = $api['Ciudad'];
        $barrio = $api['Barrio'];
        $gestion = $api['Gestion'];
        $tipo_inmueble = $api['Tipo_Inmueble'];
        $alcobas = $api['Alcobas'];
        $banios = $api['banios'];
        $garaje = $api['garaje'];
        $area_construida = $api['AreaConstruida'];
        $area_privada = $api['AreaLote'];
        $administracion = $api['Administracion'];
        $canon = $api['Canon'];
        $edad_inmueble = $api['EdadInmueble'];
        $estrato = $api['Estrato'];
        $venta = $api['Venta'];

        echo
            '<div class="row mb-5">
            <div class="col-md-6 ">
                <a class="cont_img_inmuebles" href="detalle_inmueble.php?co='.$codigo.'"><img src="' . $imagen . '"></a>
            </div>
            <div class="col-md-6 ">

                <div class="contenedor_ficha">
                    <div class="imagen_stile">
                        <div class="cont_ficha">
                            <div class="espacio_ficha">
                                <div class="elemneto">
                                    <div class="">
                                        <span class="texto">Codigo : ' . $codigo . '</span>
                                        <h3 class="texto2"><a>' . $tipo_inmueble . ' en ' . $gestion . '</a></h3>
                                        <p class="texto3"> <i class="fas fa-map-marker-alt mr-2">
                                            </i><span class="ion-ios-location-outline listing__location-icon"></span>' . $barrio . ', ' . $ciudad . '</p>
                                        <p class="texto4">' . $precio . '</p>
                                    </div>

                                </div>
                                <div class="listing__details">
                                    <ul class="info_inmueble mt-3">
                                        <li class="container_li">
                                            <i class="fas fa-chart-area icono_inmueble mr-1"></i>
                                            <span>' . $area_construida . 'mts<sup>2</sup></span>
                                        </li>
                                        <li class="container_li">
                                            <i class="fas fa-bath icono_inmueble mr-1"></i>
                                            <span>' . $banios . '</span>
                                        </li>
                                        <li class="container_li">
                                            <i class="fa fa-bed icono_inmueble mr-1"></i>
                                            <span>' . $alcobas . '</span>
                                        </li>
                                        <li class="container_li">
                                            <i class="fa fa-car icono_inmueble mr-1"></i>
                                            <span>' . $garaje . '</span>
                                        </li>
                                    </ul>
                                    <a class="btn rounded-0 col-12 botoon_inmueble" type="button" href="detalle_inmueble.php?co='.$codigo.'">Ver Más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> ';
    }
}


function modelo_inmueble_similares($r)
{
    for ($i = 0; $i < count($r); $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("979-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];
        $precio = price_validate($api);
        // Renombrar variables
        $ciudad = $api['Ciudad'];
        $barrio = $api['Barrio'];
        $gestion = $api['Gestion'];
        $tipo_inmueble = $api['Tipo_Inmueble'];
        echo '
        <div class="item mb-4">
                                                <div class="card" style="">
                                                    <div class="property">
                                                        <a href="detalle_inmueble.php?co=' . $codigo . '">
                                                            <div class="property-image">
                                                                <img class="imagen_destacadas" alt="" src="' . $imagen . '"></div>
                                                            <div class="overlay">
 
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-12 margen_card mt-3">
                                                        <div class="col-12">
                                                            <p class="mb-1"><b>' . $api['Tipo_Inmueble'] . ' en ' . $api['Gestion'] . '</b></p>
                                                        </div>
                                                        <div class="col-12">
                                                            <p class="mb-1"><i class="fas fa-map-marker-alt mr-2"></i> <strong>' . $api['Barrio'] . ', ' . $api['Ciudad'] . '</strong></p>
                                                        </div>
                                                        <div class="col-12">
                                                            <p class="mb-1"> <small> <strong>Código: ' . $codigo . '</strong>

                                                                </small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
           ';
    }
}

// Funciones para los modelos de propiedades
function existeImagen($r)
{
    if ($r == "") {
        $r = "images/no_image.png";
    }
    return $r;
}

function price_validate($r)
{
    $precio = '';
    if ($r['Gestion'] == 'Arriendo') {
        $precio =  '$' . $r['Canon'];
    } else if ($r['Gestion'] == 'Venta') {
        $precio = '$' . $r['Venta'];
    } else {
        $precio = '$' . $r['Canon'] . '/ $' . $r['Venta'];
    }
    return $precio;
}


function console_log($output, $with_script_tags = true)
{
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . ');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}


