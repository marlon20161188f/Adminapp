
<head>
  <style>
    .heading { color: #480000; }
    .letra{font-weight: 700;}
  </style>
</head>
<div class="container text-center" style="width: 1000px;">
<div ><div class="container text-center" style="width: 550px;">
<h1 class="float-left text-center text-md-center" style="color: white">INGRESE NÚMERO DE PLACA</h1>
      <img class="d-block w-20" src="<?php echo $url_site; ?>images/estacionamiento1.jpg" alt="First slide">
      </div>
</div>
            <div class="well well-sm ">
            <form method="post">
                        <div class="form-group mt-0">
                            <span class="col-md-1 col-md-offset-2 "><i class="fa fa-car"></i></span>
                            <div class="input-group-lg text-center  mt-1">
                                <input id="caja_busqueda" required name="PLACA" type="text" placeholder="Ingrese placa" class="form-control text-center mx-auto" style="width: 200px;" maxlength="6" >
                                
                                <!-- <input required name="PLACA" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese palabra clave">    placeholder="Usern" pattern="[A-Z]"-->
                                <input name="usuario" type="hidden"value="<?php echo $usuario->id_tipo_usuario?> ">
                            </div>
                        </div>
                        <div id="datos"></div>
                        
                        <!-- <div class="form-group text-center"> Submit Button 
                        <button type="submit" class="btn btn-primary  btn-lg ">Consultar</button>
                         </div>  -->
            <!-- </form> 
        </div>  -->
    

<script src="js/main1.js"></script>
<script type="text/javascript">
</script>

