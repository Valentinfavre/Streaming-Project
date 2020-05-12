function hovercross(element) {
    element.setAttribute('src', 'image/BlackCross.png');
}
function unhovercross(element) {
    element.setAttribute('src', 'image/WhiteCross.png');
}
function fermepage(x) {
    if (x === 1){
        window.location="http://localhost:3000/stream/stream.php";
    }
}
function lecteurvideo(x) {
    if (x === 1){
        window.location="http://localhost:3000/stream/film/bigbuckbuny.mp4";
    }


}