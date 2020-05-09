<?php
?>

<!DOCTYPE html>
<html lang=fr dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Clevrean</title>
</head>
<link rel="stylesheet" href="./style/login.css">
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
            </form>
        </div>
    </div>
</body>

