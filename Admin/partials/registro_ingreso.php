<?php
    date_default_timezone_set('America/Lima');
    $list = clsIngreso::Listar(Conexion::getInstancia());
    //$list_estados = clsEstado::ListarActivo(Conexion::getInstancia());
?>
<style>
  .dataTables_wrapper .dt-buttons {
  float:none;  
  padding-right:18rem;
  text-align:right;}
</style>
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
                    <h3 class="card-title"> Registro de ingreso vehicular</h3>
                   
            <div class="row input-daterange">
                <div class="col-md-2">
                    <input type="text" name="from_date" id="from_date" class="form-control" placeholder="Desde que fecha" readonly />
                </div>
                <div class="col-md-2">
                    <input type="text" name="to_date" id="to_date" class="form-control" placeholder="Hasta que fecha" readonly />
                </div>
                <div class="col-md-4">
                    <button type="button" name="filter" id="filter" class="btn btn-primary">Filtrar</button>
                    <button type="button" name="refresh" id="refresh" class="btn btn-default">Refrescar</button>
                </div>
            </div>
            <br />
                    <div class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <table class="table table-striped" width="100%" id='tabla'>
                            <thead>
                                <tr>
                                    <th hidden>ID</th>
                                    <th>PLACA</th>
                                    <th>MARCA</th>
                                    <th>COLOR</th>
                                    <th>ESTACIONAMIENTO</th>
                                    <th>FECHA</th>
                                    <th>USURAIO</th>
                                    <th hidden>OPCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($list as $item) {     
                                ?>
                                    <tr>
                                        <td type="hidden"><?php echo $item['id']; ?></td>
                                        <td><?php echo $item['placa']; ?></td>
                                        <td><?php echo $item['marca']; ?></td>
                                        <td><?php echo $item['color']; ?></td>
                                        <td><?php echo $item['estacionamiento']; ?></td>
                                        <td><?php echo $item['fecha']; ?></td>
                                        <td><?php echo $usuario->nombres; ?></td>
                                        <td>
                                            <input  id="btn_<?php echo $item['id']; ?>" class="btn btn-secondary btn-sm btn-circle margin" type="hidden" onclick="editModal(<?php echo $item['id']; ?>);" data-id="<?php echo $item['id']; ?>" data-placa="<?php echo $item['placa']; ?>"data-marca="<?php echo $item['marca']; ?>" data-color="<?php echo $item['color']; ?>"data-estacionamiento="<?php echo $item['estacionamiento']; ?>"data-fecha="<?php echo $item['fecha']; ?>"> <!-- data-estado="<?php //echo $item['id_provedor']; ?>"-->
                                                <!-- <span class="fa fa-pencil-alt"></span> -->
                                            
                                            <input type="hidden" class="btn btn-secondary btn-sm btn-circle margin" onclick="Eliminar(<?php echo $item['id']; ?>)">
                                                <!-- <span class="fa fa-trash"></span> -->
                                            
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
                <label class="col-12 control-label no-padding" for="placa">Placa</label>
                <div class="col-12 no-padding">
                    <input type="hidden" name="id" id="id">
                    <input type="hidden" name="option" value="U">
                    <input type="text" class="form-control input-sm" name="placa" id="placa" placeholder="Ingrese la placa del vehículo">
                </div>
            </div>
            <div class="form-group">
                <label class="col-12 control-label no-padding" for="marca">Marca</label>
                <div class="col-12 no-padding">
                    <!-- <input type="hidden" name="id" id="id">
                    <input type="hidden" name="option" value="U"> -->
                    <input type="text" class="form-control input-sm" name="marca" id="marca" placeholder="Ingrese la marca del vehículo">
                </div>
            </div>
            <div class="form-group">
                <label class="col-12 control-label no-padding" for="color">Color</label>
                <div class="col-12 no-padding">
                    <!-- <input type="hidden" name="id" id="id">
                    <input type="hidden" name="option" value="U"> -->
                    <input type="text" class="form-control input-sm" name="color" id="color" placeholder="Ingrese el color del vehículo">
                </div>
            </div>
            <div class="form-group">
                <label class="col-12 control-label no-padding" for="estacionamiento">Estacionamiento</label>
                <div class="col-12 no-padding">
                    <!-- <input type="hidden" name="id" id="id">
                    <input type="hidden" name="option" value="U"> -->
                    <input type="text" class="form-control input-sm" name="estacionamiento" id="estacionamiento" placeholder="Ingrese el estacionamiento del vehículo">
                </div>
            </div>
            <div class="form-group">
                <label class="col-12 control-label no-padding" for="fecha">Fecha de registro</label>
                <div class="col-12 no-padding">
                    <!-- <input type="hidden" name="id" id="id">
                    <input type="hidden" name="option" value="U"> -->
                    <input type="text" class="form-control input-sm" name="fecha" id="fecha" placeholder="Ingrese la fecha del registro del vehículo">
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
  <div class="modal-dialog modal-dialog-centered">
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
            <div class="form-group">
                <label class="col-12 control-label no-padding" for="placa">Placa</label>
                <div class="col-12 no-padding">
                    <input type="hidden" name="id" id="id">
                    <input type="hidden" name="option" value="C">
                    <input type="text" class="form-control input-sm" name="placa" id="placa" placeholder="Ingrese la placa del vehículo">
                </div>
            </div>
            <div class="form-group">
                <label class="col-12 control-label no-padding" for="marca">Marca</label>
                <div class="col-12 no-padding">
                    <!-- <input type="hidden" name="id" id="id">
                    <input type="hidden" name="option" value="U"> -->
                    <input type="text" class="form-control input-sm" name="marca" id="marca" placeholder="Ingrese la marca del vehículo">
                </div>
            </div>
            <div class="form-group">
                <label class="col-12 control-label no-padding" for="color">Color</label>
                <div class="col-12 no-padding">
                    <!-- <input type="hidden" name="id" id="id">
                    <input type="hidden" name="option" value="U"> -->
                    <input type="text" class="form-control input-sm" name="color" id="color" placeholder="Ingrese el color del vehículo">
                </div>
            </div>
            <div class="form-group">
                <label class="col-12 control-label no-padding" for="estacionamiento">Estacionamiento</label>
                <div class="col-12 no-padding">
                    <!-- <input type="hidden" name="id" id="id">
                    <input type="hidden" name="option" value="U"> -->
                    <input type="text" class="form-control input-sm" name="estacionamiento" id="estacionamiento" placeholder="Ingrese el estacionamiento del vehículo">
                </div>
            </div>
            <div class="form-group">
                <label class="col-12 control-label no-padding" for="fecha">Fecha de registro</label>
                <div class="col-12 no-padding">
                    <!-- <input type="hidden" name="id" id="id">
                    <input type="hidden" name="option" value="U"> -->
                    <input type="text" class="form-control input-sm" name="fecha" id="fecha" placeholder="Ingrese la fecha del registro del vehículo">
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
    $('#tabla').DataTable({  
        //para usar los botones   
        responsive: "true",
        dom: 'lfBrtip',       
    //     buttons:[ 
    //        'copyHtml5',
    //          'excelHtml5',
    //        'csvHtml5',
    //          'pdfHtml5'
		//  ]	 
    language: {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast":"Último",
                    "sNext":"Siguiente",
                    "sPrevious": "Anterior"
			     },
			     "sProcessing":"Procesando...",
            },    
     buttons:[ 
			{
				extend:    'excelHtml5',
				text:      '<i class="fa fa-file-excel"></i> ',
				titleAttr: 'Exportar a Excel',
				className: 'btn btn-success'
			},
			{
				extend:    'pdfHtml5',
				text:      '<i class="fa fa-file-pdf"></i> ',
				titleAttr: 'Exportar a PDF',
				className: 'btn btn-danger'
			},
			{
				extend:    'copyHtml5',
				text:      '<i class="fa fa-copy"></i> ',
				titleAttr: 'Copiar',
				className: 'btn btn-info'
			},
		]
     });
  } );
    function editModal(id) {
        $('#EditModal').modal('show');
        $('#edit').find('#id').val($('#btn_' + id).data('id'));
        $('#edit').find('#placa').val($('#btn_' + id).data('placa'));
        $('#edit').find('#marca').val($('#btn_' + id).data('marca'));
        $('#edit').find('#color').val($('#btn_' + id).data('color'));
        $('#edit').find('#estacionamiento').val($('#btn_' + id).data('estacionamiento'));
        $('#edit').find('#fecha').val($('#btn_' + id).data('fecha'));
        console.log($('#btn_' + id).data('id'));
    }

    function EditarRegistro() {
      let parametros = new FormData($('#edit')[0]);
      $.ajax({
        type: 'POST',
        url: '../ajax/forma-de-pago.php',
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

    function Registrar() {
      $.ajax({
        type: 'POST',
        url: '../ajax/forma-de-pago.php',
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
            url: '../ajax/forma-de-pago.php',
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