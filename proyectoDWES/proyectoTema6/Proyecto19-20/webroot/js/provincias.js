function provincias(objeto) {
    var codPostal;
    valor = objeto.value;

    if (valor.length === 4) {

        console.log("Cojo 1 carácter");
        codPostal = valor[0];

        xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("locateList").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "controller/cProvinciasAjax.php?cod=" + codPostal, true);
        xmlhttp.send();



    } else if (valor.length === 5) {
        console.log("Cojo los 2 carácteres");
        codPostal = valor[0] + valor[1];

        xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("locateList").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "controller/cProvinciasAjax.php?cod=" + codPostal, true);
        xmlhttp.send();
    }
    console.log("La parte del código postal cogida es: "+codPostal);
}