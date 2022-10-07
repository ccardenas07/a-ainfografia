function valida_correo(correo) {
		  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(correo)){
			
		   return (true)
		  } else {
		   
		   return (false);
		  }
		 }

function limpiar_logueo()
{
	document.form.reset();
	document.form.user.focus();
}
function validar_logueo()
{
	var form=document.form;
	if (form.user.value==0)
	{
		alert("Ingrese su Login");
		form.user.value="";
		form.user.focus();
		return false;
	}
	if (form.pass.value==0)
	{
		alert("Ingrese su Password");
		form.pass.value="";
		form.pass.focus();
		return false;
	}
	
	form.pass.value=calcMD5(form.pass.value);
	form.submit();
	
}
function valida_registro()
{
	var form=document.form;	
	if (form.nombre.value==0)
	{
		//alert("Ingrese su Nombre");
		document.getElementById("error").innerHTML="<font color='black'>El campo Nombre es requerido</font>";
		form.nombre.value="";
		form.nombre.focus();
		return false;
	}
	if (form.apellido.value==0)
	{
		document.getElementById("error").innerHTML="<font color='black'>El campo  Apellido es requerido</font>";
		//alert("Ingrese su Apellido");
		form.apellido.value="";
		form.apellido.focus();
		return false;
	}
	/*if (form.edad.value==0)
	{
		document.getElementById("error").innerHTML="<font color='red'>El campo  Edad es requerido</font>";
		//alert("Ingrese su Apellido");
		form.edad.value="";
		form.edad.focus();
		return false;
	}*/
	
	if (form.email.value==0)
	{
		//alert("Ingrese su Email");
		document.getElementById("error").innerHTML="<font color='black'>El campo Email es requerido</font>";
		form.email.value="";
		form.email.focus();
		return false;
	}
	if (valida_correo(form.email.value)==false)
	{
		//alert("Ingrese su Email");
		document.getElementById("error").innerHTML="<font color='black'>El campo Email está incorrecto</font>";		
		form.email.value="";
		form.email.focus();
		return false;
	}
	
	if (form.empresa.value==0)
	{
		//alert("Ingrese su Celular");
		document.getElementById("error").innerHTML="<font color='black'>El campo Empresa es requerido</font>";
		form.empresa.value="";
		form.empresa.focus();
		return false;
	}
		/*if (form.ciudades.value==0)
	{
		//alert("Ingrese su Celular");
		document.getElementById("error").innerHTML="<font color='black'>El campo Ciudades es requerido</font>";
		form.ciudades.value="";
		form.ciudades.focus();
		return false;
	}*/
	
	
	form.submit();
}
