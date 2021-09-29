<?php
    $list = clsPago::Listar(Conexion::getInstancia());
    //$list_estados = clsEstado::ListarActivo(Conexion::getInstancia());
?>
<div class="col-sm-12">
    <section class="row">
        <div class="col-lg-12">
        <div id="MessageCrud"></div>
            <div class="card mb-4">
                <div class="card-block">
                    <div class="col-12 widget-right no-padding">
                        <button class="btn btn-primary btn-md float-right" data-toggle="modal" data-target="#RegisterModal">
                            <i class="fa fa-plus"></i> Registrar nuevo vehículo
                        </button>
                    </div>
                    <h3 class="card-title">Lista de Vehículos Registrados</h3>

                    <div class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <table class="table table-striped" width="100%" id='tabla'>
                            <thead>
                                <tr>
                                    <th>PLACA</th>
                                    <th>MARCA</th>
                                    <th>COLOR</th>
                                    <th>ESTACIONAMIENTO</th>
                                    <th>FECHA</th>
                                    <th>OPCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($list as $item) {     
                                ?>
                                    <tr>
                                        <td><?php echo $item['placa']; ?></td>
                                        <td><?php echo $item['marca']; ?></td>
                                        <td><?php echo $item['color']; ?></td>
                                        <td><?php echo $item['estacionamiento']; ?></td>
                                        <td><?php echo $item['fecha']; ?></td>
                                        <td>
                                            <button id="btn_<?php echo $item['id']; ?>" class="btn btn-secondary btn-sm btn-circle margin" type="button" onclick="editModal(<?php echo $item['id']; ?>);" data-id="<?php echo $item['id']; ?>" data-placa="<?php echo $item['placa']; ?>"data-marca="<?php echo $item['marca']; ?>" data-color="<?php echo $item['color']; ?>"data-estacionamiento="<?php echo $item['estacionamiento']; ?>"data-fecha="<?php echo $item['fecha']; ?>"> <!-- data-estado="<?php //echo $item['id_provedor']; ?>"-->
                                                <span class="fa fa-pencil-alt"></span>
                                            </button>
                                            <button class="btn btn-secondary btn-sm btn-circle margin" onclick="Eliminar(<?php echo $item['id']; ?>)">
                                                <span class="fa fa-trash"></span>
                                            </button>
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