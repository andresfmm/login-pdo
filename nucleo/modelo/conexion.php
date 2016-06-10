
<?php

//Clase base de datos extends PDO
 class conexion extends PDO{    
     //Funcion Hija, llamada constructor
     public function __construct() {
         //Funcion constructor
         //Intente
         try{
             //conecta con la base de datos.
             parent::__construct('mysql:host=localhost;dbname=meza','root','');
              parent::exec("set names utf8");
             //constructor hijo.
             parent::setAttribute(PDO::ATTR_ERRMODE,
                     PDO::ERRMODE_EXCEPTION);
               
         } catch (Exception $ex) {
             //Error tipo exepcion por si no existe la conexion.
             die('Error base de datos inexistente!');
         }
     }
     } 





?>