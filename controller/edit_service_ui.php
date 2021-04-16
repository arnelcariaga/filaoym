<?php
require './../conn/conn.php';
require './../utils/php_encrypt.php';
if (isset($_POST['sId'])) {
	$service_id = sed::decryption($_POST['sId']);

	$stmt_select_service = $PDO_conn->prepare(" CALL usp_services(?) ");
	$stmt_select_service->execute([$service_id]);
	$stmt_select_service->setFetchMode(PDO::FETCH_ASSOC);
	$fetch_services = $stmt_select_service->fetchAll();
	$stmt_select_service->closeCursor();

	foreach($fetch_services AS $row_services) { ?>

		<form method="POST" action="./../controller/edit_service.php">
			<input type="hidden" name="sId" value="<?php echo $_POST['sId']; ?>">
			<div class="form-row">
				<div class="form-group col-12">
					<label>T&iacute;tulo</label>
					<input type="text" class="form-control" placeholder="" name="title" required value="<?php echo $row_services['title']; ?>">
				</div>

				<div class="form-group col-12">
					<label>Descripci&oacute;n</label>
					<textarea class="form-control" rows="2" name="description" required><?php echo $row_services['description']; ?></textarea>
				</div>
				<div class="form-group col-12">
					<label>Posici&oacute;n</label>
					<select class="form-control" id="exampleFormControlSelect1" name="position" required>
						<?php
						for ($i=1; $i < 20+1; $i++) {
							if ($row_services['position'] == $i) { ?>
								<option value="<?php echo $i; ?>" selected=""><?php echo $i; ?></option>
							<?php }else{ ?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php }
						}
						?>
					</select>
				</div>
				<div class="form-group col-12">
					<label>Prioridad</label>
					<input type="number" class="form-control" value="<?php echo $row_services['preference']; ?>" name="preference" required/>
				</div>

				<div class="form-group col-6">
					<label>Duraci&oacute;n</label>
					<select class="form-control" id="exampleFormControlSelect1" name="duration" required>
						<?php
						for ($i=1; $i < 60+1; $i++) {
							if ($row_services['duration'] == $i) { ?>
								<option value="<?php echo $i; ?>" selected=""><?php echo $i; ?></option>
							<?php }else{ ?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php }
						}
						?>
					</select>
				</div>
				<div class="form-group col-6">
					<label>&#8205;</label>
					<select class="form-control" id="exampleFormControlSelect1" name="durationType" required>
						<?php
						if ($row_services['duration_type'] == "Minutos") { ?>
							<option value="Minutos" selected="">Minutos</option>
							<option value="Horas">Horas</option>
							<?php
						}else{ ?>
							<option value="Minutos">Minutos</option>
							<option value="Horas" selected="">Horas</option>
						<?php } ?>
					</select>
				</div>

				<div class="form-group col-12">
					<label>Cola</label>
					<input class="form-control" type="number" value="<?php echo $row_services['queue']; ?>" name="queue" required/>
				</div>
				<div class="form-group col-12">
					<label>Turnos</label>
					<select class="form-control" id="exampleFormControlSelect1" name="turn" required>
						<?php
						for ($i=1; $i < 20+1; $i++) {
							if ($row_services['turn'] == $i) { ?>
								<option value="<?php echo $i; ?>" selected=""><?php echo $i; ?></option>
							<?php }else{ ?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php }
						}
						?>
					</select>
				</div>
				<div class="form-group col-12">
					<label>Estado</label>
					<select class="form-control" id="exampleFormControlSelect1" name="status" required>
						<?php
						if ($row_services['status'] == 1) { ?>
							<option value="1" selected="">Habilitado</option>
							<option value="2">Deshabilitado</option>
							<?php
						}else{  ?>
							<option value="1">Habilitado</option>
							<option value="2" selected="">Deshabilitado</option>
						<?php } ?>
					</select>
				</div>

			</div>

		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancelara</button>
			<button type="submit" name="btnEditService" class="btn btn-primary">Guardar</button>
		</div>
	</form>

<?php }

}
?>