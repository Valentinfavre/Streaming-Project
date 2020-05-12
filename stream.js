

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
function hovercross(element) {
    element.setAttribute('src', 'image/BlackCross.png');
}
function unhovercross(element) {
    element.setAttribute('src', 'image/WhiteCross.png');
}


//ouvrir la page sur les info du film
function lecteurpage(x) {
    if (x === 1){
        window.location= "http://localhost/bunny.php";
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
//fonction pour revenir a la page index.php avec la croi
function fermepage(x) {
    if (x === 1){
        window.location="http://localhost";
    }
}
//fonction qui va lire la video grace au bouton blanc
function lecteurvideo(x) {
    if (x === 1){
        window.location="http://localhost/film/bigbuckbuny.mp4";
    }


}