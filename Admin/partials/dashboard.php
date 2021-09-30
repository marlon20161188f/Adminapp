<head>
  <style>
    .heading { color: #480000; }
    .letra{font-weight: 700;}
  </style>
</head>
<div class="container text-center" style="width: 1000px;">
<div ><div class="container text-center" style="width: 550px;">
<h2 class="float-left text-center text-md-center" style="color:#004FB9;line-height: 1;
    text-rendering: optimizeLegibility;">INGRESE NÚMERO DE PLACA</h2>
      <img style="border-radius: 20px; box-shadow: 0 0 8px 8px white inset;" class=" circle d-block w-100" width="800" height="300"src="<?php echo $url_site; ?>images/logo.jpeg" alt="First slide">
      </div>
</div>
            <div class="well well-sm ">
            <form method="post">
                        <div class="form-group mt-0">
                            <span class="col-md-1 col-md-offset-2 "><i class="fa fa-car"></i></span>
                            <div class="input-group-lg text-center  mt-1">
                                <input id="caja_busqueda" required name="PLACA" type="text" placeholder="Ingrese placa" class="form-control text-center mx-auto" style="width: 200px;" maxlength="6" >
                                <!-- <input required name="PLACA" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese palabra clave">    placeholder="Usern" pattern="[A-Z]"-->
                                <!-- <input name="buscar" type="hidden" class="form-control mb-2" id="caja_busqueda"value="v"> -->
                            </div>
                        </div>
                        <div id="datos"></div>
                        <!-- <div class="form-group text-center"> Submit Button 
                        <button type="submit" class="btn btn-primary  btn-lg ">Consultar</button>
                         </div>  -->
            </form> 
                         <!-- <div class="col-auto">
                           <button type="submit" class="btn btn-primary mb-2">Buscar Ahora</button>
                          </div> -->
                          <!-- <div class="col-sm-12">
                          <section class="row">
                          <div class="col-lg-12">
                          <div class="card mb-4">
                          <div class="card-block">
                          <div class="dataTables_wrapper container-fluid dt-bootstrap4">
                          <table class="table table-striped" width="50%" id='tabla'>
                          <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Producto</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                          <tbody> -->
                   <?php
                    // //include('clases/clsConsulta.php');
                    // if(!empty($_POST))
                    //       {
                    //             $aKeyword = explode(" ", $_POST['PLACA']);                     
                    //             $listado = clsConsulta::Listar(Conexion::getInstancia(),$aKeyword);       
                              ?>
                              <!-- <div class="col-sm-12">
    <section class="row">
        <div class="col-lg-12">
        <div id="MessageCrud"></div>
            <div class="card mb-4">
                <div class="card-block">
                    <div class="col-12 widget-right no-padding">
                        <button class="btn btn-primary btn-md float-right" data-toggle="modal" data-target="#RegisterModal">
                            <i class="fa fa-plus"></i> Reg. Ingreso
                        </button>
                    </div>
                    <?php //echo "<h3>Has buscado la placa:". $_POST['PLACA']."</h3>";?>

                    <div class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <table class="table table-striped" width="100%" id='tabla'>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>MODELO</th>
                                    <th>ESTACIONAMIENTO</th>
                                    <th>FECHA DE REGISTRO</th>
                                    <th>PLACA</th> 
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
</div>-->
                          <?php
                              // if($result->rowCount() > 0) {
                              //     $row_count=0;
                              //     echo "<br><br>Resultados encontrados: ";
                              //     echo "<br><table class='table table-striped'>";
                              //     While($row = $result->fetchAll()) {   
                              //         $row_count++;                         
                              //         echo "<tr><td>".$row_count." </td><td>". $row['lenguaje'] . "</td><td>". $row['descripcion'] . "</td></tr>";
                              //     }
                                  
                              //     echo "</table>";
                            
                              // }
                              // else {
                              //     echo "<br>Resultados encontrados: No existe placa registrada";
                              
                              // }
                          //}
                   ?>
        </div>
    
</div>
<!-- <div class="modal fade" id="RegisterModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="RegisterModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Registrar Vehículo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" id="register">
            <div class="row">
            <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-12 control-label no-padding" for="nombre">Nombre del propietario</label>
                        <div class="col-12 no-padding">
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese el nombre del propietario">
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
                        <label class="col-12 control-label no-padding" for="direccion">Modelo</label>
                        <div class="col-12 no-padding">
                            <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Ingrese el modelo del vehículo">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-12 control-label no-padding" for="foto">Estacionamiento asignado</label>
                        <div class="col-12 no-padding">
                            <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Ingrese el número de estacionamiento">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-12 control-label no-padding" for="horario">Fecha de Registro</label>
                        <div class="col-12 no-padding">
                            <input type="text" class="form-control" name="horario" id="horario" placeholder="Ingrese la fecha de registro">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-12 control-label no-padding" for="monto">PLACA</label>
                        <div class="col-12 no-padding">
                            <input type="text" class="form-control" name="monto" id="monto" placeholder="Ingrese número de placa">
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
</div> -->
<!-- 
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
           // {
               // "data": "id",
                // "render": function(data, type, row) {
                //     return '<button id="btn_'+ data +'" class="btn btn-secondary btn-sm btn-circle margin" type="button" onclick="editModal('+ data +');" data-id="'+ data +'" data-nombre="'+ row['nombre'] +'" data-foto="'+ row['foto'] +'" data-direccion="'+ row['direccion'] +'" data-horario="'+ row['horario'] +'" data-telefono="'+ row['telefono'] +'" data-monto="'+ row['monto_minimo'] +'" data-tiempo="'+ row['tiempo_entrega'] +'"  data-estado="'+ row['id_provedor'] +'"><span class="fa fa-pencil-alt"></span></button><button class="btn btn-secondary btn-sm btn-circle margin" onclick="Eliminar('+ data +')"><span class="fa fa-trash"></span></button>';
                // }
           // }

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
    <script src="js/main.js"><</script>
</script> -->
<script src="js/main1.js"></script>
<script type="text/javascript">
</script>

