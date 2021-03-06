console.log("Cargado");
var bd;

function cargar() {
//    var crear = document.getElementById('crearDB');
//    crear.addEventListener('click', crearDB, false);

    var insertar = document.getElementById('insertar');
    insertar.addEventListener('click', insertarDB, false);

    var leerT = document.getElementById('leerT');
    leerT.addEventListener('click', leerTodosDB, false);

    var borrarT = document.getElementById('borrarT');
    borrarT.addEventListener('click', borrarTabla, false);

    var borrarR = document.getElementById('borrarR');
    borrarR.addEventListener('click', borrarRegistros, false);

    var buscarR = document.getElementById('buscar');
    buscarR.addEventListener('click', buscarCodigo, false);

    var actualizarR = document.getElementById('actualizar');
    actualizarR.addEventListener('click', actualizarDepartamento, false);

    crearDB();
}

function buscarCodigo() {
    var transaccion = bd.transaction(["Departamento"], "readonly");
    var contenedor = transaccion.objectStore("Departamento");

    var busqueda = document.getElementById("busqueda");

    $("tbody tr").remove();

    contenedor.openCursor().onsuccess = function (event) {
        var cursor = event.target.result;

        if (cursor) {

            if (cursor.value.codigo === busqueda.value) {
                console.log("Se ha encontrado el codigo del departamento");

                var tbody = document.getElementsByTagName("tbody")[0];
                var tr = document.createElement("tr");
                var td = document.createElement("td");
                td.appendChild(document.createTextNode(cursor.value.codigo));
                tr.appendChild(td);
                var td = document.createElement("td");
                td.appendChild(document.createTextNode(cursor.value.descripcion));
                tr.appendChild(td);
                var td = document.createElement("td");
                td.appendChild(document.createTextNode(cursor.value.vNegocio));
                tr.appendChild(td);
                var td = document.createElement("td");
                td.appendChild(document.createTextNode(cursor.value.fechaBaja));
                tr.appendChild(td);
                tbody.appendChild(tr);
                var boton = document.createElement("button");
                boton.appendChild(document.createTextNode("Modificar"));
                boton.setAttribute("value", "Modificar");
                boton.setAttribute("class", "modificar");
                boton.setAttribute("codigo", cursor.value.codigo);
                tr.appendChild(boton);
                tbody.appendChild(tr);
                var boton2 = document.createElement("button");
                boton2.appendChild(document.createTextNode("Borrar"));
                boton2.setAttribute("value", "Borrar");
                boton2.setAttribute("class", "borrar");
                boton2.setAttribute("codigo", cursor.value.codigo);
                tr.appendChild(boton2);
                tbody.appendChild(tr);

                $(".modificar").click(function () {
                    modificarRegistro(this);
                });
                $(".borrar").click(function () {
                    borrarRegistro(this);
                });
            }

            cursor.continue();

        } else {
            console.log("Se han leido todos los registros");
        }
    };
}

function borrarRegistros() {
    var transaccion = bd.transaction(["Departamento"], "readwrite");
    var contenedor = transaccion.objectStore("Departamento");

    $("tbody tr").remove();

    contenedor.openCursor().onsuccess = function (event) {
        var cursor = event.target.result;
        console.log(cursor);
        if (cursor) {
            cursor.delete();
            cursor.continue();
        } else {
            console.log("Se han borrado todos los registros");
        }
    }
}

function borrarRegistro(codigo) {
    var codigoDepartamento = codigo.getAttribute("codigo");
    console.log(codigoDepartamento);

    var transaccion = bd.transaction(["Departamento"], "readwrite");
    var contenedor = transaccion.objectStore("Departamento");

    contenedor.openCursor().onsuccess = function (event) {
        var cursor = event.target.result;

        if (cursor) {

            if (cursor.value.codigo === codigoDepartamento) {
                console.log("Se ha borrado el codigo del departamento");

                cursor.delete();
            }

            cursor.continue();

        } else {
            console.log("Se han leido todos los registros");
        }
    };
    leerTodosDB();

}

function actualizarDepartamento() {
    var transaccion = bd.transaction(["Departamento"], "readwrite");
    var contenedor = transaccion.objectStore("Departamento");

    var codigo = $("#cod2").val();
    var desc2 = $("#desc2").val();
    var vNeg2 = $("#vneg2").val();
    var fechaBaja2 = $("#fechaBaja2").val();

    //Borrar la tabla por key
    contenedor.get("asd").onsuccess = function (event) {
        var objeto = event.target.result;

        if (objeto != "undefined") {
            //objeto.dimension="200"; //Tambíen se pued
            contenedor.put({codigo: codigo, descripcion: desc2, vNegocio: vNeg2, fechaBaja: fechaBaja2});
            console.log(objeto);
        }
    };
    $(".tabla").css("display", "block");
    $(".formularioMod").css("display", "none");
    leerTodosDB();
}

function borrarTabla() {
    $(".tabla").css("display", "none");
}

