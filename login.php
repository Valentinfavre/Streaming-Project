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
    <title>JustChill</title>
    <link rel="stylesheet" href="./style/login.css">
</head>

<body>


<div class="accueil">

    <img src="ressources/icon/cooltext357031301025932.png"
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
                               placeholder=" Username or email"/></div>
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
                    echo "<script language='JavaScript'>alert('Password or username is incorrect');</script>";
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
                Register
            </div>
        </form>
    </div>

</div>

</body>

</html>

