

<?php

require('nucleo/core.php');

if (isset($_GET['view'])) {
	
	if(file_exists('nucleo/controladores/'. strtolower($_GET['view']) . 'controlador.php')){

		include('nucleo/controladores/'. strtolower($_GET['view']) . 'controlador.php');
	
}else{

	include('nucleo/controladores/error.php');
}
}else{

	include('nucleo/controladores/controlador.php');
}



?>