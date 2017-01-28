<?php
   include("servidor.php");
   $tuCorreo=$_POST['email'];
   $password=$_POST['pass'];
   $insertar="INSERT INTO usuarios (email,pass) VALUES('$tuCorreo','$password')";
   $var=mysql_query($insertar);
?>