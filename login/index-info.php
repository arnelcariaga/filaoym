<div class="row justify-content-center align-items-center">
    <div class="col-6">
        <div class="row listing-card-container">

            <div class="col-lg-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-4">Iniciar sesi&oacute;n</h5>
                        <form method="POST" action="./../controller/login.php">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Correo" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputPassword3" name="pass" placeholder="Contraseña" required>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary mb-0" name="btnLogin">Iniciar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>