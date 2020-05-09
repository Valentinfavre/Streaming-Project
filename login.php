<?php session_start();

$incorrect = false;

if (!isset($_POST['mdp']) || !isset($_POST['identifiant']))
{
}
elseif ($_POST['mdp'] !== "kangourou" || $_POST['identifiant'] !== "kangourou")
{
    $incorrect = true;
}
else {
    $_SESSION['login'] = 1;
    header('Location: index.php');
}


?>

<!DOCTYPE html>
<html lang=fr dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Clevrean</title>
    <link rel="stylesheet" href="./style/login.css">
</head>

<body>
    <div class="accueil">

        <div class="donnée utilisateur">
            Entrer votre pseudo et votre mot de passe
            <form action ="login.php" method="post">
                <table>
                    <tr>
                        <td>
                            <label for="identifiant">Identifiant</label> :
                        </td>
                        <td>
                            <input type="text" class="barre" name="identifiant" id="identifiant"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="mdp">Mot de passe</label> :
                        </td>
                        <td>
                            <input type="password" class="barre" name="mdp" id="mdp" required/>
                        </td>
                    </tr>
                </table>

                <div class="error">
                    <?php
                    if ($incorrect)
                        echo "*erreur mot de passe ou identifiant incorrect !*";
                    ?>
                </div>

                <input type="submit"
                       class="confirm"
                       value="Confirmer"/>
            </form>
        </div>
        
    </div>

</body>

</html>

