<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <?php
    //identifier le nom de base de données
    $database = "ag";
    //connectez-vous dans votre BDD 
    //Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
    $db_handle = mysqli_connect('localhost:3308', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);

    if (isset($_GET['login_mail_clt']) && isset($_GET['login_mdp_clt'])) {
        $login_mail_clt = $_GET['login_mail_clt'];
        $login_mdp_clt = $_GET['login_mdp_clt'];
        $sql = "SELECT * FROM fournisseurs WHERE email = '$login_mail_clt' AND mdp = '$login_mdp_clt'";
        $result = mysqli_query($db_handle, $sql);
        if (mysqli_num_rows($result) == 0) {
            echo "fournisseur not found";
            echo "<h1>vous n'avait pas de compte. Merci de créer un compte</h1>";
            header("refresh:5;url=connexion_fournisseur.html");
        } else {
            $data = mysqli_fetch_assoc($result);
            $id_fournisseur = $data['id_fournisseur'];
            header("refresh:2;url=compt_f.php?id_fournisseur=" . $id_fournisseur);
            echo "<h1>Connectez-vous avec succès, passez à la page après 2 seconde</h1>";

        }
    }
    ?>
    <footer>
        <small>
            <p align="center">
                concu par zhan tchalla kuate beglin. contact:mail :<a href="mailto:1472804183@qq.com">
                    1472804183@qq.com
                </a>
            <p>tel : +33(0)652811128 </p>
            </p>
            <p align="center"> Tous droits reserves.copyright &copy;2023 | lstest update:21-03-2023</p>
        </small>
    </footer>
</body>

</html>