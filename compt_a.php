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
            <div class="container">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <a href="inscriptions_vendeurs.php">
                            <button type="button" class="btn btn-primary btn-lg btn-block">inscriptions
                                vendeurs</button>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="Ajout.php?id_fournisseur=1">
                            <button type="button" class="btn btn-primary btn-lg btn-block">ajouter produit
                            </button>
                        </a>
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6">
                    <h2>Liste des produits</h2>
                </div>
                <div class="col-6">
                    <h2>Liste des fournisseurs</h2>
                </div>
            </div>
            <br>
            <?php
            if (isset($_GET['id_admin'])) {
                $id_admin = $_GET['id_admin'];
            } else {
                $id_admin = 0;
            }
            //identifier le nom de base de données
            $database = "ag";
            //connectez-vous dans votre BDD
//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
            $db_handle = mysqli_connect('localhost:3308', 'root', '');
            $db_found = mysqli_select_db($db_handle, $database);
            //si le BDD existe, faire le traitement
            if ($db_found) {
                if (isset($_GET['id_admin']) && !isset($_GET['suppro']) && !isset($_GET['supfou'])) {
                    $sql = "select * from produits";
                    $result = mysqli_query($db_handle, $sql);
                    $sql1 = "select * from fournisseurs";
                    $result1 = mysqli_query($db_handle, $sql1);
                    //$data = mysqli_fetch_assoc($result);
                    echo '<div class="row">';
                    echo '<div class="col-6">';
                    echo '<div class="row">';
                    echo '<div class="col-4"><p>id de produit</p></div>';
                    echo '<div class="col-4"><p>prix</p></div></div> ';
                    while ($data = mysqli_fetch_assoc($result)) {
                        echo '<div class="row">';
                        echo '<div class="col-4"><p>' . $data['id'] . '</p></div>';
                        echo '<div class="col-4"><p>' . $data['prix'] . '</p></div> ';
                        echo '<div class="col-4">';
                        echo '<a href="compt_a.php?id_admin=' . $id_admin . "&suppro=" . $data['id'] . '">';
                        echo '<button type="button" class="btn btn-danger">Supprimer</button>';
                        echo '</a></div></div><br>';
                    }
                    echo '</div>';
                    echo '<div class="col-6">';
                    echo '<div class="row">';
                    echo '<div class="col-4"><p>nom</p></div>';
                    echo '<div class="col-4"><p>email</p></div></div> ';
                    while ($data1 = mysqli_fetch_assoc($result1)) {
                        echo '<div class="row">';
                        echo '<div class="col-4"><p>' . $data1['nom'] . '</p></div>';
                        echo '<div class="col-4"><p>' . $data1['email'] . '</p></div> ';
                        echo '<div class="col-4">';
                        echo '<a href="compt_a.php?id_admin=' . $id_admin . "&supfou=" . $data1['id_fournisseur'] . '">';
                        echo '<button type="button" class="btn btn-danger">Supprimer</button>';
                        echo '</a></div></div><br>';
                    }
                    echo '</div></div>';

                } elseif (!isset($_GET['suppro']) && isset($_GET['suppro'])) {
                    $sql2 = "DELETE FROM produits WHERE id=" . $_GET['suppro'] . "";
                    $result2 = mysqli_query($db_handle, $sql2);
                    $sql = "select * from produits";
                    $result = mysqli_query($db_handle, $sql);
                    $sql1 = "select * from fournisseurs";
                    $result1 = mysqli_query($db_handle, $sql1);
                    //$data = mysqli_fetch_assoc($result);
                    echo '<div class="row">';
                    echo '<div class="col-6">';
                    echo '<div class="row">';
                    echo '<div class="col-4"><p>id de produit</p></div>';
                    echo '<div class="col-4"><p>prix</p></div></div> ';
                    while ($data = mysqli_fetch_assoc($result)) {
                        echo '<div class="row">';
                        echo '<div class="col-4"><p>' . $data['id'] . '</p></div>';
                        echo '<div class="col-4"><p>' . $data['prix'] . '</p></div> ';
                        echo '<div class="col-4">';
                        echo '<a href="compt_a.php?id_admin=' . $id_admin . "&suppro=" . $data['id'] . '">';
                        echo '<button type="button" class="btn btn-danger">Supprimer</button>';
                        echo '</a></div></div>';
                    }
                    echo '</div>';
                    echo '<div class="col-6">';
                    echo '<div class="row">';
                    echo '<div class="col-4"><p>nom</p></div>';
                    echo '<div class="col-4"><p>email</p></div></div> ';
                    while ($data1 = mysqli_fetch_assoc($result1)) {
                        echo '<div class="row">';
                        echo '<div class="col-4"><p>' . $data1['nom'] . '</p></div>';
                        echo '<div class="col-4"><p>' . $data1['email'] . '</p></div> ';
                        echo '<div class="col-4">';
                        echo '<a href="compt_a.php?id_admin=' . $id_admin . "&supfou=" . $data1['id_fournisseur'] . '">';
                        echo '<button type="button" class="btn btn-danger">Supprimer</button>';
                        echo '</a></div></div><br>';
                    }
                    echo '</div></div>';
                } elseif (isset($_GET['supfou']) && !isset($_GET['suppro'])) {
                    $sql2 = "DELETE FROM fournisseurs WHERE id_fournisseur=" . $_GET['supfou'] . "";
                    $result2 = mysqli_query($db_handle, $sql2);
                    $sql = "select * from produits";
                    $result = mysqli_query($db_handle, $sql);
                    $sql1 = "select * from fournisseurs";
                    $result1 = mysqli_query($db_handle, $sql1);
                    //$data = mysqli_fetch_assoc($result);
                    echo '<div class="row">';
                    echo '<div class="col-6">';
                    echo '<div class="row">';
                    echo '<div class="col-4"><p>id de produit</p></div>';
                    echo '<div class="col-4"><p>prix</p></div></div> ';
                    while ($data = mysqli_fetch_assoc($result)) {
                        echo '<div class="row">';
                        echo '<div class="col-4"><p>' . $data['id'] . '</p></div>';
                        echo '<div class="col-4"><p>' . $data['prix'] . '</p></div> ';
                        echo '<div class="col-4">';
                        echo '<a href="compt_a.php?id_admin=' . $id_admin . "&suppro=" . $data['id'] . '">';
                        echo '<button type="button" class="btn btn-danger">Supprimer</button>';
                        echo '</a></div></div><br>';
                    }
                    echo '</div>';
                    echo '<div class="col-6">';
                    echo '<div class="row">';
                    echo '<div class="col-3"><p>nom</p></div>';
                    echo '<div class="col-3"><p>email</p></div></div> ';
                    while ($data1 = mysqli_fetch_assoc($result1)) {
                        echo '<div class="row">';
                        echo '<div class="col-4"><p>' . $data1['nom'] . '</p></div>';
                        echo '<div class="col-4"><p>' . $data1['email'] . '</p></div> ';
                        echo '<div class="col-4">';
                        echo '<a href="compt_a.php?id_admin=' . $id_admin . "&supfou=" . $data1['id_fournisseur'] . '">';
                        echo '<button type="button" class="btn btn-danger">Supprimer</button>';
                        echo '</a></div></div><br>';
                    }
                    echo '</div></div>';
                } else {
                    echo "erreur";
                }
            }
            //end else //fermer la connection 
            mysqli_close($db_handle); ?>

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


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
            crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
            integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
            crossorigin="anonymous"></script>
</body>

</html>