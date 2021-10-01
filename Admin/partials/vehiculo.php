<?php
    //$list_vehiculos = clsVehiculo::Listar(Conexion::getInstancia());
    $list_estados = clsEstado::ListarActivo(Conexion::getInstancia());
?>
<div class="col-sm-12">
    <section class="row">
        <div class="col-lg-12">
        <div id="MessageCrud"></div>
            <div class="card mb-4">
                <div class="card-block">
                    <div class="col-12 widget-right no-padding">
                        <input type="hidden" class="btn btn-primary btn-md float-right" data-toggle="modal" data-target="#RegisterModal">
                            <!-- <i class="fa fa-plus"></i> Registrar nuevo vehículo -->
                        
                    </div>
                    <h3 class="card-title"> Lista de Usuarios Registrados</h3>

                    <div class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <table class="table table-striped" width="100%" id='tabla'>
                            <thead>
                                <tr>
                                    <th>NOMBRES</th>
                                    <th>APELLIDOS</th>
                                    <th>CORREO</th>
                                    <th>DESCRIPCIÓN</th>
                                    <th>ESTADO</th>
                                    <th >OPCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($list_estados as $item) {     
                                ?>
                                    <tr>
                                        <td><?php echo $item['nombres']; ?></td>
                                        <td><?php echo $item['apellidos']; ?></td>
                                        <td><?php echo $item['correo']; ?></td>
                                        <td><?php echo $item['descripcion']; ?></td>
                                        
                                        <?php  if($item['id_estado']!="1"){
                                            echo'<td><button id="bn_'.$item['id'].'" class="btn btn-danger btnprueba btn-xs">Inactivo</button></td>';
                                          }else{
                                            echo'<td><button id="bn_'.$item['id'].'" class="btn btn-success btnprueba btn-xs">Activo</button></td>';
                                          }?>
                                        <td>
                                        <button id="btn_<?php echo $item['id']; ?>" class="btn btn-secondary btn-sm btn-circle margin" type="button" onclick="editModal(<?php echo $item['id']; ?>);" data-id="<?php echo $item['id']; ?>" data-placa="<?php echo $item['placa']; ?>"data-marca="<?php echo $item['marca']; ?>" data-color="<?php echo $item['color']; ?>"data-estacionamiento="<?php echo $item['estacionamiento']; ?>"data-fecha="<?php echo $item['fecha']; ?>"> <!-- data-estado="<?php //echo $item['id_provedor']; ?>"-->
                                                <span class="fa fa-pencil-alt"></span>
                                            </button>
                                            <button class="btn btn-secondary btn-sm btn-circle margin" onclick="Eliminar(<?php echo $item['id']; ?>)">
                                                <span class="fa fa-trash"></span>
                                            </button>
                                        </td>
                                            
                                        </td>
                                     </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </section>
</div>


<script type="text/javascript">
 $(document).ready( function () {
    $('#tabla').DataTable({
      'paging': true,
      'lengthChange': true,
      'searching': true,
      'orderning': true,
      'info': true,
      'autoWidth': true,
      'dom':'<<"sm-6"f><"sm-6"l><t>ip>',
      'order': [],
      'aaSorting': [],
      'ajax': {
        "url" : "../ajax/vehiculo.php",
        "data" : {option: 'R'},
        "type": "POST"
      },
      "columns": [
            { "data": "id" },
            { "data": "provedor" },
            {
              "data": "id",
              "render": function(data, type, row) { //data hace referencia al identificador, type el tipo de variable, row contiene todo las columnas de tu consulta sql
                return '<button id="btn_'+ data +'" class="btn btn-secondary btn-sm btn-circle margin" type="button" onclick="editModal('+ data +');" data-id="'+ data +'" data-provedor="'+ row['provedor'] +'" data-estado="'+ row['id_provedor'] +'"><span class="fa fa-pencil-alt"></span></button><button class="btn btn-secondary btn-sm btn-circle margin" onclick="Eliminar('+ data + ')"><span class="fa fa-trash"></span></button>';
                
              }
            }
        ]
    });
  } );


    function editModal(id) {
        $('#EditModal').modal('show');
        $('#edit').find('#id').val($('#btn_' + id).data('id'));
        $('#edit').find('#provedor').val($('#btn_' + id).data('provedor'));
        $('#edit').find('#id_provedor').val($('#btn_' + id).data('estado')); 
        console.log($('#btn_' + id).data('id'));
    }

    function EditarRegistro() {
     var provedor =  $('#edit').find('#provedor').val();
      if(provedor == '' || provedor.length < 4){
          $('#editMessage').html('Opss ocurrio un error!');
      }else{
            $.ajax({
            type: 'POST',
            url: '../ajax/vehiculo.php',
            data: $('#edit').serialize(),
            success: function(response) {
              var jsonData = JSON.parse(response);
              console.log(jsonData.success);
              $('#EditModal').modal('hide');
              if(jsonData.success == "2"){
                $('#MessageCrud').html('<div class="alert bg-warning" role="alert"><em class="fa fa-exclamation-triangle-circle mr-2"></em>Se encontró mas de un 1 registró con la misma descripción, por favor intente con otro término.<a href="#" class="float-right"><em class="fa fa-remove"></em></a></div>');
              }
              if(jsonData.success == "1"){
                $('#MessageCrud').html('<div class="alert bg-success" role="alert"><em class="fa fa-check-circle mr-2"></em>Se actualizó correctamente el vehiculo seleccionado. Por favor de comprobar los cambios.<a href="#" class="float-right"><em class="fa fa-remove"></em></a></div>');
              }
              
              //actualizar la tabla
              $('#tabla').DataTable().ajax.reload(); //actualizamos la tabla: internamente hace la consulta nuevamente al ajax, y reescribe todo los registros.
              window.setTimeout(function(){
                $('.alert').alert('close');
              }, 3000); //Se va ejecutar la funcion de cerrar la alerta en un intervalo de tiempo de 3000 milisegundos(3segundos)

            }
          });
          
          
      }

    }

    function Registrar() {
      $.ajax({
        type: 'POST',
        url: '../ajax/vehiculo.php',
        data: $('#register').serialize(),
        success: function(response) {
          var jsonData = JSON.parse(response);
          console.log(jsonData.success);
          $('#RegisterModal').modal('hide');
          if(jsonData.success == "2"){
            $('#MessageCrud').html('<div class="alert bg-warning" role="alert"><em class="fa fa-exclamation-triangle-circle mr-2"></em>Se encontró mas de un 1 registró con la misma descripción, por favor intente con otro término.<a href="#" class="float-right"><em class="fa fa-remove"></em></a></div>');
          }
          if(jsonData.success == "0"){
            $('#MessageCrud').html('<div class="alert bg-danger" role="alert"><em class="fa fa-minus-circle mr-2"></em>Ocurrio un error inesperado, Por favor intente mas tarde nuevamente.<a href="#" class="float-right"><em class="fa fa-remove"></em></a></div>');
          }
          if(jsonData.success == "1"){
            $('#MessageCrud').html('<div class="alert bg-success" role="alert"><em class="fa fa-check-circle mr-2"></em>Se registró correctamente el vehiculo ingresado. Por favor de comprobar los cambios.<a href="#" class="float-right"><em class="fa fa-remove"></em></a></div>');
          }
          
          //actualizar la tabla
          $('#tabla').DataTable().ajax.reload(); //actualizamos la tabla: internamente hace la consulta nuevamente al ajax, y reescribe todo los registros.
              window.setTimeout(function(){
                $('.alert').alert('close');
              }, 3000); //Se va ejecutar la funcion de cerrar la alerta en un intervalo de tiempo de 3000 milisegundos(3segundos)
        }
      });
    }

    function Eliminar(id) {
      Swal.fire({
  title: '¿Usted esta seguro de eliminar el vehiculo seleccionado?',
  showCancelButton: true,
  confirmButtonText: `ACEPTAR`,
}).then((result) => {
  if (result.isConfirmed) {
    $.ajax({
            type: 'POST',
            url: '../ajax/vehiculo.php',
            data: {option:'D', id: id},
            success: function(response) {
              var jsonData = JSON.parse(response);
              if(jsonData.success == "1"){
            $('#MessageCrud').html('<div class="alert bg-success" role="alert"><em class="fa fa-check-circle mr-2"></em>Se eliminó correctamente el vehiculo seleccionado. Por favor de comprobar los cambios.<a href="#" class="float-right"><em class="fa fa-remove"></em></a></div>');
          }
            }
          });
    $('#tabla').DataTable().ajax.reload(); //actualizamos la tabla: internamente hace la consulta nuevamente al ajax, y reescribe todo los registros.
    window.setTimeout(function(){
      $('.alert').alert('close');
    }, 3000); //Se va ejecutar la funcion de cerrar la alerta en un intervalo de tiempo de 3000 milisegundos(3segundos)
  } 
})
      

      
    }
</script>