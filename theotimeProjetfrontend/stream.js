

// fonction pour changer limage quant on passe la sourie
function hoverPlay(element) {
    element.setAttribute('src', 'image/play.PNG');
}
function unhoverbunny(element) {
    element.setAttribute('src', 'image/bigbunny.PNG');
}
function unhoverfast(element) {
    element.setAttribute('src', 'image/fast.PNG');
}
function unhoverextra(element) {
    element.setAttribute('src', 'image/extration.PNG');
}
function unhoverjohn(element) {
    element.setAttribute('src', 'image/john.PNG');
}


//ouvrir la page avec le lecteur video
function lecteurvideo(x) {
    if (x === 1){
        window.location= "http://localhost:3000/stream/bunny.php";
    }
    if (x === 2){
        window.location= "http://localhost:3000/stream/John_Henry.php";
    }
    if (x === 3){
        window.location= "http://localhost:3000/stream/Fast_and_furious.php";
    }
    if (x === 4){
        window.location= "http://localhost:3000/stream/Extraction.php";
    }





}