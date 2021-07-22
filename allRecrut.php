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
            <div class="col-sm-offset-4 col-sm-8">
                <h3 class="" style="font-size: 22px;"><span style="color: white">RECHERCHER</span> <span style="color: rgb(0,226,102)"><b>UNE RECRUTEUR</b></span> </h3></br></br>
            </div>
        </div>
        <div class="row">
            <form method="POST" action="searchRecrut">
                <div class="col-lg-offset-3 col-lg-5">
                    <div class="form">
                        <div class="form-group">
                            <input type="text" name="RecrutName" class="input-lg form-control" placeholder="Saisir le nom dun recruteur ou un domaine ">
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <button class="btn btn-success btn-lg" type="submit" name="search"><span class="glyphicon glyphicon-search"></span> </button>
                </div>
            </form>
        </div>
    </div></br></br>
    <section class="col-sm-offset-1 col-sm-10 ">
        <caption>
            <h2>
                <center>Voir toutes les entreprises</center>
            </h2>
        </caption></br></br>
        <table class="table  table-bordered">
            <thead>
                <tr class="" style="background-color: whitesmoke;border: 0px;color: black;">
                    <th>Nom du recruteur</th>
                    <th>Activité principale</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($result = $new_reqs->fetch()) {
                    //echo  $result["IdRecrut"];
                ?>
                    <tr class="">
                        <td><img src="Vues/Images/imgs/profil.png" style="width: 40px;height: 40px;border-radius: 50px;"> <?= $result["RecrutName"] ?></td>
                        <td><?= $result["RecrutActivit"] ?></td>
                    </tr>
            </tbody>
        <?php } ?>
        </table>
        <script src="Vues/css/bootstrap/dist/js/jquery-3.3.1.min.js"></script>
    <script src="Vues/css/bootstrap/dist/js/bootstrap-4.3.1.min.js"></script>