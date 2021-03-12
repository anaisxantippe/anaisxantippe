<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Formulaire</title>
</head>

<body>
    <div class="container-fluid p-2">
        <!-- Logo + motto -->
        <div class="row">
            <div class="col-4 d-lg-flex">
                <img src="../img/jarditou_logo.jpg" class="img-fluid d-none d-lg-block" alt="logo jarditou"
                    title="logo jarditou" height="60" width="200">
                <div class="col-8 d-lg-flex justify-content-end">
                    <span class="d-none d-lg-block h1">Tout le jardin</span>
                </div>
            </div>
        </div>

        <!-- navbar -->
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg bg-light navbar-light">
                    <a class="navbar-brand" href="#">Jarditou.com</a>
                    <!-- hamburger button for smaller devices -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="../contact.html">Accueil<span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../tableau.html">Tableau</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../contact.html">Contact</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input type="search" class="form-control mr-sm-2" placeholder="Votre promotion">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>

        <!-- promotion banner -->
        <div class="row">
            <div class="col-12">
                <img src="../img/promotion.jpg" alt="promotion sur les lattes de terrasse"
                    class="img-fluid clo-lg-12 p-0 m-0 w-100">
            </div>
        </div>
        <p>* Ces zones sont obligatoires</p>

        <form id="formumu" action="/post.php" method="POST" enctype="multipart/form-data">

            <label class="form_col" for="lastName">Nom* :</label>
            <input name="lastName" id="lastName" type="text" class="form-control">
            <span id="1"></span>
            <br>


            <label class="form_col" for="firstName">Prénom* :</label>
            <input name="firstName" id="firstName" type="text" class="form-control">
            <span id="2"></span>
            <br>


            <span class="form_col">Sexe* :</span>
            <label><input name="sex" type="radio" value="H">Homme</label>
            <label><input name="sex" type="radio" value="F">Femme</label><br>
            <span id="7"></span>
            <br>


            <label for="date">Date de naissance*</label>
            <input id="date" type="date" class="form-control" required>
            <br>


            <label class="form_col" for="cp">Code postal* :</label>
            <input name="cp" id="cp" type="text" class="form-control">
            <span id="3"></span>
            <br>


            <label class="form_col" for="adress">Adresse* :</label>
            <input name="adress" id="adress" type="text" class="form-control">
            <span id="4"></span>
            <br>


            <label class="form_col" for="city">Ville*</label>
            <input id="city" type="text" class="form-control">
            <span id="5"></span>
            <br>


            <input id="email" type="email" class="form-control" placeholder="dave.loper@afpa.fr" required>
            <br>
            

            <label class="form_col" for="sujet">Sujet* :</label>
            <select id="sujet" name="sujet" class="form-control" size="1">
                <option value="" disabled selected>Veuillez sélectionner un sujet</option>
                <option value="commandes">Mes commandes</option>
                <option value="produit">Question sur un produit</option>
                <option value="réclamation">Réclamation</option>
                <option value="autres">Autres</option>
            </select><br>


            <label for="question">Votre question* : </label>
            <textarea id="question" name="question" class="form-control" cols="200" rows="2"></textarea>
            <span id="6"></span>
            <br>
            
            <div class="custom-file">
                <input type="file" accept="image/*" class="custom-file-input" name="fichier" id="fichier">
                <label for="fichier" class="custom-file-label">Joignez la photo du produit qui concerne votre demande :</label>
                <small id="fichier" class="form-text text-danger">Optionnel</small>
            </div>
            <br><br>

            <input id="agree" type="checkbox">
            <label for="agree">* J'accepte le traitement informatique de ce formulaire</label>
            <span id="8"></span>
            <br>


            <span class="form_col"></span>
            <button type="submit" class="btn btn-dark">Envoyer</button>
            <button type="reset" class="btn btn-dark">Annuler</button>

        </form>
        <!-- Effectuez le contrôle de saisie de votre formulaire Jarditou en Javascript.
        Lorsqu'une erreur est détectée, l'utilisateur doit en être informé grâce à l'affichage d'un message sous le champ concerné.
        Le formulaire ne peut être envoyé que lorsque tout est bon. -->
        <script src="../post.php"></script>
        <script src="../form.js"></script>

</body>
</html>