<?php
require_once("helper.php");

$mysqli = conectar();

$sql="select idmpio,nommpio from municipios where 
idpais = '$_REQUEST[idpais]' and 
idedo = '$_REQUEST[idedo]' 
 order by nommpio";
$rs = query ($sql);


//var_dump es una funcion para ver tipo y conenido de cualquier variable

//El metodo mysqli_result::fecth_all 
//var_dump ($rs->fetch_all());


$data = array();

while ($row= $rs-> fetch_assoc()){

    $data[] = $row ;  //Agregar el "row" como nuevo elemento del arreglo

}

desconectar();

//Convierte el arreglo a texto plano con formato JSON
echo json_encode($data);


?>