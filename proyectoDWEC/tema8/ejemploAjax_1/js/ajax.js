$(function () {
    //---------------------------
    /*
     $.ajax({url:'archivo.php',type:'POST',async: true,data: 'numero=4', success: function(respuesta) {
     alert(respuesta);
     } })
     * 
     */
    //---------------------------
    //$('#respuesta').load("archivo.php",{numero:5});
    //---------------------------
    $.get("archivo.php?num=4",function(respuesta){
        alert(respuesta);
    });
    //---------------------------

});


