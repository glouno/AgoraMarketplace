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
  <div id="nav" class="container-fluid" style="border: 3px lightcoral outset; border-radius: 10px;">
    <div class="row ">
      <div class="col-1">
        <p><strong>type:</strong></p>
      </div>
      <div class="col-1"><a href="parcourir1.php?type=0">tout parcourir</a></div>
      <div class="col-1"><a href="parcourir1.php?type='ameublement'">ameublement</a></div>
      <div class="col-1"><a href="parcourir1.php?type='electromenager'">electromenager</a></div>
      <div class="col-1"><a href="parcourir1.php?type='livres'">livres</a></div>
      <div class="col-1"><a href="parcourir1.php?type='informatique'">informatique</a></div>
      <div class="col-1"><a href="parcourir1.php?type='vacances'">vacances</a></div>
      <div class="col-1"><a href="parcourir1.php?type='vetements'">vetements</a></div>
      <div class="col-1"><a href="parcourir1.php?type='voitures'">voitures</a></div>
      <div class="col-1"><a href="parcourir1.php?type='decoration'">decoration</a></div>
      <div class="col-1"><a href="parcourir1.php?type='ventes immo'">ventes immo</a></div>
      <div class="col-1"></div>
    </div>
    <div class="row">
      <div class="col-1">
        <p><b>class:</b></p>
      </div>
      <div class="col-1"><a href="parcourir1.php?type=1">rares</a></div>
      <div class="col-2"><a href="parcourir1.php?type=2">hautes de gamme</a></div>
      <div class="col-1"><a href="parcourir1.php?type=3">réguliers</a></div>
    </div>
    <div class="row">
      <div class="col-1">
        <p><b>prix:</b></p>
      </div>
      <div class="col-1"><a href="parcourir3.php?type=0">Ascendante</a></div>
      <div class="col-1"><a href="parcourir2.php?type=0">Descendante</a></div>
      <div class="col-1"><a href="parcourir1.php?type=0">Annuler</a></div>
    </div>
  </div>
  <br><br><br>
  <div id="section" class="container">
    <?php
    //identifier le nom de base de données
    $database = "ag";
    //connectez-vous dans votre BDD
//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
    $db_handle = mysqli_connect('localhost:3308', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);
    //si le BDD existe, faire le traitement
    if ($db_found) {

      $sql = "SELECT * FROM produits";
      $result = mysqli_query($db_handle, $sql);
      //$data = mysqli_fetch_assoc($result);
      while ($data = mysqli_fetch_assoc($result)) {
        echo '<a href="mod_article.php?id=' . $data['id'] . '">';
        echo '<div class="row">';
        echo '<div class="col-4"><img src="' . $data['image'] . '" width="360px" height="240px"></div>';
        echo '<div class="col-1"></div> ';
        echo '<div class="col-7" style="text-align: left;">';
        echo '<br><h1>' . $data['nom'] . '</h1><br>';
        echo '<h2>prix:' . $data['prix'] . '</h2>';
        echo '</div></div><br></a>';
      }
    } //end else //fermer la connection 
    ?>
    <?php mysqli_close($db_handle);
    ?>
  </div>

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

  <div class="fix_icon">
    <div class="icon1">
      <a href="accueil.php">
        <span class="iconfont icon-shouye" style="font-size: 50px"></span>
      </a>
    </div>
    <div class="icon1">
      <a href="parcourir.php">
        <span class="iconfont icon-gongneng" style="font-size: 50px"></span>
      </a>
    </div>
    <div class="icon1">
      <a href="notification.php">
        <span class="iconfont icon-xiaoxi2" style="font-size: 50px"></span>
      </a>
    </div>
    <div class="icon1">
      <a href="panier.php">
        <span class="iconfont icon-caigou" style="font-size: 50px"></span>
      </a>
    </div>
    <div class="icon1">
      <a href="compt.php">
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