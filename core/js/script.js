console.log("script cargado correctamente");

$(function () {
    console.log("Se ha cargado jQuery");
});

$(function () {
    $(".cookies-content").css("visibility", "hidden");//Oculta el cuadro de cookies
    $(".fondo-difuminado").css("visibility", "hidden");//Oculta el cuadro que hay por detrás del cuadro de cookies

    var asignaturas = ["DAW", "DIW", "DWEC", "DWES"];

    $("#aceptCookies").click(function () {//Evento que alhacer click en Aceptar cookies...

        $.each(asignaturas, function (key, value) {
            var cookie = $.cookie(value);//
            if (typeof cookie === 'undefined') {//Si ya está creada la cookie
                $.cookie(value, key);//Crea la cookie con la posición que esté en el array
            }
        });

        $(".cookies-content").remove();
        $(".fondo-difuminado").remove();
    });

    $.each(asignaturas, function (key, value) {
        var cookie = $.cookie(value);//
        if (typeof cookie === 'undefined') {//Si alguna de las cookies no están definidas
            setTimeout(mostrarVentanaEmergente, 2000);
        } else {
            console.log("todas las cookies estan definidas correctamente");
        }
    });

//Crear evento por cada botón de asignatura
    $("#DWES").click(function () {
        cookie = $.cookie("DWES");//
        suma= parseInt(cookie)+1;
        console.log(cookie);
        $.cookie("DWES", suma);
    });


    function mostrarVentanaEmergente() {
        $(".cookies-content").css("visibility", "visible");
        $(".fondo-difuminado").css("visibility", "visible");
    }

});