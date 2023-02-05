<?php
//Carga de biblioteca de ayuda
require_once("helper.php");
page_header("Ejercicio sesiones");
?>
        <div class="card col-md-2 mt-4">

            <div class="card-header bg-success bg-opacity-50 text-center">
                <h6>
                    <i class="fas fa-door-open fa-2x"></i>
                Login
                </h6>
            </div>

            <form action="inicio.php" method="post">

            <div class="card-body">
                <div class="form-group" id="group-usuario">
                    <label for="usuario"><strong>Usuario:</strong></label>
                    <input name="usuario" id="usuario" class="form-control" type="text">
                </div>

                <div>
                    <div class="form-group" id="group-contra">
                        <label for="contra"><strong>Contraseña:</strong></label>
                        <input name="contra" id="contra" class="form-control" type="password"> 
                    </div>
                </div>
            </div>

            <div class="card-footer text-center">
                <button class="btn btn-success" type="submit">
                <i class="fas fa-sign-in"></i>
                Entrar
                </button>
            </div>

            </form>

        </div>
        <script>
        //Objeto JSON con variables de aplicacion
        var appData = {
            code : <?= $_REQUEST["code"] ?? 0 ?>,
        };
        </script>

<?php 
//index
page_footer( array("mensajes"));
?>

       