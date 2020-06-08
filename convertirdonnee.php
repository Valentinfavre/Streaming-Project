<?php

$monfichier = "film.json";
$montableau = array();

try
{

    $donneerecuperer = array(
        'numerodefilm'=> $_POST['numerofilm'],
        'titre'=> $_POST['titrefilm'],
        'photoFilm'=>$_POST['photofilm'],
        'titrecourt'=> $_POST['titreacro'],
        'film'=> $_POST['mp4']
    );

    //récupére bien les donner déja dans film.json
    $donnee = file_get_contents($monfichier);
    //convertit les donner json en tableau json
    $montableau = json_decode($donnee, true);
    ///rajout des donner q'uon vient de rentrer dans le tableau
    array_push($montableau,$donneerecuperer);
    //on ré en code en json
    $donnee = json_encode($montableau, JSON_PRETTY_PRINT);
    /// on envoi tout ca
    if(file_put_contents($monfichier, $donnee)) {

        echo "<script type='text/javascript'>
                alert('SUCCESSFUL');
                window.location = \"http://localhost/backend.php\";
            </script>";
    }
    else
        echo "<script type='text/javascript'>
                alert('ERROR');
                window.location = \"http://localhost/backend.php\";
            </script>";

}
catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
// source pour m'avoir aider http://www.kodecrash.com/javascript/read-write-json-file-using-php/
?>

