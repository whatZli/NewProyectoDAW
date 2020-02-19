//Forma corta de ver que está cargado correctamente
$(function () {
    console.log("Se ha cargado jQuery");
});

//Empezar
$(function () {
    
    $("#anadir").click(eAñadirAsignatura());
    $("#selectCurso").change(listarAsignaturas());
    $("#selectCiclo").change(listarAsignaturas());
    
    
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
        if ($("#lpda").is(':checked')){
            console.log("Registro Activado");
            $("#btna").prop('disabled', false); //Cambia una propiedad ya establecida
        }else{
            console.log("Registro Desactivado");
            $("#btna").prop('disabled', true); //Cambia una propiedad ya establecida
        }
    });

    $("#profer").click(function (){
        $("#alumno").css("display","none");
        $("#alumnor").removeClass("btn-primary");
        $("#alumnor").addClass("btn-light");
        
        $("#profesor").css("display","block");
        $("#profer").removeClass("btn-light");
        $("#profer").addClass("btn-primary");
        
    console.log("cargado profesor");
    });
    
    $("#alumnor").click(function (){
        $("#profesor").css("display","none");
        $("#profer").removeClass("btn-primary");
        $("#profer").addClass("btn-light");
        
        $("#alumno").css("display","block");
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
    var asignaturasDAW2 = ["DWES", "DWEC", "DAW", "DIW"];
    var asignaturasDAW1 = ["PROG", "LSMG", "BBDD", "SSOO"];
    var asignaturasSMR1 = ["SSOO", "REDES", "OFIMATICA", "APLICACIONES WEB"];
    var asignaturasSMR2 = ["SEGURIDAD INFORMÁTICAS", "REDES", "SSOO", "APLICACIONES WEB"];
    if ($("#cursoa").val() === 'curso2' && $("#selectCiclo").val() === 'daw') {
        $("#hideAsig").empty();
        jQuery.each(asignaturasDAW2, function (index, value) {
            $("#hideAsig").append("<label><input type='checkbox'> " + value + "</label><br>");
            $(":checkbox").attr("id", "cbox" + index);
            $(":checkbox").attr("value", "checkbox" + index);
        });
    }else if ($("#cursoa").val() === 'curso1' && $("#selectCiclo").val() === 'daw') {
        $("#hideAsig").empty();
        jQuery.each(asignaturasDAW1, function (index, value) {
            $("#hideAsig").append("<label><input type='checkbox'> " + value + "</label><br>");
            $(":checkbox").attr("id", "cbox" + index);
            $(":checkbox").attr("value", "checkbox" + index);
        });
    }else if ($("#cursoa").val() === 'curso2' && $("#selectCiclo").val() === 'smr') {
        $("#hideAsig").empty();
        jQuery.each(asignaturasSMR2, function (index, value) {
            $("#hideAsig").append("<label><input type='checkbox'> " + value + "</label><br>");
            $(":checkbox").attr("id", "cbox" + index);
            $(":checkbox").attr("value", "checkbox" + index);
        });
    } else if ($("#cursoa").val() === 'curso1' && $("#selectCiclo").val() === 'smr') {
        $("#hideAsig").empty();
        jQuery.each(asignaturasSMR1, function (index, value) {
            $("#hideAsig").append("<label><input type='checkbox'> " + value + "</label><br>");
            $(":checkbox").attr("id", "cbox" + index);
            $(":checkbox").attr("value", "checkbox" + index);
        });
    }else {
        /* Empty vacía el contenido del div*/
        $("#hideAsig").empty();
    }
}

function listarAsignaturas(){
    var asignaturasDAW2 = ["DWES", "DWEC", "DAW", "DIW"];
    var asignaturasDAW1 = ["PROG", "LSMG", "BBDD", "SSOO"];
    var asignaturasSMR1 = ["SSOO", "REDES", "OFIMATICA", "APLICACIONES WEB"];
    var asignaturasSMR2 = ["SEGURIDAD INFORMÁTICAS", "REDES", "SSOO", "APLICACIONES WEB"];
    
    console.log($("#selectCurso"));
    
    if ($("#selectCurso").val() === 'curso2' && $("#selectCiclo").val() === 'daw') {
        $("#hideAsig").empty();
        jQuery.each(asignaturasDAW2, function (index, value) {
            $("#asignarAsig").append("<option> " + value + "</option>");
            console.log(value);
        });
    }
}

function eAñadirAsignatura() { //PARA PROFESOR
    console.log("añadir");
    if($('#asignaturasP').children().length !== 0){
            console.log(jQuery.type($('#asignaturasP').children().children(":selected")));
        $("#asignaturasProf").append($('#asignaturasP').children().children(":selected").clone());
    }
}

function eBorrarAsignatura(){        //nuevo                                                                //RECUERDA PONER LA MALDITA ALMMHOADILLA
    if($("#asignaturasProf").children().length !== 0){
        $("#asignaturasProf").children(":selected").remove();
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