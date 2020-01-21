console.log("Script iniciado");

var bd;

function cargar() {
    crearDB();//Abrir la BD
    
    var crear = document.getElementById('crear');
    crear.addEventListener('click', crearDB, false);
    
    var insertar = document.getElementById('insertar');
    insertar.addEventListener('click', insertarDB, false);
}

function insertarDB(){
    
    var idv = document.getElementById("id").value;
    var marcav = document.getElementById("marca").value;
    var dimensionv = document.getElementById("dimension").value;
    var materialv = document.getElementById("material").value;
    
    
    var transaccion=bd.transaction(["Colchones"], "readwrite");//creamos una transaccion sobre la tabla colchones
    
    //metemos lo que nos da en un objeto contenedor
    var contenedor=transaccion.objectStore("Colchones");
    console.log(contenedor);
    
    contenedor.add({id:idv,marca:marcav,dimension:dimensionv,material:materialv});
}   


function crearDB() {
    //Crear la BD
    //Metodo de crear open
    var abrirBD = window.indexedDB.open("Tienda", 4);//Nombre y versión
    console.log(abrirBD);

    //si la operación de open tiene exito crea la BD o la abre si ya existe
    abrirBD.onsucces = function (event) {
        //si tiene exito me da acceso a la bd
        //Tiene que ser una variable global
        bd = event.target.result;
        console.log(bd);
    }

    //si no es posible abrir la BD
    abrirBD.onerror = function (event) {
        console.log("No se ha posido acceder a la BD" + event.target.errorCode);
    }
    
    abrirBD.onupgradeneeded = function(event){
        //Punto a la bd
        bd=event.target.result;
        //Crear un contenedor ObjectStore
        bd.createObjectStore("NombreTabla", {autoincrement:true});
        bd.createObjectStore("Colchones", {autoincrement:true});
        bd.createObjectStore("Usuarios", {autoincrement:true});
    }
    
}

window.addEventListener('load', cargar, false);

//MARIA-------------------------
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var bd;

function cargar() {
    var crear = document.getElementById('crear');
    crear.addEventListener('click', crearDB, false);
    var insertar = document.getElementById('insertar');
    insertar.addEventListener('click', insertarDB, false);
    crearDB();
}
function insertarDB() {
    var idv = document.getElementById("id").value;
    var marcav = document.getElementById("marca").value;
    var dimensionv = document.getElementById("dimension").value;
    var materialv = document.getElementById("material").value;
    //abrimos la bd
    
    
    //creamos una transacion sobre la tabla 
    var transaccion = bd.transaction(["colchones"],"readwrite");
    
    //metemos lo que nos da en un objeto contenedor
    var contenedor = transaccion.objectStore("colchones");
    console.log(contenedor);
    
    contenedor.add({id:idv,marca:marcav,dimension:dimensionv,material:materialv});

    
}
function crearDB() {
    //Crear la BD. Tienda
    //metodo de crear open
    var abrirBD = window.indexedDB.open("tineda", 1);
    //si la operacion de open tiene exito
    //la crea si no existe o la abre si existe
    abrirBD.onsuccess = function (event) {
        //si tiene exito me da acceso a la bd
        //tiene que ser una variable global
        bd = event.target.result;
        console.log(bd);
    }

    //si no es posible abrir la BD
    abrirBD.onerror = function (event) {
        console.log("No se ha podido acceder a la BD" + event.target.errorCode);
    }

    abrirBD.onupgradeneeded = function (event) {
        //punto a la bd
        bd = event.target.result;
        //creamos contenedor tabla ObjectStore
        bd.createObjectStore("colchones", {autoIncrement:true});
    }


}

window.addEventListener('load', cargar, false)


