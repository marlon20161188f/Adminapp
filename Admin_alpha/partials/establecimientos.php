<?php
    //$listar = clsEstablecimiento::Listar(Conexion::getInstancia());
?>
<div class="col-sm-12">
    <section class="row">
        <div class="col-lg-12">
        <div id="MessageCrud"></div>
            <div class="card mb-4">
                <div class="card-block">
                    <div class="col-12 widget-right no-padding">
                        <button class="btn btn-primary btn-md float-right" data-toggle="modal" data-target="#RegisterModal">
                            <i class="fa fa-plus"></i> Agregar Compra
                        </button>
                    </div>
                    <h3 class="card-title">Lista de Compras Activas</h3>

                    <div class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <table class="table table-striped" width="100%" id='tabla'>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>PRODUCTO</th>
                                    <th>CANTIDAD</th>
                                    <th>FECHA DE COMPRA</th>
                                    <th>PROVEDOR</th>
                                    <th>OPCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                            
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
  <div class="modal-dialog modal-dialog-centered modal-lg">
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
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-12 control-label no-padding" for="nombre">Nombre</label>
                        <div class="col-12 no-padding">
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese el nombre del establecimiento">
                            <input type="hidden" name="option" value="U">
                            <input type="hidden" name="id" id="id">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-12 control-label no-padding" for="foto">Foto</label>
                        <div class="col-12 no-padding">
                            <input type="file" class="form-control" name="foto" id="foto" placeholder="Ingrese el nombre de la foto">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-12 control-label no-padding" for="direccion">Direccion</label>
                        <div class="col-12 no-padding">
                            <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Ingrese la dirección">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-12 control-label no-padding" for="foto">Telefono</label>
                        <div class="col-12 no-padding">
                            <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Ingrese el número telefonico">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-12 control-label no-padding" for="horario">Horario</label>
                        <div class="col-12 no-padding">
                            <input type="text" class="form-control" name="horario" id="horario" placeholder="Ingrese el horario de atencion">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-12 control-label no-padding" for="monto">Monto Mínimo</label>
                        <div class="col-12 no-padding">
                            <input type="text" class="form-control" name="monto" id="monto" placeholder="Ingrese el monto mínimo">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-12 control-label no-padding" for="tiempo">Tiempo de entrega (Min)</label>
                        <div class="col-12 no-padding">
                            <input type="text" class="form-control" name="tiempo" id="tiempo" placeholder="Ingrese el tiempo de entrega">
                        </div>
                    </div>
                </div>
                
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
<!-- Modal Registrar -->
<div class="modal fade" id="RegisterModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="RegisterModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Registrar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" id="register">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-12 control-label no-padding" for="nombre">Nombre</label>
                        <div class="col-12 no-padding">
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese el nombre del establecimiento" autocomplete="off">
                            <input type="hidden" name="option" value="C">
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-12 control-label no-padding" for="direccion">Direccion</label>
                        <div class="col-12 no-padding">
                            <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Ingrese la dirección">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-12 control-label no-padding" for="foto">Telefono</label>
                        <div class="col-12 no-padding">
                            <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Ingrese el número telefonico">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-12 control-label no-padding" for="horario">Horario</label>
                        <div class="col-12 no-padding">
                            <input type="text" class="form-control" name="horario" id="horario" placeholder="Ingrese el horario de atencion">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-12 control-label no-padding" for="monto">Monto Mínimo</label>
                        <div class="col-12 no-padding">
                            <input type="text" class="form-control" name="monto" id="monto" placeholder="Ingrese el monto mínimo">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-12 control-label no-padding" for="tiempo">Tiempo de entrega (Min)</label>
                        <div class="col-12 no-padding">
                            <input type="text" class="form-control" name="tiempo" id="tiempo" placeholder="Ingrese el tiempo de entrega">
                        </div>
                    </div>
                </div>
            </div>
                     
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="Registrar();"><i class="fa fa-save"></i> Guardar</button>
      </div>
    </div>
  </div>
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
        "url": "../ajax/establecimiento.php",
        "data": {option: 'R'},
        "type": "POST"
      },
      "columns": [
            { "data": "id" },
            { "data": "nombre" },
            { "data": "telefono" },
            {"data": "horario"},
            {"data": "provedor"},
            {
                "data": "id",
                "render": function(data, type, row) {
                    return '<button id="btn_'+ data +'" class="btn btn-secondary btn-sm btn-circle margin" type="button" onclick="editModal('+ data +');" data-id="'+ data +'" data-nombre="'+ row['nombre'] +'" data-foto="'+ row['foto'] +'" data-direccion="'+ row['direccion'] +'" data-horario="'+ row['horario'] +'" data-telefono="'+ row['telefono'] +'" data-monto="'+ row['monto_minimo'] +'" data-tiempo="'+ row['tiempo_entrega'] +'"  data-estado="'+ row['id_provedor'] +'"><span class="fa fa-pencil-alt"></span></button><button class="btn btn-secondary btn-sm btn-circle margin" onclick="Eliminar('+ data +')"><span class="fa fa-trash"></span></button>';
                }
            }

        ]
    });
  } );
    function editModal(id) {
        $('#EditModal').modal('show');
        $('#edit').find('#id').val($('#btn_' + id).data('id'));
        $('#edit').find('#nombre').val($('#btn_' + id).data('nombre'));
        $('#edit').find('#direccion').val($('#btn_' + id).data('direccion'));
        $('#edit').find('#horario').val($('#btn_' + id).data('horario'));
        $('#edit').find('#monto').val($('#btn_' + id).data('monto'));
        $('#edit').find('#tiempo').val($('#btn_' + id).data('tiempo'));
        $('#edit').find('#telefono').val($('#btn_' + id).data('telefono'));
        console.log($('#btn_' + id).data('id'));
    }

    function EditarRegistro() {
        let parametros = new FormData($('#edit')[0]);
        $.ajax({
        type: 'POST',
        url: '../ajax/establecimiento.php',
        data: parametros,
        contentType: false,
        processData: false,
        success: function(response) {
            var jsonData = JSON.parse(response);
            console.log(jsonData.success);
            $('#EditModal').modal('hide');
            if(jsonData.success == "3"){
            $('#MessageCrud').html('<div class="alert bg-danger" role="alert"><em class="fa fa-minus-circle mr-2"></em>El archivo cargado no se encuentra dentro de los formatos soportados, intente con un archivo JPG ó JPEG<a href="#" class="float-right"><em class="fa fa-remove"></em></a></div>');
          }
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

    function Registrar() {
     let parametros = new FormData($('#register')[0]);
     $.ajax({
        type: 'POST',
        url: '../ajax/establecimiento.php',
        data: parametros,
        contentType: false,
        processData: false,
        success: function(response) {
          var jsonData = JSON.parse(response);
          console.log(jsonData.success);
          $('#RegisterModal').modal('hide');
          if(jsonData.success == "3"){
            $('#MessageCrud').html('<div class="alert bg-danger" role="alert"><em class="fa fa-minus-circle mr-2"></em>El archivo cargado no se encuentra dentro de los formatos soportados, intente con un archivo JPG ó JPEG<a href="#" class="float-right"><em class="fa fa-remove"></em></a></div>');
          }
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
          $('#tabla').DataTable().ajax.reload();
          window.setTimeout(function(){ 
              $('.alert').alert('close');
          }, 5000);
        }
      });
    }

    function Eliminar(id) {
      Swal.fire({
  title: '¿Usted esta seguro de eliminar el establecimiento seleccionado?',
  showCancelButton: true,
  confirmButtonText: `ACEPTAR`,
}).then((result) => {
  if (result.isConfirmed) {
    $.ajax({
            type: 'POST',
            url: '../ajax/establecimiento.php',
            data: {option:'D', id: id},
            success: function(response) {
              var jsonData = JSON.parse(response);
              if(jsonData.success == "1"){
            $('#MessageCrud').html('<div class="alert bg-success" role="alert"><em class="fa fa-check-circle mr-2"></em>Se eliminó correctamente el vehiculo seleccionado. Por favor de comprobar los cambios.<a href="#" class="float-right"><em class="fa fa-remove"></em></a></div>');
          }
            }
          });
    $('#tabla').DataTable().ajax.reload();
    window.setTimeout(function(){ 
        $('.alert').alert('close');
    }, 3000);
  } 
})
      

      
    }
</script>