$(buscar_datos());
function Registrar() {
  let parametros = new FormData($('#register')[0]);
  $.ajax({
     type: 'POST',
     url: '../ajax/ingreso.php',
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
function buscar_datos(consulta){
    $.ajax({
        url: '../ajax/buscar.php',
        type: 'POST',
        dataType: 'html',
        data: {consulta: consulta},
    })
    .done(function(respuesta){
        $("#datos").html(respuesta);
    })
    .fail(function(){
        console.log("error");
    })
}
$(document).on('keyup','#caja_busqueda',function(){
    var valor=$(this).val();
    numeroCaracteres = valor.length;
    if(numeroCaracteres == 6){
        buscar_datos(valor);
    }else{
        buscar_datos();
    }
})
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
      }
    });
  }