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
    <title>Login</title>
    <link href="<?php echo $url_site; ?>dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $url_site; ?>css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo $url_site; ?>css/styless.css" rel="stylesheet">
    <!-- style sin ruteo -->

</head>
<body class="login-pag" >
<div class="container-fluid" >
    <div class="row">
        <main class="col-xs-10 col-sm-8 col-md-4 m-auto ">
            <div class="login-panel card ">
                <div class="card-block">
                    <h3 class="card-title text-center mt-1">INICIAR SESIÓN</h3>
                    <div class="divider mt-0"></div>
                    <form role="form" action="login.php" method="post">
                        <?php
                            if(isset($_POST['email'])){
                                $validar = clsUsuario::ValidarCorreo(Conexion::getInstancia(),$_POST['email']);

                                if($validar){
                                    $validar_clave = clsUsuario::ValidarClave(Conexion::getInstancia(), $_POST['clave'], $_POST['email']);
                                    if($validar_clave){
                                        $usuario = clsUsuario::Obtener(Conexion::getInstancia(), $_POST['email']);
                                        $_SESSION['email'] = $usuario->correo;
                                        if($usuario->id_estado == 0){
                                            //header('Location: http://resumeucci.me/');
                                            echo '<div class="alert bg-danger">SU CUENTA NO TIENE CREDENCIALES COMUNNIQUESE CON EL ADMINISTRADOR</div>';
                                        }else{
                                            header('Location: index.php');
                                        }
                                    }else{
                                        echo '<div class="alert bg-danger">El correo o la contraseña son incorrectos.</div>';
                                    }
                                }else{
                                    echo '<div class="alert bg-danger">No se encontró ninguna cuenta con el correo ingresado.</div>';
                                }
                            }
                        ?>
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Ingrese email" name="email" type="email" autofocus="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Ingrese contraseña" name="clave" type="password" value="">
                            </div>

                            <div class="text-center"><button type="submit" class="btn btn-lg btn-primary" style="border:none;background: rgb(19,1,38);
background: linear-gradient(180deg, rgba(71,162,254,1) 0%, rgba(13,176,235,1) 100%);">INGRESAR</button>
                            </div>
                        </br>
                                Si usted no tiene una cuenta creada, por favor cree una nueva cuenta en este enlace: <a href="registro.php" style="color:#78b414;">Registrar cuenta</a>
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
