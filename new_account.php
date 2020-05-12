<!DOCTYPE html>
<html lang=fr dir="ltr">
<head>
    <meta charset="utf-8">
    <title>JustChill</title>
    <link rel="stylesheet" href="./style/new_account.css">
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

            </div>

            <input type="submit"
                   class="login"
                   value="CREATE A NEW ACCOUNT"/>
</div>


</body>

</html>
