<?php
date_default_timezone_set('America/Mexico_city');


//Datos para el Servidor

$server = "mysql.hostinger.mx";
$user = "u373549955_piri";
$pass = "claseweb07";
$base = "u373549955_usu";

$link = mysql_connect($server,$user,$pass);
if (!$link)
	{
	//die('No se pudo conectar: '.mysql_error());
	}

$base_selected = mysql_select_db($base, $link);

if(!$base_selected)
	{
	//die("No se puede usar la base de Datos: ".mysql_error());
	}

	//Esto es para cambiar todas las comillas recibidas con 
	//GET y con POST
	foreach($_GET as $variable=>$valor)
	{
	$_GET[$variable] = str_replace("'","\'",$_GET[$variable]);
	$_GET[$variable] = str_replace('"','\"',$_GET[$variable]);
	}

	foreach($_POST as $variable=>$valor)
	{
	$_POST[$variable] = str_replace("'","\'",$_POST[$variable]);
	$_POST[$variable] = str_replace('"','\"',$_POST[$variable]);
	}
	
	foreach($_REQUEST as $variable=>$valor)
	{
	$_REQUEST[$variable] = str_replace("'","\'",$_REQUEST[$variable]);
	$_REQUEST[$variable] = str_replace('"','\"',$_REQUEST[$variable]);
	}

?>