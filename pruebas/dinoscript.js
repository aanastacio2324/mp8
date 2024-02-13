var dino = document.getElementById("dino")
var obstaculo = document.getElementById("obstaculo")

function salt(){
    if(dino.classList !="saltando"){
    dino.classList.add("saltando");
}
setTimeout(function(){
    dino.classList.remove("saltando")
},500);
}

var muerte = setInterval(function(){
    //parseint nro de expresion
    //getComputedStyle donde coger datos
    //getPropertyValue que valor coger
    var dinotop = parseInt(window.getComputedStyle(dino).getPropertyValue("top"));
    var obstaculoleft = parseInt(window.getComputedStyle(obstaculo).getPropertyValue("left"));

    if(obstaculoleft<20 && obstaculoleft>0 && dinotop>=130){
        alert("Has Muerto!");
        window.location.reload();
    }
})

var n=0;
var l= document.getElementById("contador");
window.setInterval(function(){
    l.innerHTML = n;
    n++;
},500);