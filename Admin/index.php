<?php

include('layout/header.php');

if(isset($_GET['ruta'])){
    $ruta = $_GET['ruta'];
}else{
   include('partials/dashboard.php');
    $ruta = 'dashboard';
}

if($ruta == 'vehiculo'){
    include('partials/vehiculo.php');
}
if($ruta == 'registrovehicular'){
     include('partials/forma-de-pago.php');
    //include('partials/vehiculos_registrados.php');
}

if($ruta == 'registroingresos'){
    include('partials/registro_ingreso.php');
}

include('layout/footer.php');
?>
			