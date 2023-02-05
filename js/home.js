$ (document).ready (function(){


    if(appData.code == 3){

        alert("warning","No hay personas registradas");

        $("#tablas-personas").hide();

    }



    $(".btn-borrar").click (function(){

            //Copia el idpersona de cada boton al "idpersona" de appData

            appData.idpersona = $ (this).attr ("data-idpersona");

    });

    //Click del boton de confirmar baja

    $("#btn-confirmar-baja").click(function(){

        alert("info")

        $(location).attr ("href",
         "procesa.php?accion=baja$idpersona=" + appData.idpersona
         );


    } );

});