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
                        <a class="navbar-brand" href="#">MYJOB</a>
                    </div>
                </div>
                <div class="col-sm-offset-3 col-sm-7">
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <!--<li class=""><a href="index.php?page=accueil&amp;IdCandidat="<?= $_SESSION["IdCandidat"] ?> >Accueil</a></li>-->
                            <?= "<li class=><a href=index.php?page=accueil&amp;IdCandidat=$IdCandidat>Accueil</a></li>"; ?>
                            <?= "<li><a href=index.php?page=allOffres&amp;IdCandidat=$IdCandidat>Toutes les offres</a></li>" ?>
                            <?= "<li><a href=index.php?page=postOffre&amp;IdCandidat=$IdCandidat>Publier une offre</a></li>" ?>
                            <?= "<li><a href=index.php?page=allRecrut&amp;IdCandidat=$IdCandidat>Nos recruteurs</a></li>" ?>
                            <?= "<li><a href=index.php?page=Cvtheques&amp;IdCandidat=$IdCandidat>Cvtheques</a></li>" ?>
                            <!--<li><a href="" >A propos de nous</a></li>-->
                            <?php
                            require 'Modeles/showOffres.php';
                            include 'Modeles/showCandidat.php';
                            $newReq2 = GetNameCandidat($IdCandidat);
                            while ($resultat = $newReq2->fetch()) {
                                $name = $resultat["CandidatPrenom"];
                                $CandidatName = substr("$name", 1, 1);
                            ?>

                                <li class="dropdown" style="border: 2px solid rgb(0,226,102);border-radius: 50px;height: 50px;width: 50px"><a href="" data-toggle="dropdown" class="btn btn-inverse" id="btn-creer" style="text-transform: uppercase;font-size: 25px;color: rgb(0,226,102);"> <?= $CandidatName ?> <b class="caret"></b></a><?php } ?>
                                <ul class="dropdown-menu" style="background-color: #333;width: 80px;">
                                    <?= "<li><a href=index.php?page=personalPageCandidat&amp;IdCandidat=$IdCandidat></span>Mon Compte</a></li>" ?>
                                    <?= "<li><a href=index.php?page=deconnectCompte&amp;IdCandidat=$IdCandidat>Se deconnecter</a></li>" ?>
                                </ul>
                                </li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>
    </section></br></br>