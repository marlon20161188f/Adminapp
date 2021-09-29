<?php
$mysqli=new mysqli("b7nvpy1vtadduxzlqosv-mysql.services.clever-cloud.com","ulcoechpsy7vemc6","poShw9zjQ6zjJHwl5bZ3","b7nvpy1vtadduxzlqosv");
$salida="";
if(isset($_POST['consulta'])){
    $q=$mysqli->real_escape_string($_POST['consulta']);
    $query="SELECT placa,color,marca,estacionamiento FROM registro_vehicular
    WHERE placa LIKE '%".$q."%' OR marca LIKE '%".$q."%' OR color LIKE '%".$q."%'";
    $sql = "INSERT INTO registro_ingreso(placa)
     VALUES('".$q."')";
    $resultado=$mysqli->query($query);
    if( $resultado->num_rows > 1){
        $salida.="<table class='tabla_datos heading text-center' width='98%'>
                     <!--<thead>
                        <tr>
                            <td>ID</td>
                            <td>Nombre</td>
                            <td>Marca</td>
                            <td>Modelo</td> 
                        </tr>
                    </thead>-->
                    <tbody class='text-center' align='center' >"; 
                    while($fila=$resultado->fetch_assoc()){
                        $salida.="
                        <tr>
                        <th align='center'width='34%'><H2 style='background-color:#fbf4ce' class='letra'>".$fila['placa']."</H2></th>
                        <th align='center'width='34%'><H2 style='background-color:#fbf4ce' class='letra'>".$fila['color']."</H2></th>
                        <th align='center'width='34%'><H2 style='background-color:#fbf4ce' class='letra'>".$fila['marca']."</H2></th>
                    </tr>
                     ";
                    }
                     $salida.="</tbody></table><div class='form-group text-center'> 
                     <button type='submit' class='btn btn-primary  btn-lg '>Nueva Consulta</button>
                      </div>";
    }else{
        if( $resultado->num_rows ==0){
                $salida.="<table class='tabla_datos heading text-center' width='98%'>
                <thead>
                   <tr>
                   <th colspan='1'></th>
                   <th align='center'width='34%'colspan='1'><H1 style='background-color:#fbf4ce' class='letra'>PLACA NO REGISTRADA</H1></th>
                   <th colspan='1'></th>
                   </tr>
               </thead>"; $salida.="</tbody></table><div class='form-group text-center'> 
                <button type='submit' class='btn btn-primary  btn-lg '>Nueva Consulta</button>
                 </div>";}
                else{
                   while($fila=$resultado->fetch_assoc()){
                    $salida.="<table class='tabla_datos heading text-center' width='98%' >
                    <thead>
                       <tr>
                       <th colspan='1' ></th>
                       <th align='center'width='34%'colspan='1'><H3 class='letra'>Estacionamiento</H3></th>
                       <th colspan='1' ></th>
                       </tr>
                   </thead>
                    <thead>
                       <tr>
                       <th colspan='1' ></th>
                       <th align='center'width='34%' colspan='1'><H1 style='background-color:#99e6cd' class='letra'>".$fila['estacionamiento']."</H1></th>
                       <th colspan='1' ></th>
                       </tr>
                   </thead>
                   <tbody class='text-center' align='center' >"; 
                       $salida.="
                       <tr>
                       <th align='center'width='34%'><H2 style='background-color:#99e6cd' class='letra'>".$fila['placa']."</H2></th>
                       <th align='center'width='34%'><H2 style='background-color:#99e6cd' class='letra'>".$fila['color']."</H2></th>
                       <th align='center'width='34%'><H2 style='background-color:#99e6cd' class='letra'>".$fila['marca']."</H2></th>
                        
                   </tr>
                    ";
                   }
                    $salida.="</tbody></table><div class='form-group text-center'> 
                    <button type='submit' class='btn btn-primary  btn-lg ' onclick='Registrar();'><i class='fa fa-plus'></i>Registrar Ingreso</button>
                     </div>
                     </div>
                     </div>
<div class='modal fade' id='RegisterModal' data-backdrop='static' data-keyboard='false' tabindex='-1' aria-labelledby='RegisterModal' aria-hidden='true'>
  <div class='modal-dialog modal-dialog-centered modal-lg'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='staticBackdropLabel'>Registrar Ingerso del Vehículo</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
        <form class='form-horizontal' id='register' method='POST'>
            <div class='row'>
                <div class='col-md-12'>
                <label class='col-12 control-label no-padding' for='nombre'>¿ESTA SEGURO QUE QUIERE REGISTRAR EL INGRESO DE ESTE VEHÍCULO?</label>
                    <div class='form-group'>
                        <label class='col-12 control-label no-padding' for='nombre'>verifique la placa antes de proceder:</label>
                        <div class='col-12 no-padding'>
                            <input type='text' class='form-control' name='placa' id='nombre' value=".$q." placeholder='Ingrese el nombre del establecimiento' autocomplete='off'>
                            <input type='hidden' name='option' value='C'>
                        </div>
                    </div>
                </div>
            </div>     
             <div class='modal-footer'>
            <button type='submit' class='btn btn-primary' onclick='registrar()'><i class='fa fa-save'></i>Registrar</button>
          </div>
          <div id='todolist'>
          <script>
  function registrar(){
    <?php echo accion(); ?>;
    document.write('<?php echo accion(); ?>');
  }
</script>
<?php
  function accion(){
      if(".$mysqli->query($sql)." === true){
      echo <div><form action=''></form></div>
      
          </div>
        </form>
    </div>
  </div>
</div>

";

                }
    }
}else {
    $salida="";
}
//     $resultado=$mysqli->query($query);
// if( $resultado->num_rows > 0){
//     $salida.="<table class='tabla_datos'>
//                 <thead>
//                     <tr>
//                         <td>ID</td>
//                         <td>Nombre</td>
//                         <td>Marca</td>
//                         <td>Modelo</td> 
//                     </tr>
//                 </thead>
//                 <tbody>"; 
//                 while($fila=$resultado->fetch_assoc()){
//                     $salida.="<tr>
//                     <td>".$fila['Cod_producto']."</td>
//                     <td>".$fila['Nombre']."</td>
//                     <td>".$fila['Marca']."</td>
//                     <td>".$fila['Modelo']."</td> 
//                 </tr>";
//                 }
//                 $salida.="</tbody></table>";

// }else{
//             $salida.="No hay datos :c";
// }
echo $salida;
?>