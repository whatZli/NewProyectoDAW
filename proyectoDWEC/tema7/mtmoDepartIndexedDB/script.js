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
                
                document.getElementById("cod").value=cursor.value.codigo;
                document.getElementById("desc").value=cursor.value.descripcion;
                document.getElementById("vneg").value=cursor.value.vNegocio;
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

function borrarTabla() {
    $("tbody tr").remove();
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
            cursor.continue();

        } else {
            console.log("Se han leido todos los registros");
        }
    };
}

function insertarDB() {
    var codv = document.getElementById("cod").value;
    var descv = document.getElementById("desc").value;
    var vnegv = document.getElementById("vneg").value;
    var fechaBaja = document.getElementById("fechaBaja").value;
    
    console.log(fechaBaja);
    if(fechaBaja===''){
        console.log("go");
        fechaBaja="-";
    }
    
    var transaccion = bd.transaction(["Departamento"], "readwrite");//creamos una transaccion sobre la tabla colchones

    //metemos lo que nos da en un objeto contenedor
    var contenedor = transaccion.objectStore("Departamento");
    console.log(contenedor);

    contenedor.add({codigo: codv, descripcion: descv, vNegocio: vnegv, fechaBaja: fechaBaja});

    leerTodosDB();
}

function crearDB() {
    //Crear la BD
    //Metodo de crear open
    var abrirBD = window.indexedDB.open("Departamentos", 2);//Nombre y versión
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
        bd.createObjectStore("Departamento", {autoIncrement: true});
    }

}










window.addEventListener('load', cargar, false);

console.log("Final");