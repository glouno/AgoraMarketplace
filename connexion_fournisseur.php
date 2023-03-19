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
    
  $username= securisation($_POST['username_login']);
  $mail= securisation($_POST['mail_login']);
    $serveur="localhost:3306";
    $login="root";
    $password="";
    $bd="db_agora";

    $connexion=mysqli_connect($serveur,$login,$password,$bd);

    $sql="SELECT * FROM fournisseurs WHERE email='$mail' AND  pseudo='$username'";

    $result= mysqli_query($connexion, $sql);

    $row= mysqli_fetch_array($result);

    if($row['pseudo'] == $username && $row['email'] == $mail)
    {
      header("Location: fournisseur.php");
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
    <title>Connexion_fournisseur</title>
    <link rel="stylesheet" href="logins.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

<?php
          if(isset($message))
            {
              foreach($message as $message)
                {
                  echo'<span class ="message">'.$message.'</span>';
                }
            }
          ?>

  <div class="container">
    <div class="title">Connexion</div>
    <div class="content">
      <form action="#">
        <div class="users-infos">

            <div class="address-box">
                <span class="infos">Nom d'utilisateur</span>
                <input type="text" placeholder="Nom d'utilisateur" name="username_login" required>
              </div>

          <div class="address-box">
            <span class="infos">Email</span>
            <input type="email" placeholder="Votre email" name="mail_login" required>
          </div>

        </div>
        
        <div class="button">
          <input type="submit" value="Se connecter">
        </div>
      </form>
    </div>
  </div>
</body>
</html>