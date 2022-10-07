<?php
//clase conectora
class Coneccion
{
	//funcion para crear coneccion
	public static function con()
	{
		//datos de servidor
$con=mysql_connect("localhost","appigluc_infogra","%FN.a+a.info-aa2014");
//$con=mysql_connect("localhost","root","");
		//base de datos
		mysql_select_db("appigluc_fb_infografia");
		//mysql_select_db("fbmisfotos");
		return $con;
	}
}
?>