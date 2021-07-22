<?php  ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Rechercher facilement vos offres d'emploi</title>
    <link rel="stylesheet" type="text/css" href="Vues/css/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Vues/css/bootstrap/dist/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="Vues/css/styles.css">
</head>

<body>
    <section id="one" class="">
        <nav class="navbar navbar-inverse" style="width: auto">
            <div class="row">
                <div class="col-sm-2">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <?php
                        include 'Modeles/showOffres.php';
                        $newReq2 = GetNameRecrut($IdRecrut);
                        while ($resultat = $newReq2->fetch()) { ?>
                            <li><a class="navbar-brand" href="#" style="background-color: rgb(0,226,102);border-radius: 50px;"><?= $resultat["RecrutName"] ?></a></li><?php } ?>
                    </div>
                </div>
                <div class="col-sm-offset-3 col-sm-7">
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <!--<li class=""><a href="index.php?page=accueil&amp;IdRecrut="<?= $_SESSION["IdRecrut"] ?> >Accueil</a></li>-->
                            <?= "<li class=><a href=index.php?page=accueil&amp;IdRecrut=$IdRecrut>Accueil</a></li>"; ?>
                            <?= "<li><a href=index.php?page=allOffresPerso&amp;IdRecrut=$IdRecrut>Mes offres</a></li>" ?>
                            <?= "<li><a href=index.php?page=postOffre&amp;IdRecrut=$IdRecrut>Publier une offre</a></li>" ?>
                            <?= "<li><a href=index.php?page=messageRecrut&amp;IdRecrut=$IdRecrut>Messages</a></li>" ?>
                            <?= "<li><a href=index.php?page=cvthequesPerso&amp;IdRecrut=$IdRecrut>Ma cvtheques</a></li>" ?>
                            <!--<li><a href="" >A propos de nous</a></li>-->

                            <li class="dropdown" style="border: 2px solid rgb(0,226,102);border-radius: 5px;"><a href="" data-toggle="dropdown" class="btn btn-inverse" id="btn-creer"><span class="glyphicon glyphicon-user"></span> Se deconnecter</a>

                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>
    </section></br></br>