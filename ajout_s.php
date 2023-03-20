<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    if (isset($_GET['nom'])) {
        $nom = $_GET['nom'];
        $prix = $_GET['prix'];
        $image = $_GET['image'];
        $descriptions = $_GET['descriptions'];
        $types = $_GET['types'];
        $type_prix = $_GET['type_prix'];
        $id_fournisseur = $_GET['id_fournisseur'];
    }

    //identifier le nom de base de données
    $database = "ag";
    //connectez-vous dans votre BDD
//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
    $db_handle = mysqli_connect('localhost:3308', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);
    //si le BDD existe, faire le traitement
    if ($db_found) {

        $sql1 = "INSERT INTO produits(nom, prix, image, descriptions, types, type_prix, id_fournisseur) VALUES('$nom', '$prix', '$image', '$descriptions', '$types', '$type_prix', '$id_fournisseur')";
        $retval = mysqli_query($db_handle, $sql1);
        echo "Add to cart successfully";
        header("refresh:2;url=ajout.php?id_fournisseur=" . $id_fournisseur);

    } //end else //fermer la connection ?>
</head>

<body>
    <h1>Le produit est ajouté avec succès et la page sera redirigée après 2 secondes</h1>
</body>

</html>