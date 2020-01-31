console.log("Inicio");
$(document).ready(function () {
    var sel = document.getElementById('recetas');

    var opt = document.createElement('option');

    $.getJSON("recetas.json", function (data) {
        console.log(data.recetas.receta);
        
        objetoJson=JSON.parse(data);
        
        console.log(objetoJson);
        
//        json=JSON.stringify(data);
//        for (recetas in json.recetas) {
//            console.log(recetas.receta);
//        }
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