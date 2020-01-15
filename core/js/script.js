console.log("script cargado correctamente");
$(function () {
    console.log("Se ha cargado jQuery");
});

$(function(){
    $("#aceptCookies").click(function () {
        $(".cookies-content").remove();
    });
    
});