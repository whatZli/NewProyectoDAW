console.log("inicio");
var bd;

$(document).ready(function () {
    console.log("Jquery cargado");

    crearDB();

    $("#conectar").click(function () {
        $.get("ajax.php", function (respuesta) {

            var json = respuesta;
            var objetos = JSON.parse(json);
            console.log(objetos);

            var transaccion = bd.transaction(["BD_Maria"], "readwrite");
            //metemos lo que nos da en un objeto contenedor
            var contenedor = transaccion.objectStore("BD_Maria");

            $(objetos).each(function (index) {
                contenedor.put({id: objetos[index].id, nombre: objetos[index].nombre});
            });
        });

    });

    $("#insertar").click(function () {
        $("#forminsert").css("display", "block");
    });

    $("#binsert").click(function () {
        var id=$("#id").val();
        var nombre=$("#nombre").val();

        var transaccion = bd.transaction(["BD_Maria"], "readwrite");//creamos una transaccion sobre la tabla colchones

        //metemos lo que nos da en un objeto contenedor
        var contenedor = transaccion.objectStore("BD_Maria");
        console.log(contenedor);

        contenedor.add({id: id, nombre: nombre});
    });

    $("#mostrar").click(mostrar);
    function mostrar() {
        $("tr").remove();
        var transaccion = bd.transaction(["BD_Maria"], "readonly");
        var contenedor = transaccion.objectStore("BD_Maria");


        contenedor.openCursor().onsuccess = function (event) {
            var cursor = event.target.result;
            console.log(cursor);
            if (cursor) {
                var tr = $("<tr></tr>");
                var tdid = $("<td></td>").text(cursor.value.id);
                var tdnombre = $("<td></td>").text(cursor.value.nombre);
                var tdmodificar = $("<button></button>").text("Modificar");
                $(tdmodificar).attr("id", cursor.value.id);
                $(tdmodificar).attr("nombre", cursor.value.nombre);

                var tdborrar = $("<button></button>").text("Borrar");
                $(tdborrar).attr("id", cursor.value.id);
                $(tdborrar).attr("nombre", cursor.value.nombre);

                $("tbody").append(tr);
                $(tr).append(tdid, tdnombre, tdmodificar, tdborrar);


                //Mostrar en el formulario de  modificar
                $(tdmodificar).click(function () {

                    var id = $(this).attr("id");
                    var nombre = $(this).attr("nombre");

                    console.log(this);
                    $("#formmod").css("display", "block")
                    $("#idm").val(id);
                    $("#nombrem").val(nombre);
                })

                //Funcion Aceptar la modificación
                $("#bmod").click(modificar)

                //Function borrar
                $(tdborrar).click(function () {
                    console.log(this);
                    var id = $(this).attr("id");

                    var transaccion = bd.transaction(["BD_Maria"], "readwrite");
                    var contenedor = transaccion.objectStore("BD_Maria");

                    contenedor.openCursor().onsuccess = function (event) {
                        var cursor = event.target.result;

                        if (cursor) {

                            if (cursor.value.id === id) {
                                console.log("Se ha borrado el registro");

                                cursor.delete();
                            }

                            cursor.continue();

                        } else {
                            console.log("Se han leido todos los registros");
                        }
                    };
                    $("tr").remove();
                })
                cursor.continue();
            }
        }

    }

    function modificar() {
        id = $("#idm").val();
        nombre = $("#nombrem").val();

        var transaccion = bd.transaction(["BD_Maria"], "readwrite");
        var contenedor = transaccion.objectStore("BD_Maria");

        //Borrar la tabla por key
        contenedor.get("asd").onsuccess = function (event) {
            var objeto = event.target.result;

            if (objeto != "undefined") {
                //objeto.dimension="200"; //Tambíen se pued
                contenedor.put({id: id, nombre: nombre});
                console.log(objeto);
            }
        };

        $("#formmod").css("display", "none");
        $("tr").remove();
    }

    function crearDB() {
        //Crear la BD
        //Metodo de crear open
        var abrirBD = window.indexedDB.open("BD_Maria", 1);//Nombre y versión
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
            bd.createObjectStore("BD_Maria", {keyPath: "id"});
        }

    }




});
console.log("final");