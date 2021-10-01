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
                                <th hidden>ID</th>    
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
                                    <td hidden><?php echo $item['id_tipo_usuario']; ?></td>    
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
                                        <button id="btn_<?php echo $item['id']; ?>" class="btn btn-secondary btn-sm btn-circle margin" type="button" onclick="editModal(<?php echo $item['id']; ?>);" 
                                        data-id="<?php echo $item['id']; ?>" data-nombres="<?php echo $item['nombres']; ?>"data-apellidos="<?php echo $item['apellidos']; ?>" 
                                        data-descripcion="<?php echo $item['descripcion']; ?>" data-id_tipo_usuario="<?php echo $item['id_tipo_usuario']; ?>"> <!-- data-estado="<?php //echo $item['id_provedor']; ?>"-->
                                                <span class="fa fa-pencil-alt"></span>
                                            </button>
                                            <?php if($item['descripcion'] =="Administrador"){echo '<button class="btn btn-secondary btn-sm btn-circle margin" disabled onclick="Eliminar('.$item['id'].')">
                                                <span class="fa fa-trash"></span>
                                            </button>';}else{echo '<button class="btn btn-secondary btn-sm btn-circle margin" onclick="Eliminar('.$item['id'].')">
                                              <span class="fa fa-trash"></span>
                                          </button>';}?>
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
<!-- Modal Editar -->
<div class="modal fade" id="EditModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="EditModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" id="edit">
        <div class="row">
            <div class="form-group">
                <label class="col-12 control-label no-padding" for="nombres">nombres</label>
                <div class="col-12 no-padding">
                    <input type="hidden" name="id" id="id">
                    <input type="hidden" name="option" value="U">
                    <input type="text" class="form-control input-sm" name="nombres" id="nombres" placeholder="Ingrese la nombres del vehículo">
                </div>
            </div>
            <div class="form-group">
                <label class="col-12 control-label no-padding" for="apellidos">apellidos</label>
                <div class="col-12 no-padding">
                    <!-- <input type="hidden" name="id" id="id">
                    <input type="hidden" name="option" value="U"> -->
                    <input type="text" class="form-control input-sm" name="apellidos" id="apellidos" placeholder="Ingrese la apellidos del vehículo">
                </div>
            </div>
            <div class="form-group">
                <label class="col-12 control-label no-padding" for="correo">correo</label>
                <div class="col-12 no-padding">
                    <!-- <input type="hidden" name="id" id="id">
                    <input type="hidden" name="option" value="U"> -->
                    <input type="text" class="form-control input-sm" name="correo" id="correo" placeholder="Ingrese el correo del vehículo">
                </div>
            </div>
            <div class="form-group">
                <label class="col-12 control-label no-padding" for="id_tipo_usuario">id_tipo_usuario</label>
                <div class="col-12 no-padding">
                    <!-- <input type="hidden" name="id" id="id">
                    <input type="hidden" name="option" value="U"> -->
                    <input type="text" class="form-control input-sm" name="id_tipo_usuario" id="id_tipo_usuario" placeholder="Ingrese el id_tipo_usuario del vehículo">
                </div>
            </div>
            <!-- <div class="form-group">
                <label class="col-12 control-label no-padding" for="fecha">Fecha de registro</label>
                <div class="col-12 no-padding">
                    <input type="hidden" name="id" id="id">
                    <input type="hidden" name="option" value="U"> 
                    <input type="text" class="form-control input-sm" name="fecha" id="fecha" placeholder="Ingrese la fecha del registro del vehículo">
                </div>
            </div> -->
            </div>
            <div class="message" id="editMessage"></div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="EditarRegistro();"><i class="fa fa-save"></i> Guardar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
 $(document).ready( function () {
   /* $('#tabla').DataTable({
      'paging': true,
      'lengthChange': true,
      'searching': true,
      'orderning': true,
      'info': true,
      'autoWidth': true,
      'dom':'<<"sm-6"f><"sm-6"l><t>ip>',
      'order': [],
      'aaSorting': [],
      'ajax': '../ajax/forma-de-pago.php?option=R',
      "columns": [
            { "data": "id" },
            { "data": "descripcion" },
            { "data": "id_provedor" }
        ]
    });*/
    $('#tabla').DataTable();
  } );

    function editModal(id) {
        $('#EditModal').modal('show');
        $('#edit').find('#id').val($('#btn_' + id).data('id'));
        $('#edit').find('#nombres').val($('#btn_' + id).data('nombres'));
        $('#edit').find('#apellidos').val($('#btn_' + id).data('apellidos')); 
        $('#edit').find('#id_tipo_usuario').val($('#btn_' + id).data('id_tipo_usuario')); 
        $('#edit').find('#descripcion').val($('#btn_' + id).data('descripcion')); 
        console.log($('#btn_' + id).data('id'));
    }
    function EditarRegistro() {
      let parametros = new FormData($('#edit')[0]);
      $.ajax({
        type: 'POST',
        url: '../ajax/vehiculo.php',
        data: parametros,
        contentType: false,
        processData: false,
        success: function(response) {
          console.log(response);  
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
            $('#tabla').DataTable().ajax.reload();
            window.setTimeout(function(){ 
                $('.alert').alert('close');
            }, 3000);
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
  } 
})
      

      
    }
</script>