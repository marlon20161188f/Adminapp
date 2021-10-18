<?php
session_start(); //=> trabajar sessiones
header('Content-Type: text/html; charset=UTF-8'); //=> documento muestro con tipo utf-8 => tildes y ñ
define('CONTROLADOR', TRUE);
require 'config/database.php'; //Clase de conexion
require 'config/constantes.php'; //Constantes de la aplicacion
require 'clases/clsUsuario.php'; // clase de usuario
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registro</title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="login-page">
<div class="container-fluid" id="wrapper">
    <div class="row">
        <main class="col-xs-10 col-sm-8 col-md-4 m-auto ">
            <div class="login-panel card mt-5">
                <div class="card-block">
                    <h3 class="card-title text-center mt-1">REGISTRARSE</h3>
                    <div class="divider mt-0"></div>
                    <form role="form" action="registro.php" method="post">
                        <?php
                            if(isset($_POST['email'])){
                                $validar = clsUsuario::ValidarCorreo(Conexion::getInstancia(),$_POST['email']);
                                if($validar){
                                    echo '<div class="alert bg-danger">
                                                Error, el correo ya se encuentra en uso, intente con otro correo.
                                            </div>';
                                }else{
                                    $registro = clsUsuario::Registro2(Conexion::getInstancia(), $_POST['nombres'], $_POST['apellidos'], $_POST['email'], $_POST['clave']);
                                    if($registro > 0){
                                        echo '<div class="alert bg-success">
                                                Bienvenido usted se registró correctamente.
                                            </div>';
                                        include('email.php');
                                    }
                                }


                            }
                        ?>

                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Ingrese nombres" name="nombres" type="text" autofocus="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Ingrese apellidos" name="apellidos" type="text" >
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Ingrese email" name="email" type="email">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Ingrese contraseña" name="clave" type="password" value="">
                            </div>

                            <div class="text-center"><button type="submit" class="btn btn-lg btn-primary">REGISTRAR</button>
                                <br/>
                                Si usted ya tiene una cuenta creada, por favor inicie sesión en el siguiente enlace <a href="login.php">Iniciar Sesión</a>
                        </fieldset>
                </div>
                </fieldset>
                </form>
            </div>
    </div>
    </main>
</div>
</div>


<?php
    if(isset($_POST['email'])){
        echo '<script  type="text/javascript">
    window.setTimeout(function(){
        $(\'.alert\').alert(\'close\');
    }, 3000);
</script>';
    }
?>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="dist/js/bootstrap.min.js"></script>

<script src="js/custom.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

</body>
</html>
