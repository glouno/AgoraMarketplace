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
  $id_client = $_GET['id_client'];
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
    <div class="row">
      <div class="col-4"></div>
      <div class="col-4">
        <form action="parcourir2.php" method="get">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Rechercher" aria-label="Recipient's username"
              aria-describedby="button-addon2" name="search">
            <input type="hidden" name="id_client" value="<?php echo $id_client ?>">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Rechercher</button>
          </div>
        </form>
      </div>
      <div class="col-4"></div>
    </div>
    <div id="nav" class="container-fluid" style="border: 3px lightcoral outset; border-radius: 10px;">
      <div class="row ">
        <div class="col-1">
          <p><strong>type:</strong></p>
        </div>
        <div class="col-1"><a href="parcourir1.php?&id_client=<?php echo $id_client ?>">tout
            parcourir</a></div>
        <div class="col-1"><a
            href="parcourir2.php?type='ameublement'&id_client=<?php echo $id_client ?>">ameublement</a>
        </div>
        <div class="col-1"><a
            href="parcourir2.php?type='electromenager'&id_client=<?php echo $id_client ?>">electromenager</a>
        </div>
        <div class="col-1"><a href="parcourir2.php?type='livres'&id_client=<?php echo $id_client ?>">livres</a>
        </div>
        <div class="col-1"><a
            href="parcourir2.php?type='informatique'&id_client=<?php echo $id_client ?>">informatique</a>
        </div>
        <div class="col-1"><a href="parcourir2.php?type='vacances'&id_client=<?php echo $id_client ?>">vacances</a>
        </div>
        <div class="col-1"><a href="parcourir2.php?type='vetements'&id_client=<?php echo $id_client ?>">vetements</a>
        </div>
        <div class="col-1"><a href="parcourir2.php?type='voitures'&id_client=<?php echo $id_client ?>">voitures</a>
        </div>
        <div class="col-1"><a href="parcourir2.php?type='decoration'&id_client=<?php echo $id_client ?>">decoration</a>
        </div>
        <div class="col-1"><a href="parcourir2.php?type='ventes immo'&id_client=<?php echo $id_client ?>">ventes
            immo</a></div>
        <div class="col-1"></div>
      </div>
      <div class="row">
        <div class="col-1">
          <p><b>class:</b></p>
        </div>
        <div class="col-1"><a
            href="parcourir2.php?type_prix='Article rare'&id_client=<?php echo $id_client ?>">rares</a>
        </div>
        <div class="col-2"><a
            href="parcourir2.php?type_prix='Article haut de gamm'&id_client=<?php echo $id_client ?>">hautes
            de gamme</a></div>
        <div class="col-1"><a
            href="parcourir2.php?type_prix='Article régulier'&id_client=<?php echo $id_client ?>">réguliers</a>
        </div>
      </div>
      <div class="row">
        <div class="col-1">
          <p><b>prix:</b></p>
        </div>
        <div class="col-1"><a href="parcourir2.php?&id_client=<?php echo $id_client ?>">Ascendante</a>
        </div>
        <div class="col-1"><a href="parcourir3.php?&id_client=<?php echo $id_client ?>">Descendante</a>
        </div>
        <div class="col-1"><a href="parcourir1.php?&id_client=<?php echo $id_client ?>">Normal</a></div>
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
        if (isset($_GET['search'])) {
          $search = $_GET['search'];
        } else {
          $search = 0;
        }
        if (isset($_GET['type'])) {
          $type = $_GET['type'];
        } elseif (isset($_GET['type_prix'])) {
          $type = $_GET['type_prix'];
        } else {
          $type = 0;
        }
        if (isset($type)) {
          if ($type == 0 && $search == 0) {
            $sql = "SELECT * FROM produits order by prix asc";
          } elseif (isset($_GET['type_prix'])) {
            $sql = "SELECT * FROM produits WHERE type_prix=  $type order by prix asc";
          } elseif (isset($_GET['type'])) {
            $sql = "SELECT * FROM produits WHERE types= $type order by prix asc";
          } elseif (isset($_GET['search'])) {
            $sql = "SELECT * FROM produits WHERE nom LIKE '%$search%'  order by prix asc";
          } else {
            $sql = "SELECT * FROM produits order by prix asc";
          }
        } else {
          $sql = "SELECT * FROM produits order by prix asc";
        }

        $result = mysqli_query($db_handle, $sql);
        //$data = mysqli_fetch_assoc($result);
        while ($data = mysqli_fetch_assoc($result)) {
          echo '<a href="mod_article.php?id=' . $data['id'] . '&id_client=' . $id_client . '">';
          echo '<div class="row">';
          echo '<div class="col-4"><img src="' . $data['image'] . '" width="360px" height="240px"></div>';
          echo '<div class="col-1"></div> ';
          echo '<div class="col-7" style="text-align: left;">';
          echo '<br><h1>' . $data['nom'] . '</h1><br>';
          echo '<h2>prix:' . $data['prix'] . '€</h2>';
          echo '</div></div><br></a>';
        }
      }
      //end else //fermer la connection 
      mysqli_close($db_handle); ?>

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