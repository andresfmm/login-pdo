

function gologin(){
    
    var mensaje;
   var user= __('usuario_login').value;
   var pass= __('pass_login').value;
    var sesion= __('sesion_login').checked ? true : false;

   if (user && pass !='') {

   var url="nucleo/bin/ajax/validar_envio.php";


   $.ajax({

    beforeSend:function(){

         mensaje ='<div class="alert alert-dismissible alert-success">';
         mensaje +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
         mensaje +='<strong>Estamos intentando logearte...</strong>' ;
         mensaje +='<img src="imagenes/ajax-loader.gif">';
         mensaje +='</div>';
        
        $('#res').html(mensaje);

        

    },

     type:"POST",
     url:url,
     data:{usuario_login:user, pass_login:pass, sesion_login:sesion},

     success:function(dato){
      $('#res').html(dato);
      location.reload();
     }

   })
 }else{

      mensaje ='<div class="alert alert-dismissible alert-danger">';
         mensaje +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
         mensaje +='<strong>Debes diligenciar los campos del formulario</strong>' ;
         mensaje +='</div>';
         $('#res').html(mensaje);
 }
}



function scriptlogin(e){

     if(e.keyCode==13){

     	gologin();
     }
}