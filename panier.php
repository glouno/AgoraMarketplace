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
                if (isset($_GET['id_client']) && !isset($_GET['sup'])) {
                    $sql = "select id_produit, nom ,prix,image,id_client from panier,produits where panier.id_produit = produits.id and id_client=" . $_GET['id_client'] . "";
                    $result = mysqli_query($db_handle, $sql);
                    //$data = mysqli_fetch_assoc($result);
                    while ($data = mysqli_fetch_assoc($result)) {

                        echo '<div class="row">';
                        echo '<div class="col-4"><img src="' . $data['image'] . '" width="300px" height="200px"></div>';
                        echo '<div class="col-1"></div> ';
                        echo '<div class="col-5" style="text-align: left;">';
                        echo '<br><h1>' . $data['nom'] . '</h1><br>';
                        echo '<h2>prix:' . $data['prix'] . '€</h2>';
                        echo '</div>';
                        echo '<div class="col-2">';
                        echo '<a href="panier.php?id_client=' . $_GET['id_client'] . "&sup=" . $data['id_produit'] . '">';
                        echo '<button type="button" class="btn btn-danger">Supprimer</button>';
                        echo '</a></div></div><br>';

                    }
                } elseif (isset($_GET['id_client']) && isset($_GET['sup'])) {
                    $sql = "DELETE FROM panier WHERE id_client=" . $_GET['id_client'] . " and id_produit=" . $_GET['sup'] . "";
                    $result = mysqli_query($db_handle, $sql);
                    $sql = "select id_produit, nom ,prix,image,id_client from panier,produits where panier.id_produit = produits.id and id_client=" . $_GET['id_client'] . "";
                    $result = mysqli_query($db_handle, $sql);
                    //$data = mysqli_fetch_assoc($result);
                    while ($data = mysqli_fetch_assoc($result)) {

                        echo '<div class="row">';
                        echo '<div class="col-4"><img src="' . $data['image'] . '" width="300px" height="200px"></div>';
                        echo '<div class="col-1"></div> ';
                        echo '<div class="col-5" style="text-align: left;">';
                        echo '<br><h1>' . $data['nom'] . '</h1><br>';
                        echo '<h2>prix:' . $data['prix'] . '€</h2>';
                        echo '</div>';
                        echo '<div class="col-2">';
                        echo '<a href="panier.php?id_client=' . $_GET['id_client'] . "&sup=" . $data['id_produit'] . '">';
                        echo '<button type="button" class="btn btn-danger">Supprimer</button>';
                        echo '</a></div></div><br>';

                    }
                } else {
                    echo "erreur";
                }
            }
            //end else //fermer la connection 
            mysqli_close($db_handle); ?>

        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <a href="paiement.php?id_client=<?php echo $_GET['id_client'] ?>">
                        <button type="button" class="btn btn-primary btn-lg btn-block">Payer</button>
                    </a>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
        <br>

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



        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
            crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
            integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
            crossorigin="anonymous"></script>
</body>

</html>