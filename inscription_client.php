<?php


function securisation($donnees)
{ 
    $donnees=trim($donnees);
    $donnees=stripslashes($donnees);
    $donnees=strip_tags($donnees);
    return $donnees;
}

if (isset($_POST['inserer']))
{
  $nom_prenoms= securisation($_POST['nom']);
  $nom_utilisateur_clt= securisation($_POST['nom_utilisateur_clt']);
  $selection_genre= ($_POST['selection_genre']);
  $email_clt= securisation($_POST['email_clt']);
  $numtel_clt= securisation($_POST['numtel_clt']);
  $adr_clt= securisation($_POST['adr_clt']);
  $mdp_clt= securisation($_POST['mdp_clt']);
  $mdp_conf_clt= securisation($_POST['mdp_conf_clt']);
  $selection_carte= securisation($_POST['selection_carte']);
  $num_carte_clt= securisation($_POST['num_carte_clt']);
  $nom_carte_clt= securisation($_POST['nom_carte_clt']);
  $dt_exp_carte= securisation($_POST['dt_exp_carte']);
  $code_sec_clt= securisation($_POST['code_sec_clt']);

      if (!is_numeric($_POST['code_sec_clt']))
      {
          $message[]= 'Le code de sécurite doit etre numerique';
      }

      elseif (is_numeric($_POST['nom'])) {
        $message[]= 'Le nom ne peut contenir que des lettres';
      } 

      elseif (!is_numeric($_POST['num_carte_clt'])) {
        $message[]= 'Le numero de carte doit etre numerique';
      } 

      elseif (is_numeric($_POST['nom_carte_clt'])) {
        $message[]= 'Le nom de la carte ne peut contenir que des lettres';
      } 

      elseif ($_POST['mdp_clt']!= $_POST['mdp_conf_clt'] ) {
          $message[]= 'Les mots de passe sont differents';
      }
      else
      {

        //Configuration Bd
          $serveur="localhost:3306";
          $login="root";
          $password="";
          $bd="db_agora";

          $connexion=mysqli_connect($serveur,$login,$password,$bd);

          //Insertion_Bd
        $requete = "INSERT INTO clients(nomprenoms, nomutilisateur, sexe, email, numtel, adresse, mdp, typecartepaiement, Numcarte, nomcarte, dateexpcarte, codeseccarte)
          VALUES('$nom_prenoms', '$nom_utilisateur_clt', '$selection_genre', '$email_clt', '$numtel_clt', '$adr_clt', '$mdp_clt', '$selection_carte', '$num_carte_clt', '$nom_carte_clt', '$dt_exp_carte', '$code_sec_clt')";

        $exec= mysqli_query($connexion,$requete) ;
          if($exec){
            $message[]='Inscription validée';
          }else{
            $message[]='Inscription Non Validée';
          }
      }
}


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>INSCRIPTION_CLIENT</title>
    <link rel="stylesheet" href="inscription.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>


  <div class="container">
    <div class="title">Inscription</div>
    <div class="content">
      <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">

          <?php
          if(isset($message))
            {
              foreach($message as $message)
                {
                  echo'<span class ="message">'.$message.'</span>';
                }
            }
          ?>

        <div class="users-infos">
          <div class="input-box">
            <span class="infos">Nom et Prenom(s)</span>
            <input type="text" placeholder="Votre nom et prenom (s )" name="nom" id="nom"  required>
          </div>
          <div class="input-box">
            <span class="infos">Nom d'utilisateur</span>
            <input type="text" placeholder="Votre nom d'utilisateur" name="nom_utilisateur_clt" id="nom_utilisateur_clt" required>
          </div>

          <div class="input-box">
            <span class="infos">Email</span>
            <input type="email" placeholder="Votre email" name="email_clt" id="email_clt" required>
          </div>
          <div class="input-box">
            <span class="infos">Numero de telephone</span>
            <input type="tel" placeholder="Votre numero de telephone" name="numtel_clt" id="numtel_clt" required>
          </div>

          <div class="address-box">
            <span class="infos">Genre</span>
            <select name="selection_genre" id="selection_genre" required>
                <option value="Masculin" id="genre_m">Masculin</option>
                <option value="Feminin" id="genre_f">Feminin</option>
                <option value="Autre" id="autre">Autre</option>
            </select>
          </div>  

          <div class="address-box">
            <span class="infos">Adresse (N° de la rue, Ville, Code Postal, Pays)</span>
            <input type="text" placeholder="Adresse" name="adr_clt" id="adr_clt" >
          </div>
          <div class="input-box">
            <span class="infos">Mot de Passe</span>
            <input type="password" placeholder="Au moins 6 caracteres" name="mdp_clt" id="mdp_clt" required minlength="6" >
          </div>
          <div class="input-box">
            <span class="infos">Confirmation du mot de passe</span>
            <input type="password" placeholder="Confirmez votre mot de passe" name="mdp_conf_clt" id="mdp_conf_clt" required minlength="6">
          </div>
        </div> 

        <div class="title">Infos sur la carte Bancaire</div>
            <div class="users-infos">
                <div class="address-box">
                <span class="infos"> Type de carte de paiement</span>
                <select name="selection_carte" id="selection_carte" required>
                    <option value="Visa" id="carte_visa">Visa</option>
                    <option value="MasterCard" id="carte_MasterCard">MasterCard</option>
                    <option value="American express" id="carte_AE">American express</option>
                    <option value="Paypal" id="carte_paypal">Paypal</option>
                </select>
                </div>

                <div class="input-box">
                <span class="infos">Numéro de la carte</span>
                <input type="text" placeholder="Numéro de la carte" name="num_carte_clt" id="num_carte_clt" required minlength="16" maxlength="19">
                </div>

                <div class="input-box">
                <span class="infos">Nom affiché sur la carte</span>
                <input type="text" placeholder=" Nom affiché sur la carte" name="nom_carte_clt" id="nom_carte_clt" required>
                </div>

                <div class="input-box">
                <span class="infos"> Date d’expiration de la carte </span>
                <input type="month" placeholder="Date d’expiration de la carte" name="dt_exp_carte" id="dt_exp_carte"  required  min="2023-05" max="2028-12" >
                </div>

                <div class="input-box">
                <span class="infos">Code de sécurité</span>
                <input type="text" placeholder="Code de sécurité" name="code_sec_clt" id="code_sec_clt" required  min length =3 maxlength="4">
                </div>

            </div>
    
        </div>

        <div class="button">
          <input type="submit" name ="inserer" id ="inserer" value="S'inscrire">
        </div>

        <div class="address-box">
            <span class="infos"> <a href="connexion_client.php">Dejà inscrit(e)? Connectez vous </a> </span>
          </div>

      </form>
    </div>
  </div>
  <div id="footer" class="container">
    <footer>
      <small>
        <p align="center">
          concu par yanT. contact:<a href="mailto:yannotch@gmail.com">
            gmail
          </a>
        </p>
        <p align="center">copyright &copy;2023 | lstest update:19-03-2023</p>
      </small>
    </footer>
  </div>
</body>
</html>