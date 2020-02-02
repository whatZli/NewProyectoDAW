console.log("script cargado correctamente");

$(function () {
    console.log("Se ha cargado jQuery");
});

$(function () {
    //$(".cookies-content").css("visibility", "hidden");//Oculta el cuadro de cookies
    //$(".fondo-difuminado").css("visibility", "hidden");//Oculta el cuadro que hay por detrás del cuadro de cookies

    var asignaturas = ["DAW", "DIW", "DWEC", "DWES"];

    $("#aceptCookies").click(function () {//Evento que alhacer click en Aceptar cookies...

        $.each(asignaturas, function (key, value) {
            var cookie = $.cookie(value);//
            if (typeof cookie === 'undefined') {//Si ya está creada la cookie
                $.cookie(value, 0, {expires: 7});//Crea la cookie por cada asignatura y la inicializa a 0. Dura 7 días
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
    $("#DWES,#mdwes").click(function () {
        cookie = $.cookie("DWES");//
        suma = parseInt(cookie) + 1;
        console.log(cookie);
        $.cookie("DWES", suma, {expires: 7});
    });
    $("#contDwes").append($.cookie("DWES"));//Muestra la cookie en el contador de visitas

    $("#DWEC,#mdwec").click(function () {
        cookie = $.cookie("DWEC");//
        suma = parseInt(cookie) + 1;
        console.log(cookie);
        $.cookie("DWEC", suma, {expires: 7});
    });
    $("#contDwec").append($.cookie("DWEC"));//Muestra la cookie en el contador de visitas

    $("#DAW,#mdaw").click(function () {
        cookie = $.cookie("DAW");//
        suma = parseInt(cookie) + 1;
        console.log(cookie);
        $.cookie("DAW", suma, {expires: 7});
    });
    $("#contDiw").append($.cookie("DIW"));//Muestra la cookie en el contador de visitas

    $("#DIW,#mdiw").click(function () {
        cookie = $.cookie("DIW");//
        suma = parseInt(cookie) + 1;
        console.log(cookie);
        $.cookie("DIW", suma, {expires: 7});
    });
    $("#contDaw").append($.cookie("DAW"));//Muestra la cookie en el contador de visitas


    function mostrarVentanaEmergente() {
        $(".cookies-content").css("visibility", "visible");
        $(".fondo-difuminado").css("visibility", "visible");
    }

    //Método para ordenar--------------------------------------
    var items = [
        {name: 'dwes', value: $.cookie("DWES")},
        {name: 'dwec', value: $.cookie("DWEC")},
        {name: 'diw', value: $.cookie("DIW")},
        {name: 'daw', value: $.cookie("DAW")}
    ];

    items.sort(function (a, b) {return a.value - b.value;}); //ordena por el valor de los items
    items.reverse();
    
    var posicion=1;
    $.each(items, function(key,value){
        //console.log(value['value']); 
        $(".container-asignaturas ."+value['name']).css("order",posicion);//ordena las asignaturas de abajo por la posicion
        $("#m"+value['name']).css("order",posicion);//Ordena el menú de arriba por la posicion
        posicion++;
    });
    
    
    setTimeout(mostrar_asignaturas,300);
    function mostrar_asignaturas(){
        $(".container .container-asignaturas").css("visibility","visible");
        $(".container .container-asignaturas").css("opacity","1");
    }
    
    // Cambiar COlores a la página-------------------------------------------------------

    var cuerpo;

    function cambiarFondo() {
        ventanaColores = open('core/js/colores.html', '_blank', 'width=350px,height=550px'); 
        setTimeout(function () {
            ventanaColores.postMessage('cambiarFondo', '*');
        }, 300);
    }
    function cambiarLetra() {
        ventanaColores = open('core/js/colores.html', '_blank', 'width=350px,height=350px');
        setTimeout(function () {
            ventanaColores.postMessage('cambiarLetras', '*');
        }, 300);
    }
    function recibirColor() {
        recibido = event.data;
        cadena = recibido.split(':');
        if (cadena[0] === "cambiarFondo") {
            console.log(cadena[1]);
            console.log(cuerpo);
            cuerpo[0].style.background = cadena[1];
            Cookies.set('colorFondo', cadena[1], {expires: 7}); //cookie colorFondo caduca a los 7 días

        } else {
            cuerpo[0].style.color = cadena[1];
            Cookies.set('colorLetra', cadena[1], {expires: 7}); //cookie colorLetra caduca a los 7 días
        }
    }

    cuerpo = document.getElementsByClassName("container");

    //Si las cookies de color ya están declaradas ponemos los colores
    if (Cookies.get('colorFondo') !== 'undefined') {
        cuerpo[0].style.background = Cookies.get('colorFondo');
    }
    if (Cookies.get('colorFondo') !== 'undefined') {
        cuerpo[0].style.color = Cookies.get('colorLetra');
    }

    botonCambiarFondo = document.getElementById("cambiarFondo");
    botonCambiarFondo.addEventListener('click', cambiarFondo, false);

    botonCambiarLetra = document.getElementById("cambiarLetra");
    botonCambiarLetra.addEventListener('click', cambiarLetra, false);

    window.addEventListener('message', recibirColor, false);



});