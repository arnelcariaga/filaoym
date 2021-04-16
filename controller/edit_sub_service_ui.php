<?php
require './../conn/conn.php';
require './../utils/php_encrypt.php';
if (isset($_POST['SsId'])) {
	$sub_service_id = sed::decryption($_POST['SsId']);

	$stmt_select_sub_service = $PDO_conn->prepare(" CALL usp_father_services(?) ");
	$stmt_select_sub_service->execute([$sub_service_id]);
	$stmt_select_sub_service->setFetchMode(PDO::FETCH_ASSOC);
	$fetch_sub_services = $stmt_select_sub_service->fetchAll();
	$stmt_select_sub_service->closeCursor();

	$service_id = $_POST['sSId'];

	foreach($fetch_sub_services AS $row_sub_services) { ?>

		<form method="POST" action="./../controller/edit_sub_service.php">
			<input type="hidden" name="SsId" value="<?php echo $_POST['SsId']; ?>">
			<input type="hidden" name="sId" value="<?php echo $service_id; ?>">
			<input type="hidden" name="sN" value="<?php echo $_POST['sN']; ?>">
			<div class="form-row">

				<div class="form-group col-12">
					<label>Descripci&oacute;n</label>
					<input type="text" value="<?php echo $row_sub_services['descripcion']; ?>" class="form-control" name="description" required>
				</div>
				<div class="form-group col-12">
					<label>Posici&oacute;n</label>
					<select class="form-control" id="exampleFormControlSelect1" name="position" required>
						<?php
						for ($i=1; $i < 20+1; $i++) {
							if ($row_sub_services['posicion'] == $i) { ?>
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
						if ($row_sub_services['estado'] == 1) { ?>
							<option value="1" selected="">Habilitado</option>
							<option value="2">Deshabilitado</option>
							<?php
						}else{  ?>
							<option value="1">Habilitado</option>
							<option value="2" selected="">Deshabilitado</option>
						<?php } ?>
					</select>
				</div>

				<div class="form-group col-12">
					<label>Visible</label>
					<select class="form-control" id="exampleFormControlSelect1" name="visible" required>
						<?php
						if ($row_sub_services['visible'] == 1) { ?>
							<option value="1" selected="">Si</option>
							<option value="2">No</option>
							<?php
						}else{  ?>
							<option value="1">Si</option>
							<option value="2" selected="">No</option>
						<?php } ?>
					</select>
				</div>

			</div>

		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancelara</button>
			<button type="submit" name="btnEditSubService" class="btn btn-primary">Guardar</button>
		</div>
	</form>

<?php }

}
?>