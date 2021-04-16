<div class="container-fluid">

    <div class="col-12">
        <div class="mb-2">
            <h1>Servicios</h1>
            <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                <ol class="breadcrumb pt-0">
                    <li class="breadcrumb-item">
                        <a href="#">Inicio</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Servicios disponibles</li>
                </ol>
            </nav>

            <!-- Modal add service -->
            <div class="top-right-button-container">
                <button type="button" class="btn btn-outline-primary btn-lg top-right-button  mr-1" data-toggle="modal" data-backdrop="static" data-target="#modalAddServices">AGREGAR</button>
                <div class="modal fade modal-right" id="modalAddServices" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Agregar servicio</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form method="POST" action="./../controller/add_service.php">
                                    <div class="form-row" id="formAddServiceRow">
                                        <div class="form-group col-12">
                                            <label>T&iacute;tulo</label>
                                            <input type="text" class="form-control" placeholder="" name="title" required>
                                        </div>

                                        <div class="form-group col-12">
                                            <label>Descripci&oacute;n</label>
                                            <textarea class="form-control" rows="2" name="description" required></textarea>
                                        </div>
                                        <div class="form-group col-12">
                                            <label>Posici&oacute;n</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="position" required>
                                                <?php
                                                for ($i=1; $i < 20+1; $i++) { ?>
                                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                <?php }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-12">
                                            <label>Prioridad</label>
                                            <input type="number" class="form-control" value="1" name="preference" required/>
                                        </div>

                                        <div class="form-group col-6">
                                            <label>Duraci&oacute;n</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="duration" required>
                                                <?php
                                                for ($i=1; $i < 60+1; $i++) { ?>
                                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                <?php }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-6">
                                            <label>&#8205;</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="durationType" required>
                                                <option value="Minutos">Minutos</option>
                                                <option value="Horas">Horas</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-12">
                                            <label>Cola</label>
                                            <input class="form-control" type="number" value="1" name="queue" required/>
                                        </div>
                                        <div class="form-group col-12">
                                            <label>Turnos</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="turn" required>
                                                <?php
                                                for ($i=1; $i < 20+1; $i++) { ?>
                                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                <?php }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-12">
                                            <label>Estado</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="status" required>
                                                <option value="1">Habilitado</option>
                                                <option value="2">Deshabilitado</option>
                                            </select>
                                        </div>

                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancelara</button>
                                    <button type="submit" name="btnAddService" class="btn btn-primary">Grabar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End modal add service -->



        <!-- End modal edit service -->
        <div class="top-right-button-container">
            <div class="modal fade modal-right" id="modalEditServices" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Editar servicio</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body" id="editServiceModalBody">


                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End modal edit service -->


        <div class="separator mb-5"></div>
        <div class="row">
            <?php
            $null = '';
            $stmt_select_service = $PDO_conn->prepare(" CALL usp_services(?) ");
            $stmt_select_service->execute([$null]);
            $stmt_select_service->setFetchMode(PDO::FETCH_ASSOC);
            $fetch_services = $stmt_select_service->fetchAll();
            $stmt_select_service->closeCursor();

            foreach($fetch_services AS $row_services) { ?>
                <div class="col-lg-4 mb-4">
                    <div class="card d-flex flex-row">
                        <a class="d-flex" href="#" data-toggle="modal" data-backdrop="static" data-target="#modalEditServices" data-whatever="<?php echo sed::encryption($row_services['id_services']); ?>">
                            <div class="rounded-circle m-4 align-self-center list-thumbnail-letters small <?php echo $row_services['status'] == 2 ? "bg-danger" : ""; ?>">
                                <span class="text-uppercase"><?php echo substr($row_services['title'], 0, 1); ?></span>
                            </div>
                        </a>

                        <a class="text-primary position-absolute p-2 mr-1" style="right: 0;" href="#" data-toggle="modal" data-backdrop="static" data-target="#modalEditServices" data-whatever="<?php echo sed::encryption($row_services['id_services']); ?>">
                                <span class="text-small">Editar</span>
                        </a>
                        <div class=" d-flex flex-grow-1 min-width-zero">
                            <div class="card-body pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                <div class="min-width-zero">
                                    <a href="#" data-toggle="modal" data-backdrop="static" data-target="#modalEditServices" data-whatever="<?php echo sed::encryption($row_services['id_services']); ?>">
                                        <p class="list-item-heading mb-1 truncate"><?php echo $row_services['title']; ?></p>
                                    </a>
                                    <p class="mb-2 text-muted text-small"><strong>Estado:</strong>
                                        <?php
                                        if ($row_services['status'] == 1) {
                                            echo "Activo";
                                        }else{
                                            echo "Inactivo";
                                        }
                                        ?>
                                    </p>
                                    <p class="mb-2 text-muted text-small"><strong>Posici&oacute;n:</strong> <?php echo $row_services['position']; ?></p>
                                    <p class="mb-2 text-muted text-small" onclick="addSubServFunc('<?php echo sed::encryption($row_services['id_services']); ?>');"><a href="#" class="text-primary">Agregar sub-servicios</a></p>
                                    <p class="mb-2 text-muted text-small"><a href="servicios.php?sId=<?php echo sed::encryption($row_services['id_services']); ?>&sN=<?php echo sed::encryption($row_services['title']); ?>" class="text-primary">Ver sub-servicios</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
            ?>

        </div>
    </div>

</div>