function provincias(objeto) {
    valor = objeto.value;

    if (valor.length === 4) {
        
        console.log("Cojo 1 carácter");

        xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("articlesList").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "controller/cProvinciasAjax.php?cod=" + valor[0], true);
        xmlhttp.send();



    } else if (valor.length === 5) {
        console.log("Cojo los 2 carácteres");
        
        
    }


    console.log(valor[1]);

}