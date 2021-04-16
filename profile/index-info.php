<div class="row">
    <div class="col-12">
        <div class="mb-2">
            <h1>Perfil de usuario</h1>
            
            <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                <ol class="breadcrumb pt-0">
                    <li class="breadcrumb-item">
                        <a href="#">Inicio</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Informaci&oacute;n de su cuenta</li>
                </ol>
            </nav>
        </div>
        
        <div class="separator mb-5"></div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-lg-5 col-xl-4 col-left">
        <div class="card mb-4">
            <div class="position-absolute card-top-buttons">
                <form method="post" action="" enctype="multipart/form-data" id="myform">
                    <label class="btn btn-outline-white icon-button">
                        <i class="simple-icon-pencil"></i> <input type="file" id="file" onChange="showPreview(this);" name="file" hidden>
                    </label>
                </form>
            </div>
            <?php
            $user_id_decry = sed::decryption($uID);
            $user_email_decry = sed::decryption($user_email);
            $stmt_select_user_data = $PDO_conn->prepare(" CALL usp_users(?,?) ");
            $stmt_select_user_data->execute([$user_email_decry, $user_id_decry]);
            $stmt_select_user_data->setFetchMode(PDO::FETCH_ASSOC);
            $fetch_user_data = $stmt_select_user_data->fetchAll();

            foreach($fetch_user_data AS $user_data) { ?>
                <img src="<?php echo $user_data['fotoProfilePath']; ?>" height="529" width="529" id="imgProfile" alt="Detail Picture" class="card-img-top">

                <div class="card-body">
                    <p class="text-muted text-small mb-2">Tipo de cuenta</p>
                    <p class="mb-3">
                        Descripcion de la cuenta y niveles de accesos
                    </p>

                    <p class="text-muted text-small mb-2">Localidad</p>
                    <p class="mb-3">Nombre y direccion de la localidad</p>

                    <p class="text-muted text-small mb-2">Cuenta</p>
                    <p class="mb-3">
                        <a href="#">
                            <span class="badge badge-pill badge-outline-theme-2 mb-1"><?php echo sed::decryption($user_type_descript); ?></span>
                        </a>

                    </p>

                </div>
            </div>

        </div>
        <div class="col-12 col-lg-7 col-xl-8 col-right">
            <div class="row listing-card-container">

                <div class="col-lg-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-4">Datos de la cuenta</h5>
                            <form id="editProfileForm">
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">Nombre</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputName" name="name" placeholder="Nombre" value="<?php echo $user_data['usuario']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Correo electr&oacute;nico</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="<?php echo $user_data['email']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pass" class="col-sm-2 col-form-label">Contrase&ntilde;a</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="pass" name="pass" placeholder="**********">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="confirmPass" class="col-sm-2 col-form-label">Repetir contrase&ntilde;a</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="confirmPass" name="confirmPass" placeholder="**********">
                                        <span id='errorPassConfirmMsj'></span>
                                    </div>
                                </div>
                            <?php }

                            $stmt_select_user_data->closeCursor();
                            ?>

                            <div class="form-group row mb-0">
                                <div class="col-sm-10">
                                    <button type="button" id="btnEditUser" name="btnEditUser" class="btn btn-primary mb-0 btn-edit-user">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>




        </div>
    </div>
</div>