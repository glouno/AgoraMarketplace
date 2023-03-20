<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css.css" type="text/css" />
    <link rel="stylesheet" href="icon/iconfont.css" type="text/css" />
    <script type="text/javascript">
      function () {
      }
    </script>
    <?php
    if (isset($_GET['id_client'])) {
      $id_client=$_GET['id_client'];
    } else {
      $id_client = 0;
    }
    //identifier le nom de base de données
    $database = "ag";
    //connectez-vous dans votre BDD
//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
    $db_handle = mysqli_connect('localhost:3308', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);
    //si le BDD existe, faire le traitement
    if ($db_found) {
      if (isset($_GET['id'])&& !isset($_GET['id_produit'])) {
        $sql = "SELECT * FROM produits WHERE id=   " . $_GET['id'] . "       ";
        $result = mysqli_query($db_handle, $sql);
        $data = mysqli_fetch_assoc($result);
      } 
      elseif (isset($_GET['id_produit'])) {
        $sql = "SELECT * FROM produits WHERE id=   " . $_GET['id'] . "       ";
        $result = mysqli_query($db_handle, $sql);
        $data = mysqli_fetch_assoc($result);
        $sql1 = "INSERT INTO panier ( id_produit, id_client) VALUES ( " . $_GET['id_produit'] . ", " . $_GET['id_client'] . ")";
        $retval= mysqli_query($db_handle, $sql1);
        echo "Add to cart successfully";
      }
      else {
        echo "Database not found";
      }
    } //end else //fermer la connection ?>
    
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

    <div id="nav" class="container" style="height: 600px">
      <div class="row">
        <div class="col-4">
          <img src="<?php echo $data['image'] ?>" alt="none" width="480px" />
        </div>
        <div class="col-1"></div>
        <div
          class="col-7"
          style="
            height: 500px;
            background-color: rgb(244, 241, 237);
            border: 3px rgb(155, 155, 155) outset;
            border-radius: 10px;
          "
        >
          <div class="h1" align="left">
            <b><?php echo $data['nom'] ?></b>
          </div>
          <br />
          <div class="h2" align="left">
            Prix:<i><?php echo $data['prix'] ?></i>euros
          </div>
          <br />

          <div class="paybutton">
            <form action="mod_article.php" method="get">
              <input type="hidden" name="id_client" value="<?php echo $id_client ?>">
              <input type="hidden" name="id_produit" value="<?php echo $_GET['id'] ?>">
              <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
              <button id="pay2" type='submit'>
              <h5 class="buttonmot">Ajouter au panier</h5>
            </button>
            </form>
          </div>
          <br />
          <div class="paybutton">
            <form action="bidding.php" method="get">
              <input type="hidden" name="id_client" value="<?php echo $id_client ?>">
              <input type="hidden" name="id_produit" value="<?php echo $_GET['id'] ?>">
              <input type="number" name="prix">
              <button id="pay2" type='submit'>
              <h5 class="buttonmot">bidding</h5>
            </button>
            </form>
            </button>
          </div>
          <br />
          <div class="paybutton">
          <form action="paiement.php" method="get">
              <input type="hidden" name="id_client" value="<?php echo $id_client ?>">
              <input type="hidden" name="id_produit" value="<?php echo $_GET['id'] ?>">
              <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
              <button id="pay2" type='submit'>
              <h5 class="buttonmot">Achat immédiat</h5>
            </button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <br /><br /><br /><br />
    <div id="section" class="container-fluid">
      <div class="row">
        <div class="description col-10">
          <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
              <h4><?php echo $data['descriptions'] ?></h4>
            </div>
          </div>
        </div>
      </div>
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
      <a href="accueil.php?id_client=<?php echo $_GET['id_client'] ?>">
        <span class="iconfont icon-shouye" style="font-size: 50px"></span>
      </a>
    </div>
    <div class="icon1">
      <a href="parcourir1.php?id_client=<?php echo $_GET['id_client'] ?>">
        <span class="iconfont icon-gongneng" style="font-size: 50px"></span>
      </a>
    </div>
    <div class="icon1">
      <a href="notification.php?id_client=<?php echo $_GET['id_client'] ?>">
        <span class="iconfont icon-xiaoxi2" style="font-size: 50px"></span>
      </a>
    </div>
    <div class="icon1">
      <a href="panier.php?id_client=<?php echo $_GET['id_client'] ?>">
        <span class="iconfont icon-caigou" style="font-size: 50px"></span>
      </a>
    </div>
    <div class="icon1">
      <a href="compt.php?id_client=<?php echo $_GET['id_client'] ?>">
        <span class="iconfont icon-wode" style="font-size: 50px"></span>
      </a>
    </div>
    <div class="icon1">
      <a href="https://www.google.com/maps">
        <span class="iconfont icon-weizhi" style="font-size: 50px"></span>
      </a>
    </div>
  </div>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
      crossorigin="anonymous"
    ></script>
    <?php mysqli_close($db_handle); ?>
  </body>
</html>
