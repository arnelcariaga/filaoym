<?php
require './../conn/conn.php';
require './../utils/php_encrypt.php';

if (isset($_POST['btnLogin'])) {
	
	$email = $_POST['email'];
	$pass = $_POST['pass'];

	$null_users = "";
	$stmt_select_user_by_email = $PDO_conn->prepare(" CALL usp_users(?,?) ");
	$stmt_select_user_by_email->execute([$email,$null_users]);
	$user_exist = $stmt_select_user_by_email->rowCount();

	if($user_exist != 0){

		if ($stmt_select_user_by_email) {
			$stmt_select_user_by_email->setFetchMode(PDO::FETCH_ASSOC);
			$row_users = $stmt_select_user_by_email->fetchAll();
			if(password_verify($pass, $row_users[0]['clave'])) {
				
				foreach($row_users AS $row_user) {
					setcookie("userLogged", true, time()+18000, '/');
					setcookie("uID", sed::encryption($row_user['userId']), time()+18000, '/');
					setcookie("userName", sed::encryption($row_user['usuario']), time()+18000, '/');
					setcookie("fotoProfilePath", sed::encryption($row_user['fotoProfilePath']), time()+18000, '/');
					setcookie("userEmail", sed::encryption($row_user['email']), time()+18000, '/');
					setcookie("userType", sed::encryption($row_user['userType']), time()+18000, '/');
					setcookie("userTypeDescript", sed::encryption($row_user['tipousuarioDescription']), time()+18000, '/');

					header("location: ./../profile");
				}
				
			}else{
				echo "Usuario no existe o contrase&ntilde;a incorrecta";
			}

		}

		$stmt_select_user_by_email->closeCursor();
		
	}else{

		echo "Usuario no existe o contrase&ntilde;a incorrecta";

	}
}
?>