$(function(){
    $.getJSON("archivo.json",[],function(json){
        datos=json.agenda.contacto;
        for(i in (datos)){
            console.log(datos[i].nombre);
        }
    });
});