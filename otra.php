<?php
require_once("helper.php");

verifica_sesion();

page_header("Ejercicio sesiones");
?>

<div class="bg-warning bg-opacity-50 rounded border border-dark p-4 col-md-6 mt-5 mb-5">
    <div class="display-3">Esta es otra pagina </div>
</div>

<a href="home.php?u=<?= $_SESSION["usuario"] ?>&s=<?= $_SESSION["token"] ?>">Regresar</a>

<?php
page_footer();
?>

