<?php
function securisation($donnees)
{ 
    $donnees=trim($donnees);
    $donnees=stripslashes($donnees);
    $donnees=strip_tags($donnees);
    return $donnees;
}

if (isset($_POST['ajouter']))
{
  $nom= securisation($_POST['nom_fournisseur']);
  $pseudo= securisation($_POST['pseudo_fournisseur']);
  $email= securisation($_POST['email_fournisseur']);
  $tel= securisation($_POST['tel_fournisseur']);
  $adr= securisation($_POST['adr_fournisseur']);

      if (is_numeric($_POST['nom_fournisseur']))
      {
        $message[]= 'Le nom ne peut contenir que des lettres';
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
        $requete = "INSERT INTO fournisseurs(nom, pseudo, email, phone, addresse)
          VALUES('$nom', '$pseudo',  '$email', '$tel', '$adr')";

        $exec= mysqli_query($connexion,$requete) ;
          if($exec){
            $message[]='Inscription du  fournisseur validée';
          }else{
            $message[]='Inscription non Validée ! Enregistrement existant';
          }
      }
}


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Ajout_Vendeurs</title>
    <link rel="stylesheet" href="inscription.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Ajout fournisseur/ vendeur</div>
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
            <input type="text" placeholder="Nom et prenom (s ) du fournisseur" name="nom_fournisseur"  required>
          </div>
          <div class="input-box">
            <span class="infos">Pseudo</span>
            <input type="text" placeholder="Pseudo du fournisseur"  name="pseudo_fournisseur" required>
          </div>
          <div class="input-box">
            <span class="infos">Email</span>
            <input type="email" placeholder="Email du fournisseur"  name="email_fournisseur" required>
          </div>
          <div class="input-box">
            <span class="infos">Numero de telephone</span>
            <input type="tel" placeholder="Numero du fournisseur"  name="tel_fournisseur" required>
          </div>
          <div class="address-box">
            <span class="infos">Adresse</span>
            <input type="text" placeholder="Adresse du fournisseur"  name="adr_fournisseur" >
          </div>

        </div>

        <div class="button">
          <input type="submit" name ="ajouter" id ="ajouter" value="Ajouter">
        </div>

      </form>
    </div>
  </div>

</body>
</html>