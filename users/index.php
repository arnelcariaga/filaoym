<?php
require './../conn/conn.php';
require './../session_variable.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<?php
	include $_SERVER["DOCUMENT_ROOT"] . '/header.php';
	include $_SERVER["DOCUMENT_ROOT"] . '/css.php';
	$users = "active";
	?>
</head>

<body id="app-container" class="menu-default show-spinner">
	<?php 
	include $_SERVER["DOCUMENT_ROOT"] . '/menu-top.php';
	include $_SERVER["DOCUMENT_ROOT"] . '/menu-left.php';
	?>

	<main>
		<div class="container-fluid">
			<?php include 'index-info.php';?>  

		</div>

	</main>

	<!-- Modal -->
	<div class="modal fade" id="modalAddUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Agregar usuario</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="POST" action="./../controller/add_user.php">
					<div class="modal-body">

						<div class="form-row">
							<div class="col-12">
								<label>Nombre</label>
								<input type="text" class="form-control" name="name" required>
							</div>
							<div class="col-12 mt-3">
								<label>Email</label>
								<input type="email" class="form-control" name="email" required>
							</div>
							<div class="col-6 mt-3">
								<label>Clave</label>
								<input type="password" class="form-control" name="pass" required>
							</div>
							<div class="col-6 mt-3">
								<label>Tipo de usuario</label>
								<select class="form-control" name="type" required>
									<?php
									$stmt_select_user_types = $PDO_conn->prepare(" CALL usp_user_types() ");
									$stmt_select_user_types->execute();
									$stmt_select_user_types->setFetchMode(PDO::FETCH_ASSOC);
									$fetch_users_types = $stmt_select_user_types->fetchAll();
									$stmt_select_user_types->closeCursor();
									foreach($fetch_users_types AS $row_user_type) { ?>
										<option value="<?php echo $row_user_type["id"]; ?>"><?php echo $row_user_type["descripcion"]; ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="col-6 mt-3">
								<label>Estado</label>
								<select class="form-control" name="status" id="exampleFormControlSelect1">
									<?php
									$stmt_select_user_status = $PDO_conn->prepare(" CALL usp_status() ");
									$stmt_select_user_status->execute();
									$stmt_select_user_status->setFetchMode(PDO::FETCH_ASSOC);
									$fetch_user_status = $stmt_select_user_status->fetchAll();
									$stmt_select_user_status->closeCursor();
									foreach($fetch_user_status AS $row_user_status) { ?>
										<option value="<?php echo $row_user_status["id_status"]; ?>"><?php echo $row_user_status["descripcion"]; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
						<button type="submit" class="btn btn-primary" name="btnAddUser">Agregar</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php
	include $_SERVER["DOCUMENT_ROOT"] . '/footer.php';
	include $_SERVER["DOCUMENT_ROOT"] . '/scripts.php';
	?>
</body>

</html>