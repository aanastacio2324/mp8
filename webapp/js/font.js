var fs = 1.5;


//si clico el peque letra pequeña
function peque() {
    fs = fs-0.5;
    //para reconocer por clase es getElementById
    document.getElementById("text").style.fontSize= fs+"rem";
    //alert(fs+"rem"); 
}

//si clico el midi letra mediana
function midi() {
    fs=1;
    document.getElementById("text").style.fontSize= fs+"rem";
    //alert(fs+"rem"); 
}

//si clico el grande letra grande
function grande() {
    fs = fs+0.5;
    document.getElementById("text").style.fontSize= fs+"rem";
    //alert(fs+"rem");
}

// inicialmente onclick sobre el elemento
// addEventListener(evento,receptor)

document.getElementById("peque").addEventListener("click", peque);
document.getElementById("midi").addEventListener("click", midi);
document.getElementById("grande").addEventListener("click", grande);