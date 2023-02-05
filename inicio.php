<?php

$usuario = $_REQUEST["usuario"];
$contra = $_REQUEST["contra"];

$usuarios = array(
   "u1" => "123",
   "u2" => "456",
   "u3" => "789"
);

if(array_key_exists($usuario, $usuarios) &&
$usuario == array_search($contra, $usuarios)){


    session_start();

    session_regenerate_id();
    $token = md5( session_id()) ;

    $_SESSION["usuario"] = $usuario;
    $_SESSION["token"] = $token ; 

    
    header("location:home.php?u=$usuario&s=$token");
    exit(0);
}

header('location:index.php?code=1');

?>