<?php require 'variables/variables.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    $page = 'Contactanos';
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

        <section id="mapa_inmo" class="wow fadeInLeftBig" data-wow-duration="2s">
            <div class="col-md-12 p-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1639265584754!2d-75.57708248555109!3d6.242115228102993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429acbacdd897%3A0x33f5ef6caf25c98e!2sTORRE%20NUEVO%20CENTRO%20LA%20ALPUJARRA!5e0!3m2!1ses-419!2sco!4v1570022524187!5m2!1ses-419!2sco" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </section>

        <section id="info_inmo" class="wow fadeInRightBig" data-wow-duration="2s"> 
            <div class="container ">
                <div class="row col-md-12">
                    <div class="col-md-6">
                        <h4> <strong>Contáctanos</strong></h4>
                        <p class="mt-3"> Puedes contactarnos a través de una llamada, un mensaje por
                            WhatsApp o visitarnos de <?php echo $datos_contacto ['horario']['horario'] ?>.</p>
                        <ul id="info_list">
                            <li><i class="fas fa-map-marker-alt m-2 color_ubi"></i> <strong><?php echo $datos_contacto['direccion']['direccion'] ?></strong></li>
                            <li><a href="mailto:<?php echo $datos_contacto['correo']['correo'] ?>"><i class="far fa-envelope m-2  color_wapp "></i> <strong><?php echo $datos_contacto['correo']['correo'] ?></strong></a></li>
                            <li><a href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>"><i class="fas fa-phone m-2 color_tel "></i> <strong><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?></strong></a> </li>
                            <li><a href="tel:<?php echo $datos_contacto['celular']['link'] ?>"><i class="fas fa-mobile-alt m-2 color_cel "></i> <strong><?php echo $datos_contacto['celular']['imprimir'] ?></strong></a></li>
                            <li><a target="_blank" href="<?php echo $datos_contacto['whatsapp']['link'] ?>"><i class="fab fa-whatsapp m-2  color_wapp "></i> <strong><?php echo $datos_contacto['whatsapp']['imprimir'] ?></strong></a></li>
                            
                        </ul>
                        <ul class="row redes">
                            <li> <a href="<?php echo $redes_sociales['facebook']['link'] ?>" target="_blank"><i class="fab fa-facebook-f mr-2 color_face "></i></a></li>
                            <li> <a href="<?php echo $redes_sociales['instagram']['link'] ?>" target="_blank"><i class="fab fa-instagram mr-2 color_insta "></i></a></li>
                            <li> <a href="<?php echo $redes_sociales['youtube']['link'] ?>" target="_blank"><i class="fab fa-youtube mr-2 color_youtu "></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4 class="mb-3"> <strong>Formulario de Contacto</strong></h4>
                        <div class="col-lg-12 col-md-12 col-12 p-0">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nombre y Apellido">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12 p-0">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Teléfono / Celular">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12 p-0">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Correo">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea cols="25" rows="5" class="textarea form-control tamaño_tex_area" placeholder="Mensaje"></textarea>
                        </div>
                        <div class="col-md-12 col-12 politica p-0">
                            <div class="custom-control custom-checkbox mb-4">
                                <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
                                <label class="custom-control-label" for="defaultContactFormCopy">Confimo que he leído, entendido y acepto la<a class="color_poltica" href="Politica_de_datos.pdf" download="Politica de tratamiento de infromación.pdf"> <strong>política de tratamiento de datos personales.</strong></a></label>
                            </div>
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary col-5">Enviar</button>
                        <!-- Debe llegar a  gerente@arrendamosya.com con copia a juanescudero624@hotmail.com -->
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


</body>

</html>