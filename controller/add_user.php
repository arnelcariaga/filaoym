<?php
require './../conn/conn.php';

if (isset($_POST['btnAddUser'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$pass_hash = password_hash($pass, PASSWORD_DEFAULT);
	$type = $_POST['type'];
	$status = $_POST['status'];

	$default_profile_photo_path = './../img/facebook-profile-pic-vs-cover-photo-sq.webp';

	$null_users = "";
	$stmt_select_user = $PDO_conn->prepare(" CALL usp_users(?,?) ");
	$stmt_select_user->execute([$email, $null_users]);
	$user_exist = $stmt_select_user->rowCount();
	$stmt_select_user->closeCursor();

	if($user_exist != 0){
		echo "Usuario existe";
	}else{

		$stmt_add_user = $PDO_conn->prepare(" CALL usp_add_user(?,?,?,?,?,?) ");
		$stmt_add_user->execute([$name, $email, $pass_hash, $type, $status, $default_profile_photo_path]);

		if ($stmt_add_user) {
			header("location: ./../users");
		}

		$stmt_add_user->closeCursor();

	}
	
}

?>