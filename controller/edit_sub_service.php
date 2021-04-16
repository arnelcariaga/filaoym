<?php
require './../conn/conn.php';
require './../utils/php_encrypt.php';

if (isset($_POST['btnEditSubService'])) {
	$descripcion = $_POST['description'];
	$position = $_POST['position'];
	$status = $_POST['status'];
	$visible = $_POST['visible'];

	$sub_service_id = sed::decryption($_POST['SsId']);

	$stmt_update_sub_service = $PDO_conn->prepare(" CALL usp_update_sub_service(?,?,?,?,?) ");
	$stmt_update_sub_service->execute([$sub_service_id,$descripcion,$visible,$position,$status]);
	$stmt_update_sub_service->closeCursor();

	if ($stmt_update_sub_service) {
		header("location: ./../servicios/servicios.php?sId=".$_POST['sId']."&sN=".$_POST['sN']);
	}
	
}

?>