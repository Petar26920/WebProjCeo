document.getElementById("proizvodi").addEventListener("submit",ukupanIznos);

function ukupanIznos(event){
event.preventDefault();
//console.log("izoke");
if(document.getElementById("s-grad").value === "")
    {
        alert("Morate izabrati grad!");
    }
    var kolPrvi = document.getElementById("jedan").value,
        kolDrugi = document.getElementById("dva").value,
        kolTreci = document.getElementById("tri").value,
        grad = document.getElementById("s-grad").value;

    var methods = document.getElementById("proizvodi").r_method,
    isporukaMethod;
    for(var i=0;i<methods.length;i++){
        if(methods[i].checked){
            isporukaMethod = methods[i].value;
        }
    }
    // console.log(kolPrvi);
    // console.log(kolDrugi);
    // console.log(kolTreci);
    // console.log(grad);
    // console.log(isporukaMethod);


    var pdvIznos = 1;
    if(grad === "DR"){
        pdvIznos = 1.20;
    }

    var cenaIsporukePo = 0;
    switch (isporukaMethod) {
        case "preuzimanje": cenaIsporukePo=0;
            break;
        case "kompanijski": cenaIsporukePo=2;
            break;
        case "postexpres": cenaIsporukePo=3;
            break;
    
        default:
            break;
    }

    var izracunaj = ((kolPrvi * (10+cenaIsporukePo)) + (kolDrugi * (8+cenaIsporukePo)) + (kolTreci * (10+cenaIsporukePo))) * pdvIznos;

    document.getElementById("txt-izracunaj").value = izracunaj;

    document.getElementById("rezultati").innerHTML = "<p>Ukupno proizvoda:"+(kolPrvi+kolDrugi+kolTreci)+"<br>Cena isporuka:"+cenaIsporukePo+"<br>PDV: "+pdvIznos.toFixed(2)+"</p>"

}   