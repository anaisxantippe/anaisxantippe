<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Page d'acceuil</title>
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

    <!-- content -->
    <div class="row">
        <div class="col-lg-7 ml- mr-0 shadow p-3 rounded">
            <section>
                <article>
                    <h2>L'entreprise</h2>
                    <p>Notre entreprise familiale met tout son savoir-faire à votre disposition dans le domaine du
                        jardin et de paysagisme</p>
                    <p>Créée il y a 70 ans, notre entreprise vend fleurs, arbustes, matériel à main et motorisés.</p>
                    <p>Implantés à Amiens, nous intervenons dans tout le département de la Somme : Albert, Doullens,
                        Péronne, Abbeville, Corbie</p>
                </article>
            </section>
            <section>
                <article>
                    <h2>Qualité</h2>
                    <p>Nous mettons à votre disposition un service personnalisé, avec 1 seul interlocuteur durant tout
                        votre projet.</p>
                    <p>Vous serez séduit par notre expertise, nos compétences et notre sérieux.</p>
                </article>
                <article>
                    <h2>Devis gratuit</h2>
                    <p>Vous pouvez bien sûr contacter pour de plus amples informations ou pour une demande
                        d'intervention. Vous souhaitez un devis? Nous vous le réalisons gratuitement.</p>
                </article>
            </section>
        </div>
        <div class="col-lg-5 p-0 d-flex justify-content-center shadow p-3 rounded bg-warning">
            [Colonne de droite]
        </div>
    </div>

    <!-- Footer -->
    <div class="row">
        <div class="col-lg-12">
            <footer id="navbottom">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.lienquelconque.com">Mentions légales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.lienquelconque.com">Horaires</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.lienquelconque.com">Plan du site</a>
                        </li>
                    </ul>
                </nav>
            </footer>
        </div>
    </div>

    <!-- End of container -->
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>