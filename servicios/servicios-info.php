<div class="container-fluid">

    <div class="col-12">
        <div class="mb-2">
            <h1><?php echo sed::decryption($service_name); ?></h1>
            <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                <ol class="breadcrumb pt-0">
                    <li class="breadcrumb-item">
                        <a href="#">Inicio</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Servicios disponibles</li>
                </ol>
            </nav>
            <div class="top-right-button-container">
                <button type="button" class="btn btn-outline-primary btn-lg top-right-button  mr-1" data-toggle="modal" data-backdrop="static" data-target="#exampleModal">AGREGAR</button>
                <div class="modal fade modal-right" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Agregar servicio</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form>
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label>Details</label>
                                        <textarea class="form-control" rows="2"></textarea>
                                    </div>

                                    

                                    
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancelara</button>
                                <button type="button" class="btn btn-primary">Grabar</button>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        
        <div class="separator mb-5"></div>
        
        
        <div class="row">
            <div class="col-12 mb-4 data-table-rows data-tables-hide-filter">
                <div id="datatableRows_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><table id="" class="data-table responsive nowrap dataTable no-footer dtr-inline"  role="grid" style="width: 1322px;">
                    <thead>
                        <tr role="row"><th tabindex="0" aria-controls="datatableRows" rowspan="1" colspan="1" style="width: 396px;">Servicio</th><th tabindex="0" aria-controls="datatableRows" rowspan="1" colspan="1" style="width: 156px;" >Estado</th><th tabindex="0" aria-controls="datatableRows" rowspan="1" colspan="1" style="width: 159px;">Prioridad</th><th tabindex="0" aria-controls="datatableRows" rowspan="1" colspan="1" style="width: 210px;" >Duraci&oacute;n</th></tr>
                    </thead>
                    <tbody>

                        <?php
                        $service_id = sed::decryption($_GET['sId']);
                        $stmt_select_father_service = $PDO_conn->prepare(" CALL usp_father_services_sub_services(?) ");
                        $stmt_select_father_service->execute([$service_id]);
                        $stmt_select_father_service->setFetchMode(PDO::FETCH_ASSOC);
                        $fetch_father_services = $stmt_select_father_service->fetchAll();
                        $stmt_select_father_service->closeCursor();

                        if ($fetch_father_services > 0) {
                         foreach($fetch_father_services AS $row_father_services) { ?>
                            <tr role="row" class="odd">
                                <td tabindex="0"><p class="list-item-heading"><?php echo $row_father_services['descripcion']; ?></p></td>
                                <td class="sorting_1"><p class="text-muted"><?php echo $row_father_services['estado']; ?></p></td>
                                <td><p class="text-muted"><?php echo $row_father_services['preference']; ?></p></td>
                                <td><p class="text-muted"><?php echo $row_father_services['duration']; ?></p></td>
                                <td>
                                    <button class="badge badge-success" data-toggle="modal" data-backdrop="static" data-target="#modalEditSubServices" data-ssid="<?php echo $_GET['sId']; ?>" data-whatever="<?php echo sed::encryption($row_father_services['id']); ?>">Editar</button>
                                </td>
                            </tr> 
                        <?php }
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- End modal edit sub-service -->
<div class="top-right-button-container">
    <div class="modal fade" id="modalEditSubServices" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar sub-servicio</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" id="editSubServiceModalBody">


                </div>
            </div>
        </div>

    </div>
</div>
<!-- End modal edit sub-service -->



</div>

</div>