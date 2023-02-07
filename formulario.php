<?php
require_once("helper.php");
//verifica_sesion();

page_header("Practica 1- Crud con sesiones <small><small>".
( $accion == "alta" ? "Agregar Persona" : "Modificar persona").
"</small></small>");

$mysqli=conectar();

?>

<div class="d-flex justify-content-end" >
     
     <i class="fas fa-circle-user fa-2x me-2 mb-4"></i>
     <small>  Hola  <?=$_SESSION["usuario"]?></small>   


     <a href="cerrar.php?u=<?=$_SESSION["usuario"]?>&s=<?=$_SESSION["token"]?>" class="btn btn-sm btn-light secondary
      bg-opacity-50 ms-2 mb-3" title="Cerrar sesión">
         <i class="fas fa-sign-out"></i>
             Salir
     </a>
</div>


<!--Formulario-->

<form action="procesa.php" method="post"></form>

<div class="row">
    <div class="form-group com-md-3 " id="group-nombre">
        <label for="nombre"> <strong> Nombre: </strong></label>
            <input type="text" name="nombre" id="nombre" class="form-control" />
        
    </div>

    <div class="form-group com-md-3 " id="group-apellidos">
        <label for="apellidos"> <strong> Apellidos </strong></label>
            <input type="text" name="apellidos" id="apellidos" class="form-control" />
        
    </div>

    <div class="form-group com-md-3 " id="group-nombre">
        <label for="correo"> <strong> Correo: </strong></label>
            <input type="text" name="correo" id="correo" class="form-control" />
        
    </div>

    <div class="form-group com-md-3 " id="group-nombre">
        <label for="contra"> <strong> Contraseña: </strong></label>
            <input type="contra" name="contra" id="contra" class="form-control" 
            placeholder="<?= $accion == "cambio" ? "Solo si quieres cambiar..." : ""?>"/>
            />

    </div>




    <div class="row mt-2">
    </div>

        <div class="row mt-3 ps-2 pe-2">

            <button class="btn btn-success btn-lg col-md-2" id="btn-guardar">
            <i class="fas fa-save fa-2x"></i>
            Guardar
            </button>

            <a  class="btn btn-success btn-lg col-md-2 ms-2" id="btn-cancelar" href="home.php?u=<?= $SESSION["usuario"] ?>&s=$SESSION["token]?>"></a>


        </div>








    </div>



<!--Fin del Formulario-->


<script>
//Objeto JSON con variables de aplicacion
var appData = {

    u         : "<?= $_SESSION["usuario"] ?>",
    s         : "<?= $_SESSION["token"] ?>",
};
</script>


<?php
page_footer(array ("mensajes","formulario") );
desconectar();
?>