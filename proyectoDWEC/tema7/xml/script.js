console.log("Inicio");
$(document).ready(function () {

    var sel = document.getElementById('recetas');

    var opt = document.createElement('option');

    $.get("recetas.xml", {}, function (xml) {
        $("recetas", xml).each(function (i, item) {
            $("receta", item).each(function (xi, xitem) {
                var opt = document.createElement('option');
                var nombre = $(this).find('nombre').text();
                opt.appendChild(document.createTextNode(nombre));
                opt.value = nombre;
                sel.appendChild(opt);
            });
        });
    });


    var lista = document.getElementById('lista');
    
    var pasos = document.getElementById('pasos');

    var li = document.createElement('li');

    $("select.recetas").change(function () {
        var recetaSeleccionada = $(this).children("option:selected").val();
        $("#lista").empty();//borrar la lista enterior
        $.get("recetas.xml", {}, function (xml) {
            $("recetas", xml).each(function (i, item) {
                $("receta", item).each(function (xi, xitem) {
                    if ($(this).find('nombre').text() === recetaSeleccionada) {
                        $("ingrediente", xitem).each(function (zi, zitem) {
                            
                            var li = document.createElement('li');

                            var textnode = document.createTextNode(zitem.childNodes[0].nodeValue);

                            li.appendChild(textnode);

                            document.getElementById("lista").appendChild(li);

                            lista.appendChild(li);

                        })
                        
                        $("paso", xitem).each(function (zi, zitem) {
                            
                            var li = document.createElement('li');

                            var textnode = document.createTextNode(zitem.childNodes[0].nodeValue);

                            li.appendChild(textnode);

                            document.getElementById("pasos").appendChild(li);

                            pasos.appendChild(li);

                        })
                        
                    }
                });
            });
        });
    });

});
console.log("final");