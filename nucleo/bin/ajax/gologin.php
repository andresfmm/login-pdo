

<?php


	
	
	   require('../../modelo/conexion.php');
	  $db=new conexion();
	$us= $_POST["usuario_login"];
    $pas= $_POST["pass_login"];
   
    sleep(1);
     $query=$db->prepare("select id,usuario from usuarios where(usuario='$us' or email='$us') and pass='$pas' limit 1 ");
     $query->execute();

        if($query->Rowcount() > 0){
     	$fila=$query->fetch();
         session_start();
        if($_POST["sesion_login"]){ini_set("session.cookie_lifetime", time()+(60*60*24));}
        $_SESSION['app_id']=$fila['id'];
        $_SESSION['usuario']=$fila['usuario'];
        
            
      

     	echo "<script>location.reload()</script>";
        $query =null;

     }else{
     	echo '<div class="alert alert-dismissible alert-danger">
             <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>Usuario o contraseña incorrectos</strong>
              </div>';
     }



?>