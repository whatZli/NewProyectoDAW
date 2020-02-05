function showUser(title) {
    if (title == "") {
        document.getElementById("articlesList").innerHTML = "";
        return;
    }
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("articlesList").innerHTML = this.responseText;
        }
    }
    xmlhttp.open("GET", "controller/cArticleAjax.php?a=" + title, true);
    xmlhttp.send();
}