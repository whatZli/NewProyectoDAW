console.log("Inicio");
$(document).ready(function () {
    $.get("archivo.xml", {}, function (xml) {
        console.log(xml);
        console.log(document);

//        xml=xml.getElementsByTagName("agenda");
//        agenda=xml[0];
//        console.log(agenda);
//        agenda[0];
//        contacto=agenda[0];

        $("contacto", xml).each(function (i, item) {
            var nombre = $(this).find('nombre').text();
            var apellido = $(this).find('apellido').text();
            var direccion = $(this).find('direccion').text();

            var telcasa, telmovil, teltrabajo;

            $("telefonos", item).each(function (i, tel) {
                telcasa = $(this).find('telcasa').text();
                telmovil = $(this).find('telmovil').text();
                teltrabajo = $(this).find('teltrabajo').text();
            });

            console.log(nombre + " " + apellido + " " + direccion);
            console.log(telcasa + " " + telmovil + " " + teltrabajo);

            var tbody = document.getElementsByTagName("tbody")[0];
            var tr = document.createElement("tr");
            var td = document.createElement("td");
            td.appendChild(document.createTextNode(nombre));
            tr.appendChild(td);
            var td = document.createElement("td");
            td.appendChild(document.createTextNode(apellido));
            tr.appendChild(td);
            var td = document.createElement("td");
            td.appendChild(document.createTextNode(direccion));
            tr.appendChild(td);
            var td = document.createElement("td");
            td.appendChild(document.createTextNode(telcasa));
            tr.appendChild(td);
            var td = document.createElement("td");
            td.appendChild(document.createTextNode(telmovil));
            tr.appendChild(td);
            var td = document.createElement("td");
            td.appendChild(document.createTextNode(teltrabajo));
            tr.appendChild(td);
            tbody.appendChild(tr);
        })

    });
});


console.log("Final");

