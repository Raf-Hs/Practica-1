<?php

require_once("helper.php");
/*
session_start();
if(!isset($_REQUEST["u"])){
    header("location:.?code=2");
}
$u = $_REQUEST["u"];
$s = $_REQUEST["s"];

*/
//Primero se debe verificar la sesion
verifica_sesion();

$mysqli = conectar();

   page_header("Practica 1- CRUD con sesiones");

   $sql = "select idpersona,nombre, correo, apellidos,idpais,idedo,idmpio ,nompais,nomestado,nommpio
   from personas
   left join paises using (idpais)
   left join estados using (idpais,idedo)
   left join municipios using (idpais,idedo,idmpio)";

   $rs= query ($sql);  

  
?>
   
   <div class="d-flex justify-content-end" id="tabla-personas">
     
        <i class="fas fa-circle-user fa-2x me-2 mb-4"></i>
            Hola usuario


        <a href="cerrar.php" class="btn btn-sm btn-light secondary
         bg-opacity-50 ms-2 mb-3" title="Cerrar sesión">
            <i class="fas fa-sign-out"></i>
                Salir
        </a>
   </div>
  
<table class="table table-bordered tabled-hover">
    <thead>
        <tr
        class="bg-secondary text-white text-center">
            <th>Nombre completo</th>
            <th>Correo</th>
            <th>Pais</th>
            <th>Estado/Provincia</th>
            <th>Municipio/Condado</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        <?php

            while ($row = $rs->fetch_assoc()):

                extract ($row); //ECrea variables con nombres de columnas
                //de la base de datos
        ?>
    <tr
       id="tr-<?=$idpersona?>">
            <td> <?= $nombre ?> <?=$apellidos?></td>
            <td> <?= $correo ?></td>
            <td> <?= $nompais ?></td>
            <td> <?= $nomestado ?></td>
            <td> <?= $nommpio ?></td>
            <td class="text-center">

                <a class="btn btn-sm btn-primary"
                href="formularui.php?accion=cambio&idpersona=<?=$idpersona?>">
                    <i class="fas fa-edit"></i>
                </a>

                <button class="btn btn-sm btn-danger btn-borrar"
                data-bs-toggle="modal"
                data-bs-target="#modal-baja"
                data-idpersona="<?= $idpersona?>"
            
                >
                    <i class="fas fa-trash"></i>
                </button>

            </td>
        </tr>

        <?php
    
            endwhile;
                
        ?>


    </tbody>

</table>

<a href="formulario.php?accion=alta" class="btn btn-success">

    <i class="fas fa-user-plus"></i>
    Agregar persona

</a>

<!--Modal -->
<div class="modal" tabindex="-1" role="dialog" id="modal-baja">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Eliminar persona</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <p>¿Realmente deseas eliminar la persona?</p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary">
            <i class="fas fa-ban"></i>
            Cancelar
        </button>

        <button type="button" class="btn btn-primary"
         data-bs-dismiss="modal">
             <i class="fas fa-trash"></i>
         Confirmar
        </button>
      </div>
      
    </div>
  </div>
</div>











    <script>
        //Objeto JSON con variables de aplicacion
        var appData = {
            code : <?= $rs-> num_rows > 0 ? 0 :3 ?>,
            idpersona: 0
        };
        </script>

<?php
    page_footer(array ("mensajes","home") );
    desconectar();
?>