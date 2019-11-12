<!-- Codigo del preloader -->
<style>
    #wrap-preload {
        position: fixed;
        z-index: 10;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: #fff;
        opacity: 1;
        visibility: visible;
        transition: opacity .5s ease, visibility .5s ease;
        z-index: 1032;
    }

    #wrap-preload.close {
        opacity: 0;
        visibility: hidden;
    }

    .fixed-top {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 10;
    }

    #wrap-preload>img.gif {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate3d(-50%, -50%, 0);
        z-index: 1032;
        height: 30%;
    }
</style>
<div id="wrap-preload">
    <img src="images/preloader.gif" alt="gif" class="gif" id="gif">
</div>
<script>
    var loader = document.getElementById("wrap-preload");
    window.addEventListener("load", function() {
        loader.style.visibility = "hidden";
    });
    
</script>
<!-- Fin de codigo preloader -->

<div class="fixed-top total-menu">
    <div class="container-fluid bg-light bg-transparent d-none d-lg-block" id="menu_contacto">
        <div class="row justify-content-lg-center">
            <div class="col-8 offset-2">
                <div class="information">
                    <small><a href=""></a><i class="fas fa-map-marker-alt m-2"></i><?php echo $datos_contacto['direccion']['direccion'] ?></small>
                    <small><a href="mailto:<?php echo $datos_contacto['correo']['correo'] ?>"><i class="far fa-envelope m-2"></i><?php echo $datos_contacto['correo']['correo'] ?></a></small>
                    <small class="float-right"><a href="tel:<?php echo $datos_contacto['celular']['link'] ?>"><i class="fas fa-mobile-alt m-2"></i><?php echo $datos_contacto['celular']['imprimir'] ?></a>
                    </small>
                    <small class="float-right"><a target="_blank" href="<?php echo $datos_contacto['whatsapp']['link'] ?>"><i class="fab fa-whatsapp m-2 color_twi"></i><?php echo $datos_contacto['whatsapp']['imprimir'] ?></a></small>
                    <small class="float-right"><a href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>"><i class="fas fa-phone m-2 color_insta"></i><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?></a></small>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent" id='menu'>
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="images/Logo.png" width="auto" height="80" alt="" id="imagen_menu">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto align-items-center list_menu">
                    <li class="nav-item <?php echo ($page == "Inicio") ? "active" : ""; ?>">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item <?php echo ($page == "Quienes Somos") ? "active" : ""; ?>">
                        <a class="nav-link" href="quienes_somos.php">Quíenes Somos</a>
                    </li>
                    <li class="nav-item <?php echo ($page == "Inmuebles" || $page == "Detalle Inmueble") ? "active" : "" ?>">
                        <a class="nav-link" href="inmuebles.php?">Inmuebles</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Transacciones en Línea
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a target="_blank" class="dropdown-item" href="https://www.simiinmobiliarias.com/base/simired/simidocs/index.php?inmo=979&tipo=2">Arrendatarios</a>
                            <a target="_blank" class="dropdown-item" href="https://www.simiinmobiliarias.com/base/simired/simidocs/index.php?inmo=979&tipo=1">Propietarios</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="" data-toggle="modal" data-target="#consigna">Consignar Inmueble</a>
                    </li>
                    <li class="nav-item <?php echo ($page == "Blog" || $page == "Detalle Noticia") ? "active" : "" ?>">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item <?php echo ($page == "Contactanos") ? "active" : "" ?>">
                        <a class="nav-link" href="contactanos.php">Contáctanos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <div class="contenedor-img">
                                <img src="images/logopse.png" alt="">
                            </div>
                        </a>
                    </li>

                </ul>
            </div>
        </div>

    </nav>
</div>
<div class="espacio-menu" style="display: none;"></div>