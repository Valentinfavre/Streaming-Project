<?php session_start();

$jsondata = json_decode(file_get_contents("compte.json"));
$incorrect=false;

if (!isset($_POST['mdp']) || !isset($_POST['identifiant']))
{
}
else{
    foreach($jsondata as $compte):
        if($_POST['identifiant'] == "admin" && $_POST['mdp'] == "admin")
        {
            header('Location: adminpanel/index.php');
        }
        if($compte->email == $_POST['identifiant'] && $compte->password == $_POST['mdp'])
        {
            header('Location: index.php');
        }
        else
        {
            $incorrect = true;
        }
    endforeach;
}

?>

<!DOCTYPE html>
<html lang=fr dir="ltr">
<head>
    <meta charset="utf-8">
    <title>JustChill</title>
    <link rel="stylesheet" href="./style/login.css">
</head>

<body>


<div class="accueil">

    <img src="ressources/icon/iconwebsite.png"
         class="logo"
         alt="logo"/>

    <div class="donnée_utilisateur">
        <form action ="login.php" method="post">
            <table>
                <tr>
                    <td>
                        <label for="identifiant"></label>
                    </td>
                    <td>
                        <div class="barre1"><input type="text" class="barre" name="identifiant" id="identifiant"
                               required placeholder=" E-mail adress"/></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="mdp"></label>
                    </td>
                    <td>
                        <div class="barre2"><input type="password" class="barre" name="mdp" id="mdp" required
                               placeholder=" Password"/></div>
                    </td>
                </tr>
            </table>

            <div class="error">
                <?php
                if ($incorrect) {
                    echo "Password or e-mail adress is incorrect";
                }
                ?>
            </div>
            <div class="remember">
                <br/>
                <label for="remember">
                    <input name="remember" class="checkbox" type="checkbox"/>
                    Remember me
                </label>
                <br/>
            </div>

            <input type="submit"
                   class="login"
                   value="LOGIN"/>

            <div class="register">
                <a href="new_account.php">Register</a>
            </div>
        </form>
    </div>

</div>

</body>

</html>
