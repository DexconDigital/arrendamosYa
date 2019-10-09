<?php

require_once("conexion.php");

$link = Conect();
$array = array();

$sql = "SELECT * FROM noticias  where id_inmobiliaria2 = 11 order by id desc";
$result = mysqli_query($link, $sql) or die(mysqli_error($link));
while ($field = mysqli_fetch_array($result)) {
    $nombre = $field['nombre'];
    $id = $field['id'];
    $descripcion = $field['descripcion'];
    $imagen = $field['imagen'];
    $noticia = $field['noticia'];
    $fecha = $field['fecha'];
    $archivo = $field['archivo'];
    $noticias_array[] = array(
        'titulo' => $nombre,
        'id' => $id,
        'descripcion' => $descripcion,
        'imagen' => 'ArrendamosYa-Admin/admin/'.$imagen,
        'noticia' => $noticia,
        'fecha' => $fecha,
        'archivo' => $archivo
    );
}
function modelo_ultima_noticia($r)
{      
    if(count($r) > 2){
        $cantidad_noticias = 2;
    }else{
        $cantidad_noticias = count($r);
    }
    for($i=0; $i<$cantidad_noticias; $i++){
       $limite_de_cadena = 100;
       echo'
        <div class="col-lg-6 col-md-6 col-12 mb-3">
        <div class="card" style="border-color: white;">
        <img style="object-fit: cover;width: 100%;height: 255px;" src="'.$r[$i]['imagen'].'" class="card-img-top" alt="...">  
            <div class="card-body espacio_tageta mt-4">
                <h4 class="card-title"><strong>' . $r[$i]['titulo'] .'</strong></h4>
                <p>' . $r[$i]['fecha'] .'</p>
                <p style="border-bottom: 1px dashed #646464; margin-bottom: 30px;padding-bottom: 30px;" class="card-text">' . $r[$i]['descripcion'] . '</p>
                <a  href="./detalle-noticia.php?co=' . $r[$i]['id'] . '" class="btn boton_index_not text-center">Ver más</a>
            </div>
        </div>
    </div>
   
        ';
    }
}


function modelo_noticia($r)
{
    for ($i = 0; $i < count($r); $i++) {
        echo '
        <div class="col-lg-4 col-md-6 col-12 mb-3">
        <div class="card" style="border-color: white;">
        <img style="object-fit: cover;width: 100%;height: 255px;" src="'.$r[$i]['imagen'].'" class="card-img-top" alt="...">  
            <div class="card-body espacio_tageta mt-4">
                <h4 class="card-title"><strong>' . $r[$i]['titulo'] .'</strong></h4>
                <p>' . $r[$i]['fecha'] .'</p>
                <p style="border-bottom: 1px dashed #646464; margin-bottom: 30px;padding-bottom: 30px;" class="card-text">' . $r[$i]['descripcion'] . '</p>
                <a id="bonton_verde" href="./detalle-noticia.php?co=' . $r[$i]['id'] . '" class="btn  text-center">Ver más</a>
            </div>
        </div>
    </div>
    ';
    }
}
