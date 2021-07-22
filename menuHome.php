<?php  ?>
<!DOCTYPE html>
<html>

<head>
    <base href="/www Myjob.com/">
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
                            <!--<li class=""><a href="index.php?page=accueil&amp;IdRecrut="<?= $_SESSION["IdRecrut"] ?> >Accueil</a></li>-->
                            <?= "<li class=><a href=accueil/$IdRecrut>Accueil</a></li>"; ?>
                            <?= "<li><a href=allOffres/$IdRecrut>Toutes les offres</a></li>" ?>
                            <?= "<li><a href=postOffre/$IdRecrut>Publier une offre</a></li>" ?>
                            <?= "<li><a href=allRecrut/$IdRecrut>Nos recruteurs</a></li>" ?>
                            <?= "<li><a href=Cvtheques/$IdRecrut>Cvtheques</a></li>" ?>
                            <!--<li><a href="" >A propos de nous</a></li>-->
                            <?php
                            include 'Modeles/showOffres.php';
                            $newReq2 = GetNameRecrut($IdRecrut);
                            while ($resultat = $newReq2->fetch()) {
                                $name = $resultat["RecrutName"];
                                $RecrutName = substr("$name", 0, 1);
                            ?>

                                <li class="dropdown" style="border: 2px solid rgb(0,226,102);border-radius: 50px;height: 50px;width: 50px"><a href="" data-toggle="dropdown" class="btn btn-inverse" id="btn-creer" style="text-transform: uppercase;font-size: 25px;color: rgb(0,226,102);"> <?= $RecrutName ?> <b class="caret"></b></a><?php } ?>
                                <ul class="dropdown-menu" style="background-color: #333;width: 80px;">
                                    <?= "<li><a href=personalPage/$IdRecrut></span>Ma page</a></li>" ?>
                                    <?= "<li><a href=deconnectPage/$IdRecrut>Se deconnecter</a></li>" ?>
                                </ul>
                                </li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>
    </section></br></br>