
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <title> JUSTCHILL</title> <!-- titre de l'onglet -->
    <meta charset = "utf-8" />
    <script src = "stream.js"> </script>
    <link rel = "stylesheet" type = "text/css" href = "stream.css" />
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@700&display=swap" rel="stylesheet">
</head>

<body id="bodybackend">
<form action = "process.php" method = "POST">
    <br><br>
    <label for="nf">Numéro de Film
    <input type = "number" name = "numerofilm">
    </label>
    <br><br>
    <label for="tf">Titre Film
        <input type = "text" name = "titrefilm">
    </label>
    <br><br>
    <label for="pf">Nom de la Photo du Film
        <input type = "text" name = "photofilm">
    </label>
    <br><br>
    <label for="tft">Titre du Film tout accrocher
        <input type = "text" name = "titreacro">
    </label>
    <br><br>
    <label for="mp4">Nom Fichier MP4 du Film
        <input type = "text" name = "mp4">
    </label>
    <br> <br>
    <input type = "submit" value = "Submit">
</form>
</body>
</html>