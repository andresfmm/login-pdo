

<?php
/*este es el nucleo de la aplicacion*/
session_start();
#constantes de conexion
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','meza');


#constantes de la app
define('HTML_DIR','html/');
define('APP_TITTLE','pagina meza');
define('APP_COPY','copy right: '.date('y',time()) .'andres meza');
define('APP_URL','http://localhost/paginameza/');



#estructura
require('vendor/autoload.php');








?>