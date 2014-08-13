var  $form =$('#formulario'),
	   $user= $('#user'),
     $pass=$('#pass'),
     $button = $('#mostrar-form'),

     $button_edit = $('#mostrar-edit'),
     $formdin =$('#dat_ini_new'),
     $formde =$('#dat_edit');

     $apellidos=$('#apellidos');

     

     //generación de contraseña 

     

var id=setInterval(function(){
       sessionStorage.setItem('user',$user.val());
       sessionStorage.setItem('pass',$pass.val());
   } ,1000);

function mostrarOcultarFormulario()
{
  var oculta =
  {
    display: "none"
  };
  $(".formulario").css(oculta);
	$form.slideToggle();
	$formdin.slideToggle();
	    
	return false;

}

function mostrarOcultarFormularioEditar()
{
  var oculta =
  {
    display: "none"
  };
  $(".formulario").css(oculta);
	$formde.slideToggle();
	    
	return false;

}




$button.click(mostrarOcultarFormulario);
$button_edit.click(mostrarOcultarFormularioEditar);

