
<?php
function usuarios(){


	require('../../modelo/conexion.php');
	  $db=new conexion();

	  $sql=$db->prepare("select * from usuarios");
	  $sql->execute();

	  if($sql->Rowcount()>0){

         $fila=$sql->fetch();
           
             $user=[$id['id']]= array{

             	'id' = $id['id'],
             	'usuario' = $id['usuario'],
             	'pass' = $id['pass'],
             	'email' = $id['email'],
             	'rol' = $id['rol'],
             }
	  }else{

	  	 $user = false;
	  }

	  $sql=null;

	  return  $user;
}

?>