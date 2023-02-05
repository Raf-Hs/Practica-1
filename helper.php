<?php
//Encabezado de las paginas
function page_header($titulo = ""){
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?></title>
    <link rel="shortcut icon" href="img/usuario.ico">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <script src="js/jquery-3.6.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>


<body>
    <div class="container mt-2">

    <h3><?= $titulo ?></h3>

<?php
}
function page_footer($js = array()){ 
?>
<div id="mensaje" class="d-flex flex-column-reverse position-fixed" style="bottom:20px;right:20px;"></div>
</div>
<?php
    foreach( $js as $nom_archivo) :
?>
        <script src="js/<?= $nom_archivo ?>.js"></script>
<?php
    endforeach;
?>
</body>
</html>
<?php
}

//Funcion para verificar la sesion
function verifica_sesion(){
    session_start();
    if(!isset($_REQUEST["u"]) || !isset($_REQUEST["s"])){
        header("location:.?code=2");
        exit(0);
    }
    //Extraer variables "u" y "s"
    extract($_REQUEST);
    //$u = $_REQUEST["u"];
    //$s = $_REQUEST["s"];


    if (!($u == $_SESSION["usuario"] && 
           $s == $_SESSION["token"])){

            unset($_SESSION["usuario"]);
            unset($_SESSION["token"]);

            header("location:.?code=2");
            exit(0);
           }


}


function conectar(){

    $server="localhost";
    $user="root";
    $password="";
    $db="bd_awos_t207";
    return new mysqli ($server,$user, $password,$db);


}

function desconectar(){

    global $mysqli;
    $mysqli -> close ();

}

function query($sql){

    global $mysqli;

    $rs = $mysqli->query ($sql) or die ($mysqli->error);

    return $rs;
}


?>