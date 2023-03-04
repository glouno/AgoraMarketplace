<!doctype html>
<html lang="en">
  <head>
    <title>accueil</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css" type="text/css">
    <link rel="stylesheet" href="icon/iconfont.css" type="text/css">
  </head>
  <body>
    <div id="header" class="container-fluid" >
        <div class="row" style="padding: 20px;">
            <div class="col-4"></div>
            <div class="col-4"><h1 align="center"><b>Agora Francia</b></h1></div>
            <div class="col-4"><img src="image/logo.png" width="200" align="right"></div>
        </div> 
    </div>
    <div id="nav" class="container">
        <div class="row">
        <p align="center">Agora Francia permette aux clients
            d’acheter des articles en vente sur le site, de faire une transaction client-vendeur sur un article 
            (probablement avec un défaut mineur) pour négocier un prix acceptable au client et au vendeur, et 
            également pour un client de mettre sa meilleure offre dans un item dont plusieurs acheteurs 
            voudraient l'acheter.</p>
        </div>
    </div>

    <div id="section" class="container">
        <div class="banner">
            <div class="wrap">
                <div class="banner-a"></div>
                <div class="banner-b">
                    <ul>
                        <li><a href="parcourir.php">tout_parcourir</a></li>
                        <li><a href="ameublement.php">ameublement</a></li>
                        <li><a href="electromenager.php">electromenager</a></li>
                        <li><a href="livres.php">livres</a></li>
                        <li><a href="informatique.php">informatique</a></li>
                    </ul>
                </div>
                <div class="banner-c">
                    <ul>
                        <li><a href="vacances.php">vacances</a></li>
                        <li><a href="vetements.php">vetements</a></li>
                        <li><a href="voitures.php">voitures</a></li>
                        <li><a href="decoration.php">decoration</a></li>
                        <li><a href="ventes_immo.php">ventes_immo</a></li>
                    </ul>
                </div>
            </div> 
        </div>
        <div class="flash">
            <div class="flash1"><p>Ventes flash</p></div>
            <div class="flash2"><a href="article_voiture.php"><image src="image/voitures.png" ></a></image></div>
            <div class="flash3"><a href="article_livres.php"><image src="image/livres.png" ></image></a></div>
            <div class="flash4"><a href="article_vetements.php"><image src="image/vetements.png" ></image></a></div>
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
      <?php
        $icon=[
          "accueil.php" => 'iconfont icon-shouye',
          "parcourir.php" => 'iconfont icon-gongneng',
          "notification.php" => 'iconfont icon-xiaoxi2',
          "panier.php" => 'iconfont icon-caigou',
          "compt.php" => 'iconfont icon-wode',
          "https://www.google.com/maps" => 'iconfont icon-weizhi'
        ]
      ?>

      <?php foreach($icon as $w=>$e){?>
        <div class="icon1">
        <a href=" <?php echo $w?> "> 
        <span
        class=" <?php echo $e ?> "
        style="font-size: 50px"
        ></span>
        </a>
        </div>
      <?php }?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
  </body>
</html>