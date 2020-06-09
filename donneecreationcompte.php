<?php
$monfichier = "compte.json";
$montableau = array();

try
{

    $donneerecuperer = array(
        'username'=> $_POST['username'],
        'name'=> $_POST['name'],
        'email'=>$_POST['email'],
        'password'=> $_POST['mdp'],
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
                window.location = \"http://localhost/new_account.php\";
            </script>";
    }
    else
        echo "<script type='text/javascript'>
                alert('ERROR');
                window.location = \"http://localhost/new_account.php\";
            </script>";

}
catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
// source pour m'avoir aider http://www.kodecrash.com/javascript/read-write-json-file-using-php/
?>

