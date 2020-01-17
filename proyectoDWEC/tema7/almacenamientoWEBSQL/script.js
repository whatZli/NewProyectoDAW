console.log("Script iniciado");

function crearBD() {
    console.log('Crear BD())');
    //Crear Base de datos
    mibbdd = openDatabase("colchones", "1.0", "Base de datos de colchones", 1024 * 1024);
    console.log("Lo que devuelve middbb -> ");
    console.log(mibbdd);
    //Crear la tabla colchón
    mibbdd.transaction(function (sql) {
        console.log("valor de sql ->");
        console.log(sql);
        sql.executeSql("create table colchon (id,marca,dimension,material)");
    });
}

function insertarBD() {
    console.log("insertar");
    
    var id = document.getElementById("id").value;
    var marca = document.getElementById("marca").value;
    var dimension = document.getElementById("dimension").value;
    var material = document.getElementById("material").value;

    //Insertar datos en la Base de Datos
    //Se vuelve a eecutar el comando de creación de la BD
    mibbdd = openDatabase("colchones", "1.0", "Base de datos de colchones", 1024 * 1024);
    
    mibbdd.transaction(function (sql) {
        sql.executeSql("insert into colchon (id,marca,dimension,material) values( ?,?,?,? )",[id,marca,dimension,material]);
    });
}

function leerBD(){
    mibbdd = openDatabase("colchones", "1.0", "Base de datos de colchones", 1024 * 1024);
    var p=document.getElementById("parrafo");
    
    mibbdd.transaction(function (sql) {
        //Ejecutamos un select
        sql.executeSql("select * from colchon"),[],
        
        function(sql,resultSet){
            //El select devuelve un resultSet
            console.log(resultSet);
            for(var i=0;i<resultSet.rows.length;i++){
                p.innerHTML+=resultSet.rows.item(i).id + ","
                + resultSet.rows.item(i).marca + ","
                + resultSet.rows.item(i).dimension + ","
                + resultSet.rows.item(i).material + ",";
            }
        },
        function errorCallback(tx,error){
            alert(error.message);
        }
    });
}

function cargar() {
    console.log("Carga función");
    var crear = document.getElementById("crear")
    crear.addEventListener('click', crearBD, false);
    var insertar = document.getElementById("insertar")
    insertar.addEventListener('click', insertarBD, false);
    
    var leer = document.getElementById("leer")
    leer.addEventListener('click', leerBD, false);
}
window.addEventListener('load', cargar, false);