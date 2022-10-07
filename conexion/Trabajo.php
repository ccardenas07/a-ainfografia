<?php
require_once'Coneccion.php';
class Trabajo
{
			 
	/*FUNCION SQL PARA INGRESAR USUARIOS*/
public function insertusuario()
{
	
	/*$query="select email,cedula from datos where email='".$_POST["email"]."' && cedula='".$_POST["cedula"]."'";
		$resp=mysql_query($query,Coneccion::con());
		if (mysql_num_rows($resp)==0)
		{*/
		$sql="insert into usuario values(null,'".$_POST["nombre"]."','".$_POST["apellido"]."','".$_POST["email"]."','".$_POST["telefono"]."','".$_POST["empresa"]."','".$_POST["ciudades"]."')";
		mysql_query($sql,Coneccion::con());
		header("Location: index.php?m=1");
		
		
		/*}else
		{
			header("Location: formulario.php?m=1");
		}*/
}






}//fin clase
?>