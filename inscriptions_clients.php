<html >
  <head>
    <meta charset="utf-8/">
    <title>INSCRIPTION_CLIENTS</title>
  </head>

  <body>

    <?php
            
            //securisation des données
      $nom_prenoms_clt=$nom_utilisateur_clt=$email_clt="";
      $numtel_clt=$adr_clt=$mdp_clt=$mdp_conf_clt="";
      $num_carte_clt=$nom_carte_clt=$code_sec_clt="";

          function securisation($donnees)
          { 
              $donnees=trim($donnees);
              $donnees=stripslashes($donnees);
              $donnees=strip_tags($donnees);
              return $donnees;
          }

      //Connexion BD
      $serveur="localhost:3306";
      $login="root";
      $password="";
      $bd="db_agora";

    if(isset($_POST['inserer']))
    {
      try
      {
        //Connexion MySql
      $connexion=new PDO("mysql:host=$serveur;dbname=$bd",$login,$password);
      $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
        //Insertion des données
      $requete = $connexion ->prepare(
                  "INSERT INTO clients( nomprenoms,nomutilisateur,sexe,email, numtel,adresse, mdp,typecartepaiement,Numcarte,nomcarte,dateexpcarte,codeseccarte)
                  VALUES(:np,:nu,:sexe,:em,:nt,:adr,:mdp,:tyc,:numc,:nomc,:datc,:codec)"
      );

      $nom_prenoms= securisation($_POST['nom']);
      $nom_utilisateur_clt= securisation($_POST['nom_utilisateur_clt']);
      $selection_genre= ($_POST['selection_genre']);
      $email_clt= securisation($_POST['email_clt']);
      $numtel_clt= securisation($_POST['numtel_clt']);
      $adr_clt= securisation($_POST['adr_clt']);
      $mdp_clt= securisation($_POST[' mdp_clt']);
      $mdp_conf_clt= securisation($_POST['mdp_conf_clt']);
      $selection_carte= securisation($_POST['selection_carte']);
      $num_carte_clt= securisation($_POST['num_carte_clt']);
      $nom_carte_clt= securisation($_POST['nom_carte_clt']);
      $dt_exp_carte= securisation($_POST['dt_exp_carte']);
      $code_sec_clt= securisation($_POST['code_sec_clt']);

      $requete->bindParam(':np',$nom_prenoms);
      $requete->bindParam(':nu', $nom_utilisateur_clt);
      $requete->bindParam(':sexe',$selection_genre);
      $requete->bindParam(':em',$email_clt);
      $requete->bindParam(':nt',$numtel_clt);
      $requete->bindParam(':adr',$adr_clt);
      $requete->bindParam(':mdp',$mdp_clt);
      $requete->bindParam(':tyc',$selection_carte);
      $requete->bindParam(':numc',$num_carte_clt);
      $requete->bindParam(':nomc',$nom_carte_clt);
      $requete->bindParam(':datc',$dt_exp_carte);
      $requete->bindParam(':codec', $code_sec_clt);

      $exec=$requete->execute();

      //Test de verification
      if($exec)
      {
        echo"Inscription validée";
      }else
      {
        echo"Echec de l'inscription";
      }

      }
      catch(PDOException $e)
      {
        echo'Echec de la connexion: ' .$e->getMessage();
      }
    }
    ?>

  </body>
</html>