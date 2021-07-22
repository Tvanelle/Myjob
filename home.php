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
    <style type="text/css">
        #name {
            font-size: 20px;
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <section id="two">
        <div class="row" id="row_img">
            <div class="col-sm-12" id="img-baniere">
                <div class="row" style="margin-top: 6%;">
                    <div class="row">
                        <div class="col-lg-offset-4 col-lg-3">
                           
                        </div>
                    </div>
                    <div class="col-sm-offset-1 col-sm-10"></br>
                        <h2 style="color: white">
                            <center>Pres de <span style="color: rgb(0,226,102);"><b> <?= $results ?> </b></span> offres disponnibles trouvez la votre
                        </h2>
                        </center>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-offset-4 col-sm-8">
                        <h3 class="" style="font-size: 22px;"><span style="color: white">RECHERCHER</span> <span style="color: rgb(0,226,102)"><b>UNE OFFRE D'EMPLOI</b></span> </h3></br></br>
                    </div>
                </div>
                <div class="row">
                    <form method="POST" action="searchOffre">
                        <div class="col-lg-offset-1 col-lg-3">
                            <div class="form">
                                <div class="form-group">
                                    <input type="text" name="metier" class="input-lg form-control" placeholder="Saisir un metier ou mot clé.Ex:Developpeur">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form">
                                <div class="form-group">
                                    <input type="text" name="secteur" class="input-lg form-control" placeholder="Saisir un secteur ou domaine">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form">
                                <div class="form-group">
                                    <input type="text" name="lieu" class="input-lg form-control" placeholder="Saisir le lieu ou ville">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <button class="btn btn-success btn-lg" type="submit" name="search"><span class="glyphicon glyphicon-search"></span> </button>
                        </div>
                    </form>
                </div></br></br>
                <div class="row">
                    <?php if (isset($IdRecrut)) { ?>
                        <div class="col-sm-offset-3 col-sm-2">
                            <button class="btn btn-success btn-lg" id="post_ofrre" style="box-shadow: 6px 6px 20px -4px black;"><?= "<a href=betterSearch/$IdRecrut style:color= white>"; ?><span class="glyphicon glyphicon-search"></span> Faire une recherche ameliorer</a></button>
                        </div>
                    <?php } else if (isset($IdCandidat)) { ?>
                        <div class="col-sm-offset-3 col-sm-2">
                            <button class="btn btn-success btn-lg" id="post_ofrre" style="box-shadow: 6px 6px 20px -4px black;"><?= "<a href=index.php?page=betterSearch&IdCandidat=$IdCandidat style:color= white>"; ?><span class="glyphicon glyphicon-search"></span> Faire une recherche ameliorer</a></button>
                        </div>
                        <?php
                        ?>
                    <?php } else { ?>

                        <div class="col-sm-offset-3 col-sm-2">
                            <button class="btn btn-success btn-lg" id="post_ofrre" style="box-shadow: 6px 6px 20px -4px black;"><a href="createCompte" style="color: white"><span class="glyphicon glyphicon-search"></span> Faire une recherche ameliorer</a></button>
                        </div>
                    <?php } ?>

                    <?php if (isset($IdRecrut)) { ?>
                        <div class="col-sm-offset-1 col-sm-6">
                            <button class="btn btn-success btn-lg" id="post_ofrre1" style="box-shadow: 6px 6px 20px -4px black;"> <?= "<a href=postOffre/$IdRecrut style=color: white>"; ?><span class="glyphicon glyphicon-pencil"></span> Poster une offre Maintenant</a></button>
                        </div>

                    <?php } else { ?>
                        <div class="col-sm-offset-1 col-sm-6">
                            <button class="btn btn-success btn-lg" id="post_ofrre1" style="box-shadow: 6px 6px 20px -4px black;"> <?= "<a href=createPage style=color: white>"; ?><span class="glyphicon glyphicon-pencil"></span> Poster une offre Maintenant</a></button>
                        </div>
                    <?php } ?>
                </div>
                <!--<div class="row">
    				<div class="col-lg-offset-4 col-sm-4">
    					<li class="list-unstyled" id="li" ><a href="" class="" style="font-size: 25px; color: white" >Les dernieres offres recherchées</a></li></br></br>
    				</div>	
    			</div>
    			<div class="row">
    				<div class="col-sm-offset-1 col-sm-2">
                        <h4>Comptables Informatiques</h4>
                    </div>  
    				<div class="col-sm-2">
    					<h4>Comptables Informatiques</h4>
    				</div>	
    				<div class="col-sm-2">
    					<h4>Comptables Informatiques</h4>
    				</div>	
    				<div class=" col-sm-2">
    					<h4>Comptables Informatiquesh4>
    				</div>	
    				<div class=" col-sm-2">
    					<span class="glyphicon glyphicon-arrow-right btn btn-success btn-lg" style="width: 200px;height: 50px;">Voir plus</span>
    				</div>	
    			</div>-->
            </div>
        </div>
    </section>
    <section class="container" id="three" style="background-color: rgb(64,64,64);margin-top: -5%;position: relative;">
        <div class="row"></br>
            <div class="col-sm-offset-1 col-lg-3">
                <center><button class="btn-lg" id="btn_qui"><img src="Vues/Images/imgs/multiple-users.png" height="40" width="40" style="margin-right: 10px;"></button></center>
                <center>
                    <h3>QUI SOMMES NOUS ?</h3>
                </center></br>
                <p>Myjob est la meilleure plateforme de recrutement qui vous offre en temps et en heure les meilleures offres</p>
            </div>
            <div class=" col-lg-3">
                <center><button class="btn-lg" id="btn_qui"><img src="Vues/Images/imgs/un-salaire.png" height="40" width="40" style="margin-right: 10px;"></button></center>
                <center>
                    <h3>POURQUOI NOUS ?</h3>
                </center></br>
                <p>nous vous offrons en temps et en heure les meilleures offres ou que vous que vous soyez et vous y postuler facilement </p>
            </div>
            <div class=" col-lg-3">
                <center><button class="btn-lg" id="btn_qui"><img src="Vues/Images/imgs/suitcase (1).png" height="40" width="40"></button></center>
                <center>
                    <h3>TOUTES NOS OFFRES</h3>
                </center></br>
                <?php if (isset($IdRecrut)) {

                ?>
                    <p><?= "<li><a href=allOffres/$IdRecrut style=font-size:16px;>Consulter toutes les offres</a></li>" ?></a></p>
                <?php } else if (isset($IdCandidat)) { ?>
                    <p><?= "<li><a href=allOffres/$IdCandidat style=font-size:16px;>Consulter toutes les offres</a></li>" ?></a></p>
                <?php } else { ?>
                    <a href="allOffres">Consulter toutes les offres</a>
                <?php } ?>
            </div>
        </div>
    </section></br>
    <section class="four">
        <div class="row">
            <div class="col-sm-offset-4 col-sm-5">
                <h3 style="text-transform: uppercase;"><span class="glyphicon glyphicon-alarm"></span> Les offres publiées recemment</h3> </br></br>
            </div>

            <!--Requette pour recuperer les infos concernant l'offre -->

            <?php
            $dateN = time();
            while ($result = $newReq1->fetch()) {
                $_SESSION["IdRecrut"] = $result["IdRecrut"];
                $_SESSION["IdOffre"] = $result["IdOffre"];
                $IdRecruts = $_SESSION["IdRecrut"];
                $DatePoste = $result["DatePoste"];
                $datePost = strtotime($DatePoste);
                $DiffDate = abs(($dateN) - ($datePost));

                $retour = array();
                $retour['second'] = $DiffDate % 60;
                $DiffDate = floor(($DiffDate - $retour['second']) / 60);
                $retour['minute'] = $DiffDate % 60;
                $DiffDate = floor(($DiffDate - $retour['minute']) / 60);
                $retour['hour'] = $DiffDate % 24;
                $DiffDate = floor(($DiffDate - $retour['hour']) / 24);
                $retour['day'] = $DiffDate;

            ?>

                <div class="col-sm-offset-1 col-sm-10" style="box-shadow: 1px 1px 2px 2px;margin-bottom: 3%;"></br>
                    <div class="row">
                        <div class="col-sm-1"><img src="Vues/Images/imgs/profil.png" style="width: 50px;height: 50px;border-radius: 50px;"></div>
                        <div class="col-sm-10" id="ese">
                            <?php
                            $newReq2 = GetNameRecrut($IdRecruts);
                            while ($resultat = $newReq2->fetch()) {
                                if ($retour['day'] < 1) {
                            ?>
                                    <?= "<span style=font-size:18px;text-transform:uppercase>" ?> <?= $resultat["RecrutName"] ?></span><span href="" style="font-size: 20px;"> (Il y'a moin d'un jour )</span></br>
                                <?php } else { ?>
                                    <?= "<span style=font-size:18px;text-transform:uppercase>" ?> <?= $resultat["RecrutName"] ?><?php  ?></span><span href="" style="font-size: 20px;"> (Il y'a <?= $retour['day'] ?> jours)</span></br>
                            <?php }
                            } ?>
                            <img src="Vues/Images/imgs/emplacement.png" height="30" width="30"><i><?= $result["LieuOffre"] ?> </i></span> <span class="glyphicon glyphicon-calendar"><i><?= $result["DatePoste"] ?> </i></span> <span class="glyphicon glyphicon-pencil"><i><?= $result["TypeContrat"] ?> </i></span>
                        </div>
                    </div>
                    <?php if (isset($IdRecrut)) { ?>

                        <div class="row"></br>
                            <div class="col-sm-offset-1 col-sm-8">
                                <p style="font-size: 20px;font-weight: bold;"><span class="badge" style="background-color: red;"><?= $result["NbrePoste"] ?></span> <u><?= "<a href=detailsOffre/" . $_SESSION["IdOffre"] . "/" . $IdRecrut .  ">"; ?> <?= $result["PosteOffre"] ?></a></u> </p>
                            </div>
                        </div>
                        <div class="row"></br>
                            <div class="col-sm-8"><button class="btn btn-success btn-lg" style="background-color: #333;border: 0px;" href=""><?= "<a href=detailsOffre/" . $_SESSION["IdOffre"] . "/" . $IdRecrut . ">"; ?>Voir les details</a></button> </div></br>
                        </div></br>

                    <?php } else if (isset($IdCandidat)) { ?>

                        <div class="row"></br>
                            <div class="col-sm-offset-1 col-sm-8">
                                <p style="font-size: 20px;font-weight: bold;"><span class="badge" style="background-color: red;"><?= $result["NbrePoste"] ?></span> <u><?= "<a href=index.php?page=detailsOffre&amp;IdOffre=" . $_SESSION["IdOffre"] . "&amp;IdCandidat=" . $IdCandidat .  ">"; ?> <?= $result["PosteOffre"] ?></a></u> </p>
                            </div>
                        </div>
                        <div class="row"></br>
                            <div class="col-sm-8"><button class="btn btn-success btn-lg" style="background-color: #333;border: 0px;" href=""><?= "<a href=index.php?page=detailsOffre&amp;IdOffre=" . $_SESSION["IdOffre"] . "&amp;IdCandidat=" . $IdCandidat . ">"; ?>Voir les details</a></button> </div></br>
                        </div></br>

                    <?php } else { ?>

                        <div class="row"></br>
                            <div class="col-sm-offset-1 col-sm-8">
                                <p style="font-size: 20px;font-weight: bold;"><span class="badge" style="background-color: red;"><?= $result["NbrePoste"] ?></span> <u><?= "<a href=index.php?page=detailsOffre&amp;IdOffre=" . $_SESSION["IdOffre"] . ">"; ?> <?= $result["PosteOffre"] ?></a></u> </p>
                            </div>
                        </div>
                        <div class="row"></br>
                            <div class="col-sm-8"><button class="btn btn-success btn-lg" style="background-color: #333;border: 0px;" href=""><?= "<a href=index.php?page=detailsOffre&amp;IdOffre=" . $_SESSION["IdOffre"] . ">"; ?>Voir les details</a></button> </div></br>
                        </div></br><?php } ?>
                </div>

                <?php
                $newReq3 = GetOffresNbPerso($IdRecruts);
                $cp = $newReq3->rowCount();
                echo "$cp";
                $reponse = $newReq3->rowCount();
                if ($reponse > 1) {

                ?>

                    <div class="row"></br></br></br>
                        <div class="col-sm-5">
                            <center><button class="btn btn-danger btn-lg" style=""><?= $reponse ?> Offres disponnibles</button></center>
                        </div>
                    </div></br><?php } ?><?php } ?>





        </div>
        <div class="row">
            <div class="col-sm-offset-3 col-sm-4">
                <?php if (isset($IdRecrut)) {

                ?>
                    <p><?= "<li><a href=allOffres/$IdRecrut style=font-size:20px;><button>Voir plus offres</a></li>" ?></a></p>
                <?php } else if (isset($IdCandidat)) { ?>
                    <p><?= "<li><a href=index.php?page=allOffres&amp;IdCandidat=$IdCandidat style=font-size:20px;>Voir plus offres</a></li>" ?></a></p>
                <?php } else { ?>
                    <a href="allOffres">Voir plus offres</a>
                <?php } ?>
            </div>
        </div>


    </section></br></br>
    <section id="four">
        <div class="row">
            <?php if (isset($IdCandidat) and !empty($IdCandidat)) { ?>
                <div class="col-sm-offset-2 col-sm-8"><button class="btn btn-success btn-lg" style="width: 800px;box-shadow: 1px 1px 2px 2px;"><?= "<a href=index.php?page=leaveCv&IdCandidat=$IdCandidat >"; ?> LAISSER VOTRE CV</a></button></div>

        </div>
    <?php } else if (isset($IdRecrut) and !empty($IdRecrut)) { ?>
        <div class="col-sm-offset-2 col-sm-8"><button class="btn btn-success btn-lg" style="width: 800px;box-shadow: 1px 1px 2px 2px;"><?= "<a href=createCompte>"; ?> LAISSER VOTRE CV</a></button></div>

        </div>
    <?php } else { ?>
        <div class="col-sm-offset-2 col-sm-8"><button href="index.php" class="btn btn-success btn-lg" style="width: 800px;box-shadow: 1px 1px 2px 2px;"><a href="createCompte"> LAISSER VOTRE CV</a></button></div>
    <?php } ?>
    </div>
    <!-- <div class="row"></br></br></br>
            <div class="row">
                <div class="col-sm-offset-4 col-sm-4"><h3> Nos offres classe par:</h3></div>
            </div></br>
            <div class="col-sm-offset-2 col-lg-2" id="local">
                <h3>LOCALITES</h3></br>
                    <ul>
                        <li class="list-unstyled"><a href="">Yaoundé</a></li>
                        <li class="list-unstyled"><a href="">Douala</a></li>
                        <li class="list-unstyled"><a href="">Bafoussam</a></li>
                        <li class="list-unstyled"><a href="">Bertoua</a></li>
                    </ul>
            </div>
            <div class=" col-lg-2">
                <center><h3>SECTEURS</h3></center></br>
                 <center><ul>
                        <li class="list-unstyled"><a href="">informatique</a></li>
                        <li class="list-unstyled"><a href="">Santé</a></li>
                        <li class="list-unstyled"><a href="">Finance</a></li>
                        <li class="list-unstyled"><a href="">Securité</a></li>
                    </ul></center>
            </div>
            <div class=" col-lg-2">
                <center><h3>DOMAINES</h3></center></br>
                 <center><ul>
                        <li class="list-unstyled"><a href="">Electricite</a></li>
                        <li class="list-unstyled"><a href="">Menuserie</a></li>
                        <li class="list-unstyled"><a href="">Developpement web</a></li>
                        <li class="list-unstyled"><a href="">graphiste</a></li>
                    </ul></center>
            </div>
        </div>
    -->
    </section>
    <section>
        <div class="row"></br></br></br>
            <div class="row">
                <div class="col-sm-offset-4 col-sm-4">
                    <h3>Temoignages de nos recruteurs</h3>
                </div>
            </div></br></br></br></br></br>
            <?php while ($result = $newReqx->fetch()) {
                $_SESSION["IdRecrut"] = $result["IdRecrut"];
                $IdRecrut = $_SESSION["IdRecrut"];
            ?>
                <div class="col-sm-offset-1 col-lg-3">
                    <center><button class="btn btn-success btn-lg" id="abonne"><span class="glyphicon glyphicon-user"></span></button></center>
                    <?php
                    $newReq = GetNameCommentRecrut($IdRecrut);
                    while ($resultat = $newReq->fetch()) {

                    ?>
                        <center>
                            <h3><?= $resultat["RecrutName"]; ?></h3>
                        </center></br><?php } ?>
                    <center>
                        <p><?= $result["LibelleComment"]; ?></p>
                    </center>
                </div><?php } ?>


            <div class="row">
                <div class="col-sm-offset-4 col-sm-4">
                    <h3>Temoignages de nos candidats</h3>
                </div>
            </div></br></br></br></br></br>
            <?php while ($result = $newReqy->fetch()) {
                $_SESSION["IdCandidat"] = $result["IdCandidat"];
                $IdCandidat = $_SESSION["IdCandidat"];
            ?>
                <div class="col-sm-offset-1 col-lg-3">
                    <center><button class="btn btn-success btn-lg" id="abonne"><span class="glyphicon glyphicon-user"></span></button></center>
                    <?php
                    $newReq = GetNameCommentCandidat($IdCandidat);
                    while ($resultat = $newReq->fetch()) {

                    ?>
                        <center>
                            <h3><?= $resultat["CandidatName"]; ?></h3>
                        </center></br><?php } ?>
                    <center>
                        <div class="">
                            <p style="font-size: 16px;"><?= $result["LibelleComment"]; ?></p>
                        </div>
                    </center>
                </div><?php } ?>
        </div>
    </section></br></br>
    </br>
    <section>
        <div class="row">
            <?php if (isset($IdRecrut) and !empty($IdRecrut)) {
            ?>
                <div class="form col-sm-offset-2 col-sm-8">
                    <?= "<form class=form col-sm-offset-2 col-sm-8 method=POST action=leaveComment/$IdRecrut>"; ?>
                    <div class="form-group">
                        <label style="font-size: 20px;">Laisser un commentaire</label>
                        <textarea class="form-control" cols="5" rows="10" name="comment"></textarea>
                    </div>
                    <input type="hidden" name="IdRecrut" value=<?= $IdRecrut ?>>
                    <button class="btn btn-primary btn-lg" type="submit" name="envoi"><span class="glyphicon glyphicon-send"> Envoyer</span></button>
                    </form>
                <?php } else if (isset($IdCandidat) and !empty($IdCandidat)) {
                ?>
                    <div class="form col-sm-offset-2 col-sm-8">
                        <?= "<form class=form col-sm-offset-2 col-sm-8 method=POST action=index.php?page=leaveComment&IdRecrut=$IdCandidat>"; ?>
                        <div class="form-group">
                            <label style="font-size: 20px;">Laisser un commentaire</label>
                            <textarea class="form-control" cols="5" rows="10" name="comment"></textarea>
                        </div>
                        <input type="hidden" name="IdCandidat" value=<?= $IdCandidat ?>>
                        <button class="btn btn-primary btn-lg" type="submit" name="envoi"><span class="glyphicon glyphicon-send"> Envoyer</span></button>
                        </form>

                    <?php } else if (empty($IdCandidat) and empty($IdRecrut)) { ?>
                        <form class="form col-sm-offset-2 col-sm-8" method="POST" action="createPage">
                            <div class="form-group">
                                <label style="font-size: 20px;">Laisser un commentaire</label>
                                <textarea class="form-control" cols="5" rows="10" name="comment"></textarea>
                            </div>
                            <button class="btn btn-primary btn-lg" type="submit" name="envoi"><span class="glyphicon glyphicon-send"> Envoyer</span></button>
                        </form>
                    </div>
                <?php } ?>
                </div>
    </section></br></br>
    <section class="mailAlert">
        <div class="col-sm-offset-4 col-sm-4">
            <form method="POST" action="Vues/alertMail.php?IdCandidat=<?= $IdCandidat ?>">
                <p>Creer votre alert mail pour recevoir de nouvelles offres publiés</p>
                <hr>
                <div class="form-group">
                    <input type="email" name="mails" placeholder="Laisser votre adresse mail" required class="input-lg form-control">
                    </br><button class="btn btn-danger btn-lg">Creer</button>
                </div>
            </form>
        </div>

    </section></br></br></br></br></br></br></br></br></br></br>
    <footer style="background-color: rgb(64,64,64);">
        <div class="row"></br>
            <div class="col-sm-offset-1 col-lg-3">
                <center>
                    <h3>A propos de nous</h3>
                </center></br>
                <p>Price est la meilleure plateforme de recrutement qui vous offre en temps et en heure
                    les meilleures offres.Price est la meilleure plateforme de recrutement qui vous offre
                    en temps et en heure les meilleures offres.nous vous offrons en temps et en heure les meilleures
                    offres ou que vous que vous soyez et vous y postuler facilement</p>
            </div>
            <div class="col-lg-offset-1 col-lg-3">
                <center>
                    <h3>Suivez nous sur:</h3>
                </center></br>
                <li><a href=""><span class="glyphicon glyphicon-facebook"></span> Facebook</a></li>
                <li><a href="" style="">Wathsapp</a></li>
                <li><a href="" style="">twittet</a></li>
                <li><a href="" style="">contact:654814503</a></li>
            </div>

        </div>
    </footer>
    <script src="Vues/css/bootstrap/dist/js/jquery-3.3.1.min.js"></script>
    <script src="Vues/css/bootstrap/dist/js/bootstrap-4.3.1.min.js"></script>
    <!--Autres appel de librairie!-->
    
    <script src="js/home.js"></script>
    <script type="text/javascript">
        $(function() {
            //alert("eeee");
        });
    </script>
</body>

</html>


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
                            <li class=><a href=accueil>Accueil</a></li>
                            <li><a href=allOffres>Toutes les offres</a></li>
                            <li><a href=postOffre>Publier une offre</a></li>
                            <li><a href=allRecrut>Nos recruteurs</a></li>
                            <li><a href=Cvtheques>Cvtheques</a></li>
                            <!--<li><a href="" >A propos de nous</a></li>-->
                            <li class="dropdown" style="border: 2px solid rgb(0,226,102);border-radius: 5px;"><a href="" data-toggle="dropdown" class="btn btn-inverse" id="btn-creer"><span class="glyphicon glyphicon-user"></span> creer<b class="caret"></b></a>
                                <ul class="dropdown-menu" style="background-color: #333;width: 100px;">
                                    <li><a href="createPage"></span> Une page</a></li>
                                    <li><a href="createCompte">Un compte</a></li>

                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
        </nav>
    </section>