var coll = document.getElementsByClassName("collapsible");
var i;
console.log("prueba desplegable");
for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight) {
            content.style.maxHeight = null;
            console.log("Se ha encogido");
            //Poniéndole null vuelve a coger el valor que le indicamos en el style.css
            this.style.filter = null;
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
            console.log("Se ha expandido");
            this.style.filter = "grayscale(0%)";
        }
    });
}