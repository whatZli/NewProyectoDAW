console.log("script cargado correctamente");

$(function () {
    console.log("Se ha cargado jQuery");
});

$(function () {
    $(".cookies-content").css("visibility", "hidden");//Oculta el cuadro de cookies
    $(".fondo-difuminado").css("visibility", "hidden");//Oculta el cuadro que hay por detrás del cuadro de cookies

    $("#aceptCookies").click(function () {//Evento que alhacer click en Aceptar cookies...
        /*Crea las cookies*/
        var asignaturas = ["DWES", "DWEC", "DAW", "DIW"];
        $.each(asignaturas,function(key,value){
            console.log(key+":"+value);
            $.cookie(value,12);
        });


        $(".cookies-content").remove();
        $(".fondo-difuminado").remove()();
    });

    setTimeout(mostrarVentanaEmergente, 500);
    function mostrarVentanaEmergente() {
        $(".cookies-content").css("visibility", "visible");
        $(".fondo-difuminado").css("visibility", "visible")();
    }

});