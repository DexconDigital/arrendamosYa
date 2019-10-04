<?php

// llamar librerias 
require 'modelo_inmueble.php';
require_once './variables/config.php';
require './vendor/autoload.php';
use JasonGrimes\Paginator;

$url_pagina = $_SERVER["REQUEST_URI"];
$ciudad = 0;
$barrio = 0;
$gestion =  0;
$inmueble = 0;
$precio_minimo = 0;
$precio_maximo = 0;
$alcobas = 0;
$banios = 0;
$garaje = 0;
$area_minima = 0;
$area_maxima = 0;
$pag = 1;


if (isset($_GET['pag'])) {
    $pag = $_GET['pag'];
}

if (isset($_GET['ci'])) {
    $ciudad = $_GET['ci'];
    $barrio = $_GET['bar'];
    $gestion = $_GET['ge'];
    $inmueble = $_GET['in'];
    $precio_minimo = $_GET['premin'];
    $precio_maximo = $_GET['premax'];
    $alcobas = $_GET['alc'];
    $banios = $_GET['ban'];
    $garaje = $_GET['gar'];
    $area_minima = $_GET['aremin'];
    $area_maxima = $_GET['aremax'];
}

$precio_minimo = str_ireplace('.','', $precio_minimo);
$precio_maximo = str_ireplace('.','', $precio_maximo);


// Codigo de la pecicion del api 
$ch = curl_init();
$headers =  'Authorization:' . TOKEN;
curl_setopt($ch, CURLOPT_URL, 'http://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/' . $pag . '/total/1/departamento/0/ciudad/' . $ciudad . '/zona/0/barrio/' . $barrio . '/tipoInm/' . $inmueble . '/tipOper/' . $gestion . '/areamin/'.$area_minima.'/areamax/'.$area_maxima.'/valmin/'.$precio_minimo.'/valmax/'.$precio_maximo.'/campo/0/order/desc/banios/'.$banios.'/alcobas/'.$alcobas.'/garajes/'.$garaje.'/sede/0/usuario/0');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_USERPWD, $headers);
$result = curl_exec($ch);
curl_close($ch);
$r = json_decode($result, true);

//if (is_array($r)) {
//    echo "<pre>";
//    print_r($r);
//    echo "</pre>";
//} else {
//   echo 'no sirve';
//}

if (is_array($r)) {

  $api = $r['Inmuebles'];

    for ($i = 0; $i < count($api); $i++) {
       
   }



    $valor_reemplazar = '&pag=' . $pag . '';

    $url_pagina = str_ireplace($valor_reemplazar, '', $url_pagina);


    //  Derfinir valores del paginador.
    $totalinmuebles=0;
    if(is_array($r)){
        $totalinmuebles = $r['datosGrales']['totalInmuebles'];
    }
    
    $valor_reemplazar = '&pag='.$pag.'';
    $url_pagina = str_ireplace($valor_reemplazar, '', $url_pagina);
    
    
    $totalItems = $totalinmuebles;
    $itemsPerPage = 1;
    $currentPage = $pag;
    $urlPattern = $url_pagina.'&pag=(:num)';
    
    $paginator = new Paginator($totalItems, $itemsPerPage, $currentPage, $urlPattern);
} else {
    echo 'lo sentimos no sirve su busqueda';
}
?>


