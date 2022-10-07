<?php
/*funcion que llama a la clase donde se ingresa los metodos de insercion*/
require_once'conexion/Trabajo.php';
/*condicional para guardadr el dato*/
if(isset($_POST) and $_POST["grabar"]=="si")
{
	//($_POST);
	/*instancia de la clase trabajo*/
	
	$tra=new Trabajo();
	$tra->insertusuario();
	exit; 
	
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style type="text/css">
img
{
	border:none;
}
#error
{
	margin-top: -44px;
	margin-left:90px;
	color:#000 !important;
}
</style>
<link href="css/estilo.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.10.2.min.js" ></script>

<script type="text/javascript" src="js/funciones.js"></script>

<script type="text/javascript" src="js/jquery.min.js"></script>     

<script type="text/javascript" src="js/validCampoFranz.js"></script>

<script type="text/javascript">

            $(function(){

                //Para escribir solo letras

                $('#minombre').validCampoFranz(' abcdefghijklmn�opqrstuvwxyz��iou');

				$('#miapellido').validCampoFranz(' abcdefghijklmn�opqrstuvwxyz��iou');

				$('#miciudad').validCampoFranz(' abcdefghijklmn�opqrstuvwxyz��iou');

                //Para escribir solo numeros    

                $('#mitelefono').validCampoFranz('0123456789'); 

				 $('#micedula').validCampoFranz('0123456789'); 

				  $('#miedad').validCampoFranz('0123456789');   

            });

        </script>      
</head>

<body>
<img src="images/pestana-infografia.jpg" width="790px" height="1200px" />
<div class="formulario">
<h1>INSCRIPCION DE USUARIO</h1>
<form name="form" id="form" method="post" action="index.php">
<?php
if (isset($_GET["m"]) and $_GET["m"]==1)
{
	 
	?>
	<h2 style="color:white;">"Gracias, por favor revise su carpeta de  descargas.<br /> Esperamos que el  informe sea de su utilidad"</h2>
    
	<?php
}
if (isset($_GET["m"]) and $_GET["m"]==2)
{
	?>
	<h2 style="color:green;">Usuario Existente</h2>
	<?php
}
?>
<div class="lnom">Nombre:</div>
<div class="nombre"><input type="text" name="nombre" id="minombre"size="40px" /></div>
<div class="lemail">Apellido</div>
<div class="email"><input type="text" name="apellido" id="miapellido"size="40px" /></div>
<div class="lusu">Email</div>
<div class="usuario"><input type="text" name="email"  size="40px"/></div>
<div class="lpass">Tel&eacute;fono</div>
<div class="password"><input type="telefono" name="telefono" id="mitelefono"  size="40px"/>
</div>
<div class="lpass">Empresa</div>
<div class="password"><input type="empresa" name="empresa" id="mitelefono"  size="40px"/>
</div>
<div class="rpass">Provincia</div>
<div class="rpassw">
<select name="ciudades">
<option value="0">Seleccione Provincia</option>
<option value="Azuay">Azuay</option>
<option value="Carchi">Carchi</option>
<option value="Chimborazo">Chimborazo</option>
<option value="Cotopaxi">Cotopaxi</option>
<option value="El Oro">El Oro</option>
<option value="Esmeraldas">Esmeraldas</option>
<option value="Guayas">Guayas</option>
<option value="Imbabura">Imbabura</option>
<option value="Islas Galapagos">Islas Galapagos</option>
<option value="Loja">Loja</option>
<option value="Los Rios">Los Rios</option>
<option value="Manabi">Manabi</option>
<option value="Morona Santiago">Morona Santiago</option>
<option value="Napo">Napo</option>
<option value="Orellana">Orellana</option>
<option value="Pastaza">Pastaza</option>
<option value="Pichincha">Pichincha</option>
<option value="Santa Elena">Santa Elena</option>
<option value="Tungurahua">Tungurahua</option>
</select>
</div>

<div class="boton">
<input type="hidden" name="grabar" id="grabar"  value="si"  />
<div id="error"></div>
<a href="https://www.appiglu.com/apps.facebook/aaconsulting/aainfografia/images/infografia_medios_sociales2.jpg" download="infografia_medios_sociales2.jpg"><img src="images/boton.png" onclick="valida_registro();"  /></a>
<!--<input type="button" name="enviar" value="enviar" onclick="valida_registro();" />-->
</div>

</form>
</div>
</body>
</html>