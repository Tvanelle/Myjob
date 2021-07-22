<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Rechercher facilement vos offres d'emploi</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/dist/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <style type="text/css">
        #img-baniereRecrut {
            background: url('Vues/Images/imgs/img1.jpg');
            background-size: cover;
            height: 280px;
            margin-top: -4.4%;
        }
    </style>
</head>

<body>
    <div class="col-sm-12" id="img-baniereRecrut">
        <div class="row">
            <!-- <div class="col-sm-offset-3 col-sm-8"></br>
                        <h5 class="" style="font-size: 20px;"><span  style="color: white">Laisser votre cv pour augmenter vos chance d'etre reperer par des entreprise c'est facile</h5></br></br>
                    </div>-->
        </div>
        <div class="row">
            <div class="col-sm-offset-3 col-sm-5">
                <h2 style="color:white">Bienvenue dans votre Cvtheque</h2>
            </div>
        </div>
    </div></br></br>
    <section class="col-sm-offset-1 col-sm-10 ">
        <?php
        require 'Modeles/macvthequesPerso.php';
        $req = GetRecrut($IdRecrut);
        $results = $req->rowCount();
        if ($results < 1) {
        ?>
            <caption>
                <h2>
                    <center>Aucun candidats n'a postuler a cette offre </center>
                </h2>
            </caption></br></br>
        <?php } else { ?>
            <caption>
                <h2>
                    <center>Listes des candidats</center>
                </h2>
            </caption></br></br>
            <table class="table  table-bordered">
                <thead>
                    <tr class="" style="background-color: whitesmoke;border: 0px;color: black;">
                        <th>Nom de l'offre </th>
                        <th>Candidats</th>
                        <th>Cv</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($result = $req->fetch()) {
                        $_SESSION["IdOffre"] = $result["IdOffre"];
                    ?>
                        <tr class="">
                            <td><?= $result["PosteOffre"]; ?></td>
                            <?php
                            $req1 = GetCandidat($_SESSION["IdOffre"]);
                            while ($results = $req1->fetch()) {
                            ?>
                                <td><?= $results["CandidatMail"] ?></td>
                                <td><a href="#"><?= $results["cv"] ?></a><?php } ?></td> 
                        </tr>
                </tbody>
            <?php } ?> <?php } ?>
            </table>