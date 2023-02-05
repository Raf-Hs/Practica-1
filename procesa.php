<?php


        require_once("helper.php"); //Extraer $acción y % idpersona

        extract($_REQUEST);


        $mysqli=conectar();


        if($accion=="baja"){



                $sql = "delete from personas where idpersona = '$idpersona'";

                query($sql);




        }


        desconectar();
        
        header("location:home.php")
?>