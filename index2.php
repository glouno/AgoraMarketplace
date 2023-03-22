<!DOCTYPE html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <link rel="stylesheet" href="css.css" type="text/css" />
  <link rel="stylesheet" href="icon/iconfont.css" type="text/css" />
  <?php
  //identifier le nom de base de données
  $database = "ag";
  //connectez-vous dans votre BDD 
  //Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
  $db_handle = mysqli_connect('localhost:3308', 'root', '');
  $db_found = mysqli_select_db($db_handle, $database);

  if (isset($_GET['login_mail_clt']) && isset($_GET['login_mdp_clt'])) {
    $login_mail_clt = $_GET['login_mail_clt'];
    $login_mdp_clt = $_GET['login_mdp_clt'];
    $sql = "SELECT * FROM client WHERE email = '$login_mail_clt' AND mdp = '$login_mdp_clt'";
    $result = mysqli_query($db_handle, $sql);
    if (mysqli_num_rows($result) == 0) {
      header("refresh:0;url=shibai.php");
    } else {
      $data = mysqli_fetch_assoc($result);
      $id_client = $data['id_client'];
    }
  }
  ?>
</head>

<body>
  <div id="header" class="container-fluid">
    <div class="row" style="padding: 20px">
      <div class="col-4"></div>
      <div class="col-4">
        <h1 align="center"><b>Agora Francia</b></h1>
      </div>
      <div class="col-4">
        <img src="image/logo.png" width="200" align="right" />
      </div>
    </div>
  </div>
  <br><br>
  <div id="nav" class="container">
    <div class="row">
      <div class="col-1"></div>
      <div class="col-md-1" id="button1">
        <a href="accueil.php?id_client=<?php echo $id_client ?>">
          <img src="image/accueil.png" id="imgTaille1" />
        </a>
      </div>
      <div class="col-1"></div>
      <div class="col-md-1" id="button1">
        <a href="parcourir.php?id_client=<?php echo $id_client ?>">
          <img src="image/parcourir.png" id="imgTaille1" />
        </a>
      </div>
      <div class="col-1"></div>
      <div class="col-md-1" id="button1">
        <a href="notification.php?id_client=<?php echo $id_client ?>">
          <img src="image/notification.png" id="imgTaille1" />
        </a>
      </div>
      <div class="col-1"></div>
      <div class="col-md-1" id="button1">
        <a href="panier.php?id_client=<?php echo $id_client ?>">
          <img src="image/panier.png" id="imgTaille1" />
        </a>
      </div>
      <div class="col-1"></div>
      <div class="col-md-1" id="button1">
        <a href="compt.php?id_client=<?php echo $id_client ?>">
          <img src="image/compte.png" id="imgTaille1" />
        </a>
      </div>
      <div class="col-2"></div>
    </div>
  </div>
  <br>
  <div id="section" class="container"></div>
  <br>
  <div id="footer" class="container">
    <footer>
      <small>
        <p align="center">
          concu par yezhan. contact:<a href="mailto:1472804183@qq.com">
            1472804183@qq.com
          </a>
        </p>
        <p align="center">copyright &copy;2023 | lstest update:28-02-2023</p>
      </small>
    </footer>
  </div>
  <br>
  <div class="fix_icon">
    <div class="icon1">
      <a href="accueil.php?id_client=<?php echo $id_client ?>">
        <span class="iconfont icon-shouye" style="font-size: 50px"></span>
      </a>
    </div>
    <div class="icon1">
      <a href="parcourir1.php?id_client=<?php echo $id_client ?>">
        <span class="iconfont icon-gongneng" style="font-size: 50px"></span>
      </a>
    </div>
    <div class="icon1">
      <a href="notification.php?id_client=<?php echo $id_client ?>">
        <span class="iconfont icon-xiaoxi2" style="font-size: 50px"></span>
      </a>
    </div>
    <div class="icon1">
      <a href="panier.php?id_client=<?php echo $id_client ?>">
        <span class="iconfont icon-caigou" style="font-size: 50px"></span>
      </a>
    </div>
    <div class="icon1">
      <a href="compt.php?id_client=<?php echo $id_client ?>">
        <span class="iconfont icon-wode" style="font-size: 50px"></span>
      </a>
    </div>
    <div class="icon1">
      <a href="https://www.google.com/maps">
        <span class="iconfont icon-weizhi" style="font-size: 50px"></span>
      </a>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
    crossorigin="anonymous"></script>
</body>

</html>