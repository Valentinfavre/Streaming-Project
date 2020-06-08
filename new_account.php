<?php
$incorrect = false;

if (isset($_POST['username']) || isset($_POST['name']) || isset($_POST['email'])
|| isset($_POST['mdp']) || isset($_POST['confirm_mdp'])) {
    $monfichier = fopen('exemple.txt', 'a+');
    fputs($monfichier, '{'.$_POST['username ']."\n");
    fputs($monfichier, $_POST['name ']."\n");
    fputs($monfichier, $_POST['email ']."\n");
    fputs($monfichier, $_POST['mdp '].'}'."\n"."\n");
    fclose($monfichier);
}

else{
    echo "jsp2";
}
?>

<!DOCTYPE html>
<html lang=fr dir="ltr">
<head>
    <meta charset="utf-8">
    <title>JustChill</title>
    <link rel="stylesheet" href="./style/new_account.css">
</head>

<body>


<div class="accueil">

    <img src="ressources/icon/iconwebsite.png"
         class="logo"
         alt="logo"/>

    <div class="donnée_utilisateur">
        <form action ="new_account.php" method="post">
            <table>
                <tr>
                    <td>
                        <label for="username"></label>
                    </td>
                    <td>
                        <div class="barre1">
                            <input type="text" class="barre" name="username" id="username" required
                                                   placeholder=" Username"/>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="name"></label>
                    </td>
                    <td>
                        <div class="barre2">
                            <input type="text" class="barre" name="name" id="name" required
                            placeholder=" Name">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="email"></label>
                    </td>
                    <td>
                        <div class="barre3">
                            <input type="text" class="barre" name="email" id="email" required
                                   placeholder=" E-mail">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="mdp"></label>
                    </td>
                    <td>
                        <div class="barre4">
                            <input type="password" class="barre" name="mdp" id="mdp" required
                                                   placeholder=" Password"/>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="confirm_mdp"></label>
                    </td>
                    <td>
                        <div class="barre5">
                            <input type="password" class="barre" name="confirm_mdp" id="confirm_mdp" required
                                   placeholder=" Confirm Password">
                        </div>
                    </td>
                </tr>

            </table>
            <div class="error">
                <?php
                if ($incorrect) {
                    echo "<script>alert('Remplissez tous les champs demandez');</script>";
                }
                ?>
            </div>

            <input type="submit"
                   class="create"
                   value="CREATE A NEW ACCOUNT"/>
</div>


</body>

</html>
