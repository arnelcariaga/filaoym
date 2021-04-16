<?php
require './../conn/conn.php';
require './../session_variable.php';

if (isset($_POST)) {
	$user_id_decry = sed::decryption($uID);
	$default_profile_photo = sed::decryption($photo_profile_path);

	$name = $_POST['inputName'];
	$pass = $_POST['inputPass'];
	if ($pass == "") {
		$pass_hash = "";
	}else{
		$pass_hash = password_hash($pass, PASSWORD_DEFAULT);
	}

	

	//If image profile are set
	if ($_FILES !== []) {

		/* Getting file name */
		$file_name = $_FILES['file']['name'];

		/* Getting file size */
		//$file_size = $_FILES['file']['size'];
		
		/* Location */
		$location = "./../uploads/".$file_name;

		/*File type*/
		//$image_file_type = pathinfo($location,PATHINFO_EXTENSION);

		/* Upload file */
		if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
			$default_profile_photo = $location;
		}else{
			echo "Error al actualizar la foto de perfil";
		}

	}

	$stmt_update_user = $PDO_conn->prepare(" CALL usp_update_user_profile(?,?,?,?) ");
	$stmt_update_user->execute([$name, $pass_hash, $user_id_decry, $default_profile_photo]);
	$stmt_update_user->closeCursor();

	if($stmt_update_user){
		setcookie("userName", sed::encryption($name), time()+18000, '/');
		setcookie("fotoProfilePath", sed::encryption($default_profile_photo), time()+18000, '/');

		echo "Bien";
	}else{
		echo "Mal";
	}

}
?>