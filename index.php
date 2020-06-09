<?php
$jsondata = json_decode(file_get_contents("film.json"));
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <title> JUSTCHILL</title> <!-- titre de l'onglet -->
    <meta charset = "utf-8" />
    <link rel = "stylesheet" type = "text/css" href = "stream.css" />
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@700&display=swap" rel="stylesheet">
</head>
<body>


<div class="head"> <img src="image/logo.png" alt="logo" id="logo"> </div><br><br>
<div id="miseformeaffiche">
    <div id="categorie"><h2> Nouveautées</h2></div>
    <?php foreach($jsondata as $film): ?>
        <div id="encadrementFilm">
            <img src="image/<?php echo $film->photoFilm ?>" alt="<?php echo $film->titre ?>" id="image"
                 onmouseover = "hoverPlay(this)" onmouseout = "unhover<?php echo $film->titrecourt ?>
                    (this)" onclick="lecteurpage<?php echo $film->numerodefilm?>()">
            <div id="titrefilm">
                <h2 id="styletitrefilm"> <?php echo $film->titre ?> </h2>
            </div>
        </div>
        <script type='text/javascript'>
            function hoverPlay(element) {
                element.setAttribute('src', 'image/play.PNG');
            }
            function unhover<?php echo $film->titrecourt ?>(element) {
                element.setAttribute('src', 'image/<?php echo $film->photoFilm ?>');
            }
            function lecteurpage<?php echo $film->numerodefilm?>() {

                window.location = "<?php echo $film->film ?>";

            }
        </script>

    <?php endforeach;?>
</div>


</body>
</html>