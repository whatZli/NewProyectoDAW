//Forma corta de ver que está cargado correctamente
$(function () {
    console.log("Se ha cargado jQuery");
});

//Empezar
$(function () {

    /* Eventos que al salir de un campo input valide la entrada de tipo texto */
    /* Validar nombre y apellidos */
    $("#Nombrea").blur(function () {
        /* Poner en mayúscula el primer caracter */
        $(this).val($(this).val().charAt(0).toUpperCase() + $(this).val().slice(1));
        if (validaTexto(this.value) === true) {
            $("#enombre").remove();
            $(this).css("color", "green");
            $(this).css("background", "#BBFFBB");
        } else {
            $("#enombre").remove();
            $(this).css("color", "red");
            $(this).after("<span id='enombre'>Error en el texto introducido</span>");
        }
    });

    $("#Apellidosa").blur(function () {
        /* Poner en mayúscula el primer caracter */
        $(this).val($(this).val().charAt(0).toUpperCase() + $(this).val().slice(1));
        if (validaTexto(this.value) === true) {
            $("#eapellidos").remove();
            $(this).css("color", "green");
            $(this).css("background", "#BBFFBB");
        } else {
            $("#eapellidos").remove();
            $(this).css("color", "red");
            $(this).after("<span id='eapellidos'>Error en el texto introducido</span>");
        }
    });

    /* Validar DNI */
    $("#Dnia").blur(function () {
        if (validarDni(this.value) === true) {
            $(this).css("color", "green");
            $(this).css("background", "#BBFFBB");
            $("#edni").remove();
        } else {
            $("#edni").remove();
            $(this).css("color", "red");
            $(this).after("<span id='edni'>Error en el formato del DNI</span>");
        }
    });

    /* Eventos que al cambiar los select ejecutan la función mostrarAsignaturas */
    $("#selectCiclo").change(mostrarAsignaturas);
    $("#cursoa").change(mostrarAsignaturas);

    /* Validar email */
    $("#Correo").blur(function () {
        if (validarEmail(this.value) === true) {
            $(this).css("color", "green");
            $(this).css("background", "#BBFFBB");
            $("eemail").remove();
        } else {
            $("#eemail").remove();
            $(this).css("color", "red");
            $(this).after("<span id='eemail'>Error en el formato del E-mail</span>");
        }
    });

    /* Validar LPD */
    $('#lpda').click(function () {
        if ($("#lpda").is(':checked')) {
            console.log("Registro Activado");
            $("#btna").prop('disabled', false); //Cambia una propiedad ya establecida
        } else {
            console.log("Registro Desactivado");
            $("#btna").prop('disabled', true); //Cambia una propiedad ya establecida
        }
    });

    $("#profer").click(function () {
        $("#alumno").css("display", "none");
        $("#alumnor").removeClass("btn-primary");
        $("#alumnor").addClass("btn-light");

        $("#profesor").css("display", "block");
        $("#profer").removeClass("btn-light");
        $("#profer").addClass("btn-primary");

        console.log("cargado profesor");
    });

    $("#alumnor").click(function () {
        $("#profesor").css("display", "none");
        $("#profer").removeClass("btn-primary");
        $("#profer").addClass("btn-light");

        $("#alumno").css("display", "block");
        $("#alumnor").removeClass("btn-light");
        $("#alumnor").addClass("btn-primary");

        console.log("cargado alumno");
    });
    console.log("Final");
});

/* Evento que al cambiar el ciclo
 * 1. Comprueba que el ciclo es daw y el curso es 2º
 * 2. Si es correcto crea las asignaturas
 * 3. Sino es correcto vacía el div
 * */
function mostrarAsignaturas() {
    if ($("#cursoa").val() === 'curso2' && $("#selectCiclo").val() === 'daw') {

        //Cada vez que hay un cambio llama a la función cambio

        for (var i = 0; i < 4; i++) {
            var miXHR = new XMLHttpRequest();
            miXHR.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    $("#hideAsig").append("<label><input type='checkbox'> " + this.responseText + "</label><br>");
                    console.log(this.responseText);
                }
            };
            miXHR.open('POST','asignaturas.php',true);
            miXHR.setRequestHeader("Content-Type","application/x-www-form-urlencoded")
            miXHR.send("num="+i);

//            $("#hideAsig").append("<label><input type='checkbox'> " + value + "</label><br>");
//            $(":checkbox").attr("id", "cbox" + index);
//            $(":checkbox").attr("value", "checkbox" + index);
        }
        ;
    } else {
        /* Empty vacía el contenido del div*/
        $("#hideAsig").empty();
    }
}

function validaTexto(textoValidar) {
    var exp = /^[A-z]{5,20}$/;
    if (!exp.test(textoValidar)) {
        return false;
    } else {
        return true;
    }
}

function validarEmail(email) {
    exp = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    if (!exp.test(email)) {
        return false;
    } else {
        return true;
    }
}

function validarDni(dni) {
    exp = /^\d{8}\D{1}$/;
    var numeros = dni.substring(0, 8);
    var letra = dni.substring(8, 9);

    var cadena = "TRWAGMYFPDXBNJZSQVHLCKE";
    if (!exp.test(dni)) {
        return false;
    } else {
        if (cadena.substr(numeros % 23, 1) === letra) {
            return true;
        } else {
            return false;
        }
    }
}