<?php 

function securisation($donnees)
{ 
    $donnees=trim($donnees);
    $donnees=stripslashes($donnees);
    $donnees=strip_tags($donnees);
    return $donnees;
}

  if (isset($_POST['connexion']))
  {
    
  $mail= securisation($_POST['mail_clt']);
  $pwd= securisation($_POST['mdp_clt']);
    $serveur="localhost:3306";
    $login="root";
    $password="";
    $bd="db_agora";

    $connexion=mysqli_connect($serveur,$login,$password,$bd);

    $sql="SELECT * FROM clients WHERE email='$mail' AND  mdp='$pwd'";

    $result= mysqli_query($connexion, $sql);

    $row= mysqli_fetch_array($result);

    if($row['email'] == $mail && $row['mdp'] == $pwd)
    {
      header("Location: index2.php");
    }
    else
    {
      $message[]= 'Les identifiants sont errones';
    }
  }

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Connexion_Client</title>
    <link rel="stylesheet" href="logins.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Connexion</div>
    <div class="content">
    <form action="" method="POST">

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
          <div class="address-box">
            <span class="infos">Email</span>
            <input type="email" placeholder="Votre email" name="mail_clt" id="mail_clt" required>
          </div>
          <div class="address-box">
            <span class="infos">Mot de Passe</span>
            <input type="password" placeholder="Mot de passe" name="mdp_clt" id="mail_clt" required>
          </div>

        </div>
        
        <div class="button">
          <input type="submit" name ="connexion" id ="connexion" value="Se connecter">
        </div>

        <div class="address-box">
            <span class="infos"> <a href="inscription_client.php">Pas encore inscrit(e) ? Inscrivez vous </a> </span>
          </div>

      </form>
    </div>
  </div>

</body>
</html>