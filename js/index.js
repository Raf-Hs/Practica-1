$(document).ready(function(){
    if(appData.code == 1){
        alert("danger", "El usuario o la contraseña son incorrectos");
    }

    else if(appData.code == 2){
        alert("warning", "Sesión invalida, ingresa de nuevo");
    }


    //Evento submit del FORM
    $("form").submit(function(e){
        e.preventDefault();

        if($("#usuario").val() == ""){
            error_formulario("usuario", "Falta el usuario");
            return false;
        }

        else if($("#contra").val() == ""){
            error_formulario("contra", "Falta la contraseña");
            return false;
        }

        $("form").submit();

        return true;

    });
     //Evento click de los inputs
    $(".form-control").click(borrar_mensajes);

});