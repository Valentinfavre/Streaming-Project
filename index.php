<?php
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <title> JUSTCHILL</title> <!-- titre de l'onglet -->
    <meta charset = "utf-8" />
    <script src = "stream.js"> </script>
    <link rel = "stylesheet" type = "text/css" href = "stream.css" />
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@700&display=swap" rel="stylesheet">/*lien google pour avoir la police*/
</head>

<body>
/*le haut de la page avec le logo*/
<div class="head"> <img src="image/logo.png" alt="logo" id="logo"> </div><br><br>
<div id="miseformeaffiche">
    /*la categorie nouveau*/
    <div id="categorie"><h2> Nouveautées</h2></div>
    /*ce sont les 4 div qui contiens les 4 affiche*/
    <div id="encadrementFilm">
        <img src="image/bigbunny.PNG" alt="bigbunny" alt="bigbunnymovie" id="image"
             onmouseover = "hoverPlay(this)" onmouseout = "unhoverbunny(this)" onclick="lecteurpage(1)">
        <div id="titrefilm">
            <h2 id="styletitrefilm"> Big Buck Bunny </h2>
        </div>
    </div>

    <div id="encadrementFilm">
        <img src="image/john.PNG" alt="JohnHenry"  id="image"
             onmouseover = "hoverPlay(this)" onmouseout = "unhoverjohn(this)" onclick="lecteurpage(2)">
        <div id="titrefilm">
            <h2 id="styletitrefilm"> John Henry </h2>
        </div>
    </div>

    <div id="encadrementFilm">
        <img src="image/fast.PNG" alt="fastfurious"  id="image"
             onmouseover = "hoverPlay(this)" onmouseout = "unhoverfast(this)" onclick="lecteurpage(3)">
        <div id="titrefilm">
            <h2 id="styletitrefilm"> Fast And Furious</h2>
        </div>
    </div>

    <div id="encadrementFilm">
        <img src="image/extration.PNG" alt="Extration"  id="image"
             onmouseover = "hoverPlay(this)" onmouseout = "unhoverextra(this)" onclick="lecteurpage(4)">
        <div id="titrefilm">
            <h2 id="styletitrefilm"> Extration </h2>
        </div>
    </div>

</div>



</body>
</html>