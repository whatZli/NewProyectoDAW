console.log("Inicio");
$(document).ready(function () {

    /*Añadir opciones al select*/
    var sel = document.getElementById('recetas');

    $.getJSON("recetas.json", function (json) {
        $(json.recetas.receta).each(function () {
            var opt = document.createElement('option');
            var nombre = this.nombre;
            opt.appendChild(document.createTextNode(nombre));
            opt.value = nombre;
            sel.appendChild(opt);
        });
    });

    /*Añadir Ingredientes y pasos de forma dinámica*/
    var lista = document.getElementById('lista');
    var pasos = document.getElementById('pasos');
    var li = document.createElement('li');

    $("select.recetas").change(function () {
        var recetaSeleccionada = $(this).children("option:selected").val();

        $("#lista").empty();//borrar la lista enterior
        $("#pasos").empty();//borrar la lista enterior

        $.getJSON("recetas.json", function (json) {
            $(json.recetas.receta).each(function () {
                if (this.nombre === recetaSeleccionada) {
                    $(this.ingredientes.ingrediente).each(function () {
                        console.log(this);
                        var li = document.createElement('li');
                        var textnode = document.createTextNode(this['-cantidad'] + " " + this['-unidad'] + " de " + this['#text']);

                        li.appendChild(textnode);
                        document.getElementById("lista").appendChild(li);
                        lista.appendChild(li);
                    });

                    $(this.proceso.paso).each(function () {
                        console.log(this);
                        var li = document.createElement('li');
                        var textnode = document.createTextNode(this['-numero'] + " " + this['#text']);

                        li.appendChild(textnode);

                        document.getElementById("pasos").appendChild(li);

                        pasos.appendChild(li);
                    });

                }
            });
        });
    });
});
console.log("final");

//var ingredientesYPasos = document.getElementById('ingredientesYPasos');
//    //Crear Titulo ingredientes
//    var h1 = document.createElement("h1");
//    var contenidoH1 = document.createTextNode("Ingredientes");
//    h1.appendChild(contenidoH1);
//    document.body.insertBefore(h1, ingredientesYPasos);
//
//    //Crear ul con id
//    const ul = document.querySelector('ul.foo');
//    ul.classList.add('lista');
//    document.body.insertBefore(ul, ingredientesYPasos);