<?php
$database = "ag";
//connectez-vous dans votre BDD
//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
$db_handle = mysqli_connect('localhost:3308', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
//si le BDD existe, faire le traitement
if ($db_found) {
    $id_client = $_GET['id_client'];
    $id_produit = $_GET['id_produit'];
    $prix = $_GET['prix'];
    $bid_time = date('Y-m-d');
    $sql = "SELECT * FROM bids";
    $retval = mysqli_query($db_handle, $sql);
    $data = mysqli_fetch_assoc($retval);
    $prixmax = $data['prix'];
    if ($prix > $prixmax) {
        $sql1 = "UPDATE bids SET bid_time = $bid_time ,id_client = $id_client ,id_produit = $id_produit ,prix = $prix WHERE id_client = $id_client";
        $retval1 = mysqli_query($db_handle, $sql1);
        echo "<h1>Add to cart successfully!!!!  c'est maintenant " . date('Y-m-d H:i:s') . "</h1>";
        echo "<h1>S'il n'y a pas d'enchères supérieures à votre prix dans la journée, vous achèterez automatiquement l'article</h1>";

        echo "<h2>La page reviendra après 5 secondes</h2>";
        header("refresh:5;url=mod_article.php?id_client=" . $id_client . "&id=" . $id_produit);
    } else {
        echo "<h1>Votre enchère est inférieure à l'enchère actuelle</h1>";
        echo "<h1>L'enchère maximale actuelle est de " . $prixmax . " euros</h1>";
        echo "<h2>La page reviendra après 5 secondes</h2>";
        header("refresh:5;url=mod_article.php?id_client=" . $id_client . "&id=" . $id_produit);
    }
}

?>