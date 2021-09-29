<?php
$mysqli=new mysqli("b7nvpy1vtadduxzlqosv-mysql.services.clever-cloud.com","ulcoechpsy7vemc6","poShw9zjQ6zjJHwl5bZ3","b7nvpy1vtadduxzlqosv");
$salida="";
if(isset($_POST['consulta'])){
    $q=$mysqli->real_escape_string($_POST['consulta']);
    $query="SELECT placa,color,marca,estacionamiento FROM registro_vehicular
    WHERE placa LIKE '%".$q."%' OR marca LIKE '%".$q."%' OR color LIKE '%".$q."%'";
    $sql = "INSERT INTO registro_ingreso(placa)
     VALUES('$_POST['consulta']')";
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
                  if($mysqli->query($sql) == true){
                    echo $salida.="<div><form action=''></form>REGISTRO EXITOSO</div>";
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
                   }}
                    $salida.="</tbody></table><div class='form-group text-center'> 
                    <button type='submit' class='btn btn-primary  btn-lg ' '><i class='fa fa-plus'></i>Registrar Ingreso</button>
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