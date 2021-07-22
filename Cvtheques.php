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
            <div class="col-sm-offset-3 col-sm-8"></br>
                <h5 class="" style="font-size: 20px;"><span style="color: white">Laisser votre cv pour augmenter vos chance d'etre reperer par des entreprise c'est facile</h5></br></br>
            </div>
        </div>
        <div class="row">
            <?php if (isset($IdCandidat) and !empty($IdCandidat)) { ?>
                <div class="col-sm-offset-2 col-sm-8"><button class="btn btn-success btn-lg" style="width: 800px;box-shadow: 1px 1px 2px 2px;"><?= "<a href=index.php?page=leaveCv&IdCandidat=$IdCandidat >"; ?> LAISSER VOTRE CV</a></button></div>

        </div>
    <?php } else if (isset($IdRecrut) and !empty($IdRecrut)) { ?>
        <div class="col-sm-offset-2 col-sm-8"><button class="btn btn-success btn-lg" style="width: 800px;box-shadow: 1px 1px 2px 2px;"><?= "<a href=index.php?page=leaveCv&IdCandidat=$IdRecrut >"; ?> LAISSER VOTRE CV</a></button></div>

    </div>
<?php } else { ?>
    <div class="col-sm-offset-2 col-sm-8"><button href="index.php" class="btn btn-success btn-lg" style="width: 800px;box-shadow: 1px 1px 2px 2px;"><a href="createCompte"> LAISSER VOTRE CV</a></button></div>
<?php } ?>
</div>
</div>
</div>
</div></br></br>
<section class="col-sm-offset-1 col-sm-10 ">
    <caption>
        <h2>
            <center>Listes des candidats</center>
        </h2>
    </caption></br></br>
    <table class="table  table-bordered">
        <thead>
            <tr class="" style="background-color: whitesmoke;border: 0px;color: black;">
                <th>N° </th>
                <th>Date</th>
                <th>Cv</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($result = $req->fetch()) {

            ?>
                <tr class="">
                    <td><?= $result["IdCv"]; ?></td>
                    <td><?= $result["DateSouscrip"] ?></td>
                    <td><a href="#"><?= $result["Cv"] ?></a></td>
                </tr>
        </tbody>
    <?php } ?>
    </table>

    <script src="Vues/css/bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="Vues/css/bootstrap/js/bootstrap-4.3.1.min.js"></script>