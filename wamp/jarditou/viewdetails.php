<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Athos</title>
</head>

<body>
    <div class="container-fluid p-0">


        <!-- Logo + motto -->
        <div class="row">
            <div class="col-4 d-lg-flex">
                <img src="./img/jarditou_logo.jpg" class="img-fluid d-none d-lg-block" alt="logo jarditou"
                    title="logo jarditou" height="60" width="200">
                <div class="col-8 d-lg-flex justify-content-end">
                    <span class="d-none d-lg-block h1">Tout le jardin</span>
                </div>
            </div>
        </div>


        <!-- navbar -->
        <nav class="navbar navbar-expand-lg bg-light navbar-light">
            <a class="navbar-brand" href="#">Jarditou.com</a>
            <!-- hamburger button for smaller devices -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.php">Accueil<span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../tableau.php">Tableau</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../contact.php">Contact</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input type="search" class="form-control mr-sm-2" placeholder="Votre promotion">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
                </form>
            </div>
        </nav>
    </div>


    <!-- promotion banner -->
    <img src="img/promotion.jpg" alt="promotion sur les lattes de terrasse"
        class="img-fluid clo-lg-12 p-0 m-0 w-100">


    <!-- database connexion -->
        <?php
            require_once "controller/conn.php";
        ?>


    <!-- Tab image -->
    <div class="row">
        <img id="athospic" src="img/8.jpg" alt="photo du barbecue Athos" class="img-fluid rounded mx-auto d-block clo-lg-12 p-0 m-0">
    </div>


    <!-- Tab -->
    <div class="row">
        <form id="createathos" action="/controller/posttab.php" method="POST" enctype="multipart/form-data" class="col-8 mx-auto d-block">

            <label for="ref" class="form_col">Référence : </label>
            <input type="text" name="ref" id="refathos" class="form-control">
            <br>

            <label for="cat" class="form_col">Catégorie : </label>
            <input type="text" name="cat" id="catathos" class="form-control">
            <br>

            <label for="tag" class="form_col">Libellé : </label>
            <input type="text" name="tag" id="tagathos" class="form-control">
            <br>

            <label for="descr" class="form_col">Description : </label>
            <input type="text" name="descr" id="descrathos" class="form-control">
            <br>

            <label for="price" class="form_col">Prix : </label>
            <input type="text" name="price" id="priceathos" class="form-control">
            <br>

            <label for="stock" class="form_col">Stock : </label>
            <input type="text" name="stock" id="stockathos" class="form-control">
            <br>

            <label for="color" class="form_col">Couleur : </label>
            <input type="text" name="color" id="colorathos" class="form-control">
            <br>

            <label for="blocked" class="form_col">Produit bloqué ? </label>
            <input type="text" name="blocked" id="blockedathos" class="form-control">
            <br>

            <label for="datead" class="form_col">Date d'ajout : </label>
            <input type="text" name="datead" id="dateadathos" class="form-control">
            <br>

            <label for="datemodif" class="form_col">Date de modification : </label>
            <input type="text" name="datemodif" id="datemodifathos" class="form-control">
            <br>

            <span class="form_col"></span>
            <button type="submit" name="submit" class="btn btn-dark">Envoyer</button>
            <button type="reset" name="reset" class="btn btn-dark">Annuler</button>

        </form>
    </div>
    
    <div>
        
    </div>

    </div>
</body>
</html>