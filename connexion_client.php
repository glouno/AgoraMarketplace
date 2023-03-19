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
      <form action="#">
        <div class="users-infos">

          <div class="address-box">
            <span class="infos">Email</span>
            <input type="email" placeholder="Votre email" name="login_mail_clt" required>
          </div>
          <div class="address-box">
            <span class="infos">Mot de Passe</span>
            <input type="password" placeholder="Mot de passe" name="login_mdp_clt" required>
          </div>

        </div>
        
        <div class="button">
          <input type="submit" value="Se connecter">
        </div>

        <div class="address-box">
            <span class="infos"> <a href="inscription_client.php">Pas encore inscrit(e) ? Inscrivez vous </a> </span>
          </div>

      </form>
    </div>
  </div>

</body>
</html>