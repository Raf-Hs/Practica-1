<?php
require_once("helper.php");

verifica_sesion();

//Destruye las variables de sesion
unset($_SESSION["usuario"]);
unset($_SESSION["token"]);

//die();

//Hola mundo

header("location:.");
?>

