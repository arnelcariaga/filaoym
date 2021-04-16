<?php
unset($_COOKIE['userLogged']);
unset($_COOKIE['uID']);
unset($_COOKIE['userName']);
unset($_COOKIE['fotoProfilePath']);
unset($_COOKIE['userEmail']);
unset($_COOKIE['userType']);
unset($_COOKIE['userTypeDescript']);

setcookie("userLogged", '', time() - 18000, '/');
setcookie("uID", '', time() - 18000, '/');
setcookie("userName", '', time() - 18000, '/');
setcookie("fotoProfilePath", '', time() - 18000, '/');
setcookie("userEmail", '', time() - 18000, '/');
setcookie("userType", '', time() - 18000, '/');
setcookie("userTypeDescript", '', time() - 18000, '/');

header("location: ./../login/");
?>