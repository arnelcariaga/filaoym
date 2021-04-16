<?php
require './../conn/conn.php';
require './../utils/php_encrypt.php';

if (isset($_POST['btnEditService'])) {
	$title = $_POST['title'];
	$description = $_POST['description'];
	$position = $_POST['position'];
	$preference = $_POST['preference'];
	$duration = $_POST['duration'];
	$duration_type = $_POST['durationType'];
	$queue = $_POST['queue'];
	$turn = $_POST['turn'];
	$status = $_POST['status'];

	$service_id = sed::decryption($_POST['sId']);

	$stmt_update_service = $PDO_conn->prepare(" CALL usp_update_service(?,?,?,?,?,?,?,?,?,?) ");
	$stmt_update_service->execute([$title,$description,$position,$preference,$duration,$duration_type,$queue,$turn,$status,$service_id]);
	$stmt_update_service->closeCursor();

	if ($stmt_update_service) {
		header("location: ./../servicios");
	}
	
}

?>