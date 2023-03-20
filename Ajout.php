<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>Connexion_Client</title>
    <link rel="stylesheet" href="logins.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div class="container1">
        <div class="title">Ajouter</div>
        <div class="content">
            <form action="ajout_s.php">
                <div class="users-infos">
                    <div class="address-box">
                        <span class="infos">nom</span>
                        <input type="text" placeholder="nom du produit" name="nom" required />
                    </div>
                    <div class="address-box">
                        <span class="infos">prix</span>
                        <input type="number" placeholder="prix" name="prix" required />
                    </div>
                    <div class="address-box">
                        <span class="infos">types</span>
                        <select name="types">
                            <option value="voitures">voitures</option>
                            <option value="ameublement">ameublement</option>
                            <option value="decoration">decoration</option>
                            <option value="electromenager">electromenager</option>
                            <option value="informatique">informatique</option>
                            <option value="livres">livres</option>
                            <option value="vacances">vacances</option>
                            <option value="ventes immo">ventes immo</option>
                            <option value="vetements">vetements</option>
                        </select>
                    </div>
                    <div class="address-box">
                        <span class="infos">type_prix</span>
                        <select name="type_prix">
                            <option value="Article régulier">Article régulier</option>
                            <option value="Article haut de gamm">Article haut de gamm</option>
                            <option value="Article rare">Article rare</option>
                        </select>
                    </div>
                    <div class="address-box">
                        <span class="infos">descriptions</span>
                        <input type="text" placeholder="descriptions" name="descriptions" required />
                    </div>
                    <div class="address-box">
                        <span class="infos">image</span>
                        <input type="text" placeholder="image" name="image" required />
                    </div>
                    <input type="hidden" name="id_fournisseur" value="<?php echo $_GET['id_fournisseur'] ?>">
                </div>

                <div class="button">
                    <input type="submit" value="Se connecter" />
                </div>
            </form>
        </div>
    </div>
</body>

</html>