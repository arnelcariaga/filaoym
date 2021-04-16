<?php
require './../conn/conn.php';
require './../utils/php_encrypt.php';

if (isset($_POST['btnAddService'])) {
	$title = $_POST['title'];
	$description = $_POST['description'];
	$position = $_POST['position'];
	$preference = $_POST['preference'];
	$duration = $_POST['duration'];
	$duration_type = $_POST['durationType'];
	$queue = $_POST['queue'];
	$turn = $_POST['turn'];
	$status = $_POST['status'];

	if (isset($_POST['fatherService'])) {
		$father_service = sed::decryption($_POST['fatherService']);
		$visible = 1;
		
		$stmt_add_service = $PDO_conn->prepare(" CALL usp_add_father_services(?,?,?,?,?) ");
		$stmt_add_service->execute([$title,$visible,$position,$status,$father_service]);
		$stmt_add_service->closeCursor();
	}else{

		$stmt_add_service = $PDO_conn->prepare(" CALL usp_add_services(?,?,?,?,?,?,?,?,?) ");
		$stmt_add_service->execute([$title,$description,$position,$preference,$duration,$duration_type,$queue,$turn,$status]);
		$stmt_add_service->closeCursor();

	}

	if ($stmt_add_service) {
		header("location: ./../servicios");
	}
	
}

?>