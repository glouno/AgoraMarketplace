<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paiement
    </title>
    <?php
    if (isset($_GET['id_client'])) {
        $id_client = $_GET['id_client'];
    } else {
        $id_client = 0;
    }
    //identifier le nom de base de données
    $database = "ag";
    //connectez-vous dans votre BDD
//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
    $db_handle = mysqli_connect('localhost:3308', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);
    //si le BDD existe, faire le traitement
    if ($db_found) {
        if (isset($_GET['id_client'])) {
            $sql1 = "select id_produit, nom ,prix,image,id_client from panier,produits where panier.id_produit = produits.id and id_client=" . $_GET['id_client'] . "";
            $result1 = mysqli_query($db_handle, $sql1);
            while ($data = mysqli_fetch_assoc($result1)) {
                $sql2 = "INSERT INTO commande ( id_produit, id_client,etat_cmd) VALUES ( " . $data['id_produit'] . ", " . $data['id_client'] . ",'en cours de traitement')";
                $result2 = mysqli_query($db_handle, $sql2);
            }

            $sql3 = "delete from panier where id_client=" . $_GET['id_client'] . "";
            $result3 = mysqli_query($db_handle, $sql3);

        } else {
            echo "erreur";
        }
    }
    //end else //fermer la connection 
    mysqli_close($db_handle);
    header("refresh:3;url=parcourir1.php?id_client=" . $id_client); ?>

</head>

<body>
    <h1> payer acceces !</h1>
    <br>
    <h2>vous allez etre rediriger vers la page de parcourir dans 3s</h2>
</body>

</html>