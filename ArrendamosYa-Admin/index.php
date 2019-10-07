<?php
$imagen_login = "./admin/images/Logo.png";
$color_fondo = "(127, 140, 141);";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="shortcut icon" href="./admin/images/favicon.ico" type="image/x-icon">
    <style>
        .altologin {
            height: 100vh;
        }

        .btn-success {
            background-color: gray;
            border-color: gray;
        }

        .btn-success:hover {
            background-color: #24619c;
            border-color: #24619c;
        }

        body {
            background-image: url();
            background-attachment: fixed;
            height: 700px;
            margin: 0px;
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            display: block;
            position: relative;
        }

        .form-control:focus {
            border-color: #008bc8;
            box-shadow: inset 0 1px 1px rgb(36, 97, 156), 0 0 8px rgb(36, 97, 156);
        }

        .img_container {
            padding: 27px;
        }

        .img_container_admin {
            object-fit: contain;
            height: 86%;
            width: 100%;
        }
        .cont_img_inicio{
            max-width: 70.333333%;
        }
    </style>
</head>

<body>
    <div class="container-fluid altologin">
        <div class="row justify-content-md-center altologin" style="background:rgba<?php echo $color_fondo ?>">
            <div class="col-md-4 col-12 align-self-center">
                <div class="card">
                    <div class="card-header img_container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-12 col-lg-10 cont_img_inicio">
                                <img class="img_container_admin" style="" src="<?php echo $imagen_login ?>" alt="..." class="">
                            </div>
                        </div>

                    </div>

                    <div class="card-body">
                        <form method="post" action="validar.php">
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Usuario:</label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control" name="user" placeholder="Usuario" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" placeholder="Contraseña" name="pass" required>
                                </div>
                            </div>
                            <div class="form-group row justify-content-center mb-0">
                                <div class="col-6 offset-2">
                                    <button type="submit" class="btn btn-success btn-md btn-block">
                                        Ingresar
                                    </button>
                                    <div class="col-6 offset-2"></div>
                                    <a class="btn btn-success btn-md btn-block mt-2" href="../">
                                        Incio
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>