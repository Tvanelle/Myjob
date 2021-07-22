<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Rechercher facilement vos offres d'emploi</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/dist/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <style type="text/css">
        body {
            background-color: whitesmoke;
        }

        #imgBaniere {
            background: url('Vues/Images/imgs/img1.jpg');
            background-size: cover;
            height: 350px;
            margin-top: -4.4%;
        }
    </style>
</head>

<body>

    <section id="two">
        <div class="row" id="row_img">
            <div class="col-sm-12" id="imgBaniere">
                <div class="row">
                    <div class="col-sm-offset-4 col-sm-8">
                        <h3 class="" style="font-size: 22px;"><span style="color: white">RECHERCHER</span> <span style="color: rgb(0,226,102)"><b>UNE OFFRE D'EMPLOI</b></span> </h3></br></br>
                    </div>
                </div>
                <div class="row">
                    <form method="POST" action="index.php?page=searchOffre">
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
    </section>
    <section class="four">
        <div class="row">
            <div class="col-sm-offset-4 col-sm-5">
                <h3 style="text-transform: uppercase;"><span class="glyphicon glyphicon-alarm"></span> Les offres postulées recemment</h3> </br></br>
            </div>

            <!--Requette pour recuperer les infos concernant l'offre -->

            <?php
            //require 'Modeles/showOffre.php';          
            while ($result1 = $newReq1->fetch()) {
                $_SESSION["IdOffre"] = $result1["IdOffre"];
                $IdOffre = $_SESSION["IdOffre"];

                $newReq2 = GetOffresCand($IdOffre);
                $dateN = time();
                while ($result = $newReq2->fetch()) {
                    $IdRecrut = $result["IdRecrut"];


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
                            <div class="col-sm-1"><img src="Vues/Images/imgs/OIP (1).JFIF" style="width: 50px;height: 50px;border-radius: 50px;"></div>
                            <div class="col-sm-10" id="ese">
                                <?php
                                //include 'Modeles/showOffres.php';
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
                                    <p style="font-size: 20px;font-weight: bold;"><span class="badge" style="background-color: red;"><?= $result["NbrePoste"] ?></span> <u><?= "<a href=index.php?page=detailsOffre&amp;IdOffre=" . $_SESSION["IdOffre"] . "&amp;IdRecrut=" . $IdRecrut .  ">"; ?> <?= $result["PosteOffre"] ?></a></u> </p>
                                </div>
                            </div>
                            <div class="row"></br>
                                <div class="col-sm-8"><button class="btn btn-success btn-lg" style="background-color: #333;border: 0px;" href=""><?= "<a href=index.php?page=detailsOffre&amp;IdOffre=" . $_SESSION["IdOffre"] . "&amp;IdRecrut=" . $IdRecrut . ">"; ?>Voir les details</a></button> </div></br>
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




                    </div></br></br> <?php } ?><?php } ?>
    </section></br></br>