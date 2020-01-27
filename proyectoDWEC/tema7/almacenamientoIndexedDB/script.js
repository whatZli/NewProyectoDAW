console.log("Script iniciado");

var bd;

function cargar() {

    var crear = document.getElementById('crear');
    crear.addEventListener('click', crearDB, false);

    var insertar = document.getElementById('insertar');
    insertar.addEventListener('click', insertarDB, false);

    var leer = document.getElementById('leer');
    leer.addEventListener('click', leerKeyDB, false);

    var leerT = document.getElementById('leerT');
    leerT.addEventListener('click', leerTodosDB, false);

    var borrar = document.getElementById('borrar');
    borrar.addEventListener('click', borrarKeyDB, false);

    var borrarT = document.getElementById('borrarT');
    borrarT.addEventListener('click', borrarTodosDB, false);

    var indice = document.getElementById('indice');
    indice.addEventListener('click', crearIndiceDB, false);

    var buscari = document.getElementById('buscari');
    buscari.addEventListener('click', buscarIndiceDB, false);

    var modificar = document.getElementById('modificar');
    modificar.addEventListener('click', modificarDB, false);

    //crearDB();//Abrir la BD
    //crearDB2();//Abrir la BD
    crearIndiceDB();
}

function buscarIndiceDB() {
    var transaccion = bd.transaction(["colchonesIndice"], "readonly");
    var contenedor = transaccion.objectStore("colchonesIndice");
    var index = contenedor.index('dimension');


    index.openCursor().onsuccess = function (event) {
        var cursor = event.target.result;
        console.log(cursor);
        if (cursor) {

            var tbody = document.getElementsByTagName("tbody")[1];
            var tr = document.createElement("tr");
            var td = document.createElement("td")
            td.appendChild(document.createTextNode(cursor.value.id));
            tr.appendChild(td);
            var td = document.createElement("td")
            td.appendChild(document.createTextNode(cursor.value.marca));
            tr.appendChild(td);
            var td = document.createElement("td")
            td.appendChild(document.createTextNode(cursor.value.dimension));
            tr.appendChild(td);
            var td = document.createElement("td")
            td.appendChild(document.createTextNode(cursor.value.material));
            tr.appendChild(td);
            tbody.appendChild(tr);
            cursor.continue();

        } else {
            console.log("No tiene más valores");
        }
    }
}

function crearIndiceDB() {
    //Crear la BD
    //Metodo de crear open
    var abrirBD = window.indexedDB.open("Tienda", 8);//Nombre y versión
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

        /*
         * *
         *   crear indice con una tabla nueva
         *
         */

        //punto a la bd
        bd = event.target.result;
        //creamos index tabla ObjectStore
        var contenedor = bd.createObjectStore("colchonesIndice2", {keyPath: 'id'});
        contenedor.createIndex('dimension', 'dimension', {unique: false});

        /*
         * Crear en una tabla existente
         * 
         */
        var existente = event.currentTarget.transaction;
        var contenedorExistente = existente.objectStore("Colchones1");
        contenedorExistente.createIndex("marca", "marca", {unique: false});


    }
}

function modificarDB() {
    var transaccion = bd.transaction(["Colchones1"], "readwrite");
    var contenedor = transaccion.objectStore("Colchones1");

    //Borrar la tabla por key
    contenedor.get("asd").onsuccess = function (event) {
        var objeto = event.target.result;

        if (objeto != "undefined") {
            //objeto.dimension="200"; //Tambíen se pued
            contenedor.put({id: "1", marca: "1", dimension: "1", material: "1"});
            console.log(objeto);
        }
    };
}

function crearDB2() {
    //Crear la BD
    //Metodo de crear open
    var abrirBD = window.indexedDB.open("Tienda", 4);//Nombre y versión
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
        bd.createObjectStore("Colchones1", {keyPath: "id"});
    }
}

function borrarTodosDB() {

}

function borrarKeyDB() {
    var transaccion = bd.transaction(["Colchones"], "readwrite");
    var contenedor = transaccion.objectStore("Colchones");

    //Borrar la tabla por key
    contenedor.get(2).onsuccess = function (event) {
        var objeto = event.target.result;

        if (objeto != "undefined") {
            contenedor.delete(2);
            console.log(objeto);
        }
    };
}

function leerTodosDB() {
    var transaccion = bd.transaction(["Colchones"], "readonly");
    var contenedor = transaccion.objectStore("Colchones");

    contenedor.openCursor().onsuccess = function (event) {
        var cursor = event.target.result;
        console.log(cursor);
        if (cursor) {

            var tbody = document.getElementsByTagName("tbody")[1];
            var tr = document.createElement("tr");
            var td = document.createElement("td")
            td.appendChild(document.createTextNode(cursor.value.id));
            tr.appendChild(td);
            var td = document.createElement("td")
            td.appendChild(document.createTextNode(cursor.value.marca));
            tr.appendChild(td);
            var td = document.createElement("td")
            td.appendChild(document.createTextNode(cursor.value.dimension));
            tr.appendChild(td);
            var td = document.createElement("td")
            td.appendChild(document.createTextNode(cursor.value.material));
            tr.appendChild(td);
            tbody.appendChild(tr);
            cursor.continue();

        } else {
            console.log("No tiene más valores");
        }
    }
}

function leerKeyDB() {
    var transaccion = bd.transaction(["Colchones"], "readonly");
    var contenedor = transaccion.objectStore("Colchones");

    //Consultar la tabla por key
    contenedor.get(3).onsuccess = function (event) {
        var objeto = event.target.result;
        console.log(objeto);
    };

    //Segunda tabla
    var transaccion = bd.transaction(["Colchones1"], "readonly");
    var contenedor = transaccion.objectStore("Colchones1");

    //Consultar la tabla por key
    contenedor.get("asd").onsuccess = function (event) {
        var objeto = event.target.result;
        console.log(objeto);
    };
}

function insertarDB() {

    var idv = document.getElementById("id").value;
    var marcav = document.getElementById("marca").value;
    var dimensionv = document.getElementById("dimension").value;
    var materialv = document.getElementById("material").value;


    var transaccion = bd.transaction(["Colchones"], "readwrite");//creamos una transaccion sobre la tabla colchones

    //metemos lo que nos da en un objeto contenedor
    var contenedor = transaccion.objectStore("Colchones");
    console.log(contenedor);

    contenedor.add({id: idv, marca: marcav, dimension: dimensionv, material: materialv});


    //Insertar en segunda tabla
    var transaccion1 = bd.transaction(["Colchones1"], "readwrite");//creamos una transaccion sobre la tabla colchones

    //metemos lo que nos da en un objeto contenedor
    var contenedor1 = transaccion1.objectStore("Colchones1");
    console.log(contenedor1);

    contenedor1.add({id: idv, marca: marcav, dimension: dimensionv, material: materialv});


}

function crearDB() {
    //Crear la BD
    //Metodo de crear open
    var abrirBD = window.indexedDB.open("Tienda", 4);//Nombre y versión
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
        bd.createObjectStore("NombreTabla", {autoIncrement: true});
        bd.createObjectStore("Colchones", {autoIncrement: true});
        bd.createObjectStore("Colchones1", {keyPath: "id"});
        bd.createObjectStore("Usuarios", {autoIncrement: true});
    }

}

window.addEventListener('load', cargar, false);


