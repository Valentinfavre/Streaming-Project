<?php
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <title> Bunny</title> <!-- titre de l'onglet -->
    <meta charset = "utf-8" />
    <script src = "streaming.js"> </script>
    <link rel = "stylesheet" type = "text/css" href = "stream.css" />
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@700&display=swap" rel="stylesheet">
</head>
<body id="bodyfilmdescription">

<div id="haut">
    <div id="fermeWindow" > <img src="image/WhiteCross.png" alt="bigbunny" alt="bigbunnymovie" id="image"
                                 onmouseover = "hovercross(this)" onmouseout = "unhovercross(this)" onclick="fermepage(1)">
    </div>
    <div id="imagefilm"> <img src="image/bigbunny3.PNG" alt="bunny" id="affichedescrip"></div>
    <div id="encadrementtitrefilm2"><h2 id="styletitrefilm2"> Big Buck Bunny</h2></div>
</div>
<div id="bas">
    <div id="temp">10 minutes | VF VOST</div>
    <div id="description"><p>Big Buck Bunny raconte l'histoire d'un lapin géant avec un cœur plus
            gros que lui. Quand un jour ensoleillé trois rongeurs le
            harcèlent grossièrement, quelque chose se casse ... et le
            lapin n'est plus un lapin! Dans la tradition typique du
            dessin animé, il prépare les méchants rongeurs
            à une vengeance comique.</p>
    </div>
    <div id="boutonplayfilm" onclick="lecteurvideo(1)"> <h2>Lancer le Film</h2> </div>
</div>








</body>
</html>

