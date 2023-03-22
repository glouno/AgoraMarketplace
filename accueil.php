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
  <div id="header" class="container-fluid">
    <div class="row" style="padding: 20px;">
      <div class="col-4"></div>
      <div class="col-4">
        <h1 align="center"><b>Agora Francia</b></h1>
      </div>
      <div class="col-4"><img src="image/logo.png" width="200" align="right"></div>
    </div>
  </div>
  <div id="nav" class="container">
    <div class="row">
      <p align="center">Agora Francia permette aux clients
        d’acheter des articles en vente sur le site, de faire une transaction client-vendeur sur un article
        (probablement avec un défaut mineur) pour négocier un prix acceptable au client et au vendeur, et
        également pour un client de mettre sa meilleure offre dans un item dont plusieurs acheteurs
        voudraient l’acheter.</p>
    </div>
  </div>

  <div id="section" class="container">
    <div class="banner">
      <div class="wrap">
        <div class="banner-a"></div>
        <div class="banner-b">
          <ul>
            <li><a href="parcourir1.php?type=0&id_client=<?php echo $_GET['id_client'] ?>">tout parcourir</a></li>
            <li><a href="parcourir1.php?type='ameublement'&id_client=<?php echo $_GET['id_client'] ?>">ameublement</a>
            </li>
            <li><a
                href="parcourir1.php?type='electromenager'&id_client=<?php echo $_GET['id_client'] ?>">electromenager</a>
            </li>
            <li><a href="parcourir1.php?type='livres'&id_client=<?php echo $_GET['id_client'] ?>">livres</a></li>
            <li><a href="parcourir1.php?type='informatique'&id_client=<?php echo $_GET['id_client'] ?>">informatique</a>
            </li>
          </ul>
        </div>
        <div class="banner-c">
          <ul>
            <li><a href="parcourir1.php?type='vacances'&id_client=<?php echo $_GET['id_client'] ?>">vacances</a></li>
            <li><a href="parcourir1.php?type='vetements'&id_client=<?php echo $_GET['id_client'] ?>">vetements</a></li>
            <li><a href="parcourir1.php?type='voitures'&id_client=<?php echo $_GET['id_client'] ?>">voitures</a></li>
            <li><a href="parcourir1.php?type='decoration'&id_client=<?php echo $_GET['id_client'] ?>">decoration</a>
            </li>
            <li><a href="parcourir1.php?type='ventes immo'&id_client=<?php echo $_GET['id_client'] ?>">ventes immo</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="flash">
      <div class="flash1">
        <p>Ventes flash</p>
      </div>
      <div class="flash2"><a href="mod_article.php?id=3">
          <image src="https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/41RwX0kKRAL._AC_SX679_.jpg"
            ; width='360' ; height='240' ;>
        </a></image>
      </div>
      <div class="flash3"><a href="mod_article.php?id=5">
          <image src="https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/415UI10lKML._AC_SX679_.jpg"
            ; width='360' ; height='240' ;></image>
        </a></div>
      <div class="flash4"><a href="mod_article.php?id=17">
          <image src="https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/61lYIKPieDL._AC_SL1500_.jpg"
            ; height='240'></image>
        </a></div>
    </div>
  </div>
  <br><br><br>
  <div id="footer" class="container">
    <footer>
      <small>
        <p align="center">
          concu par zhan tchalla kuate beglin. contact:mail :<a href="mailto:1472804183@qq.com">
            1472804183@qq.com
          </a>
        <p>tel : +33(0)652811128 </p>
        </p>
        <p align="center"> Tous droits reserves.copyright &copy;2023 | lstest update:21-03-2023</p>
      </small>
    </footer>

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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
      </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
      </script>
</body>

</html>