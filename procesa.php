<?php


        require_once("helper.php"); //Extraer $acción y % idpersona

        extract($_REQUEST);

        verifica_sesion();

        $mysqli=conectar();


        if($accion == "baja"){



                $sql = "delete from personas where idpersona = '$idpersona'";

                query( $sql ) ;




        }

        
        desconectar();
        
        header("location:home.php?u?=$_SESSION[usuario]&s=$_SESSION[token]")
?>