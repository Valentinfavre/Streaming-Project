
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <title> JUSTCHILL SETTING</title> <!-- titre de l'onglet -->
    <meta charset = "utf-8" />
    <script src = "stream.js"> </script>
    <link rel = "stylesheet" type = "text/css" href = "stream.css" />
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@700&display=swap" rel="stylesheet">
</head>

<body id="bodybackend">
<div class="head"> <img src="image/logo.png" alt="logo" id="logo"> </div><br><br>
<div id="encadrementback">
    <form action="convertirdonnee.php" method="POST">
        <label for="Nf">Numéro de Film</label>
            <input type="text"  name="numerofilm" placeholder="Numéro de Film">
        <label for="ltf">Titre Film</label>
        <input type="text"  name="titrefilm" placeholder="Titre Film">

        <label for="npf">Nom de la Photo du Film</label>
        <input type="text"  name="photofilm" placeholder="Nom de la Photo du Film">

        <label for="tdf">Titre du Film tout accrocher</label>
        <input type="text"  name="titreacro" placeholder="Titre du Film tout accrocher">

        <label for="lname">Chemin du Fichier MP4 du Film</label>
        <input type="text" id="lname" name="mp4" placeholder="Nom Fichier MP4 du Film">

        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>