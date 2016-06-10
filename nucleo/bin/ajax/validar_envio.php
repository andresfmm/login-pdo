
<?php




if (isset($_POST["usuario_login"]) && isset($_POST["pass_login"])) {
	


	include('gologin.php');
}else{

		header('location: ../../../index.php');
}


?>