function leerTodosDB() {
    var transaccion = bd.transaction(["Departamento"], "readonly");
    var contenedor = transaccion.objectStore("Departamento");

    $("tbody tr").remove();

    contenedor.openCursor().onsuccess = function (event) {
        var cursor = event.target.result;
        console.log(cursor);
        if (cursor) {

            var tbody = document.getElementsByTagName("tbody")[0];
            var tr = document.createElement("tr");
            var td = document.createElement("td");
            td.appendChild(document.createTextNode(cursor.value.codigo));
            tr.appendChild(td);
            var td = document.createElement("td");
            td.appendChild(document.createTextNode(cursor.value.descripcion));
            tr.appendChild(td);
            var td = document.createElement("td");
            td.appendChild(document.createTextNode(cursor.value.vNegocio));
            tr.appendChild(td);
            var td = document.createElement("td");
            td.appendChild(document.createTextNode(cursor.value.fechaBaja));
            tr.appendChild(td);
            tbody.appendChild(tr);
            var boton = document.createElement("button");
            boton.appendChild(document.createTextNode("Modificar"));
            boton.setAttribute("value", "Modificar");
            boton.setAttribute("class", "modificar");
            boton.setAttribute("codigo", cursor.value.codigo);
            tr.appendChild(boton);
            tbody.appendChild(tr);
            var boton2 = document.createElement("button");
            boton2.appendChild(document.createTextNode("Borrar"));
            boton2.setAttribute("value", "Borrar");
            boton2.setAttribute("class", "borrar");
            boton2.setAttribute("codigo", cursor.value.codigo);
            tr.appendChild(boton2);
            tbody.appendChild(tr);

            $(".modificar").click(function () {
                modificarRegistro(this);
            });
            $(".borrar").click(function () {
                borrarRegistro(this);
            });

            cursor.continue();

        } else {
            console.log("Se han leido todos los registros");
        }
        $(".tabla").css("display", "block");
    };

}

function modificarRegistro(botonPulsado) {
    console.log(botonPulsado);
    codigo = botonPulsado.getAttribute("codigo");

    var transaccion = bd.transaction(["Departamento"], "readonly");
    var contenedor = transaccion.objectStore("Departamento");

    contenedor.openCursor().onsuccess = function (event) {
        var cursor = event.target.result;

        if (cursor) {

            if (cursor.value.codigo === codigo) {
                console.log("Se ha encontrado el codigo del departamento");


                $("#cod2").val(cursor.value.codigo);
                $("#cod2").attr("disabled", true);
                $("#desc2").val(cursor.value.descripcion);
                $("#vneg2").val(cursor.value.vNegocio);
                $("#fechaBaja2").val(cursor.value.fechaBaja);
            }

            cursor.continue();

        } else {
            console.log("Se han leido todos los registros");
        }
    };
    $(".tabla").css("display", "none");
    $(".formularioMod").css("display", "block");

}

function insertarDB() {
    var codv = document.getElementById("cod").value;
    var descv = document.getElementById("desc").value;
    var vnegv = document.getElementById("vneg").value;
    var fechaBaja = document.getElementById("fechaBaja").value;

    console.log(fechaBaja);
    if (fechaBaja === '') {
        console.log("go");
        fechaBaja = "-";
    }

    var transaccion = bd.transaction(["Departamento"], "readwrite");//creamos una transaccion sobre la tabla colchones

    //metemos lo que nos da en un objeto contenedor
    var contenedor = transaccion.objectStore("Departamento");
    console.log(contenedor);

    contenedor.add({codigo: codv, descripcion: descv, vNegocio: vnegv, fechaBaja: fechaBaja});

    leerTodosDB();
    limpiarCampos();
}

function modificarCampos() {

    var codv = document.getElementById("cod").value;
    var descv = document.getElementById("desc").value;
    var vnegv = document.getElementById("vneg").value;
    var fechaBaja = document.getElementById("fechaBaja").value;

    var transaccion = bd.transaction(["Departamento"], "readwrite");
    var contenedor = transaccion.objectStore("Colchones1");

    //Borrar la tabla por key
    contenedor.get("asd").onsuccess = function (event) {
        var objeto = event.target.result;

        if (objeto != "undefined") {
            //objeto.dimension="200"; //Tambíen se pued
            contenedor.put({codigo: codv, descripcion: descv, vNegocio: vnegv});
            console.log(objeto);
        }
    };
}
;

function limpiarCampos() {
    document.getElementById("cod").value = "";
    document.getElementById("desc").value = "";
    document.getElementById("vneg").value = "";
    document.getElementById("fechaBaja").value = "";
}

function crearDB() {
    //Crear la BD
    //Metodo de crear open
    var abrirBD = window.indexedDB.open("Departamentos", 3);//Nombre y versión
    console.log(abrirBD);

    //si la operación de open tiene exito crea la BD o la abre si ya existe
    abrirBD.onsuccess = function (event) {
        //si tiene exito me da acceso a la bd
        //Tiene que ser una variable global
        bd = event.target.result;
        console.log(bd);
    }

    //si no es posible abrir la BD
    abrirBD.onerror = function (event) {
        console.log("No se ha posido acceder a la BD" + event.target.errorCode);
    }

    abrirBD.onupgradeneeded = function (event) {
        //Punto a la bd
        bd = event.target.result;
        //Crear un contenedor ObjectStore
        bd.createObjectStore("Departamento", {keyPath: "codigo"});
    }

}

window.addEventListener('load', cargar, false);

console.log("Final");