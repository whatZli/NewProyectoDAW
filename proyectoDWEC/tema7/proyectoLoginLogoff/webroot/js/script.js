console.log("Se ha cargado el script");

$(function () {
    //Si está creada la sesion storage que la ponga en el input de usuario
    var usuarioSesion= localStorage.getItem("usuario");
    if(usuarioSesion!==null){
        $("#nombreUsuario").val(usuarioSesion);
    }
    
    $("#inicioSesion").click(function () {
        if($("#Recordarme").prop("checked")===true){
            localStorage.setItem("usuario", $("#nombreUsuario").prop("value"));
        }
    });
    
    
});
