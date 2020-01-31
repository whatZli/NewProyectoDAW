console.log("Inicio");
$(document).ready(function () {
    var jsonVirus = {"nombre": "gripe"};

    console.log(jsonVirus.nombre);

    var jsonVirus2 = {
        "virus": [
            {"nombre": "gripe"},
            {"nombre": "gripe C"},
            {"nombre": "gripe A"}
        ]
    };

    console.log(jsonVirus2);
    console.log(jsonVirus2.virus[2]);


    var jsonVirus3 = {
        "virus": [
            {"nombre": "gripe", "tiempo": 15},
            {"nombre": "gripe C", "tiempo": 5},
            {"nombre": "gripe A", "tiempo": 3}
        ]
    };

    console.log(jsonVirus3);
    console.log(jsonVirus3.virus[1].nombre + ":" + jsonVirus3.virus[1].tiempo);

    
     var jsonVirus4 = {
         
        "virus": [
            {"nombre": "gripe", "@tiempo": 15},
            {"nombre": "gripe C", "@tiempo": 5},
            {"nombre": "gripe A", "@tiempo": 3}
        ],
        "medicamentos": [
            {"nombre": "Frenadol", "@tiempo": 22},
            {"nombre": "paracetamol", "@tiempo": 14},
            {"nombre": "Sin cura", "@tiempo": 13}
        ]
    };

    console.log(jsonVirus4.virus[2].nombre+" --- "+jsonVirus4.medicamentos[2].nombre);
    console.log(jsonVirus4.virus[2].nombre+" --- "+jsonVirus4.medicamentos[2]['@tiempo']);
    console.log(typeof(jsonVirus4));
    json=JSON.stringify(jsonVirus4);
    console.log(typeof(json));
    console.log(JSON.stringify(jsonVirus4));//Pasar JSON a string
    
    for(virus in jsonVirus4.virus){
        console.log(jsonVirus4.virus[virus].nombre);
    }
    
    
    
});


console.log("Final");

