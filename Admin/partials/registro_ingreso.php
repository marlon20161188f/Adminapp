<?php
    $list = clsIngreso::Listar(Conexion::getInstancia());
    //$list_estados = clsEstado::ListarActivo(Conexion::getInstancia());
?>
<div class="col-sm-12">
    <section class="row">
        <div class="col-lg-12">
        <div id="MessageCrud"></div>
            <div class="card mb-4">
                <div class="card-block">
                    <h3 class="card-title">Registro de ingreso vehícular</h3>

                    <div class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <table class="table table-striped" width="100%" id='tabla'>
                            <thead>
                                <tr>
                                    <th>PLACA</th>
                                    <th>FECHA</th>
                                    <!-- <th>USUARIO</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($list as $item) {     
                                ?>
                                    <tr>
                                        <td><?php echo $item['placa']; ?></td>
                                        <td><?php echo $item['fecha']; ?></td>
                                        <!-- <td><?php// echo $item['usuario']; ?></td> -->
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
