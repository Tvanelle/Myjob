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
        body {
            background-color: whitesmoke;
        }
    </style>
</head>

<body>

    <section class="">
        <div class="row"></br></br></br></br>
            <?php if (isset($_GET["error"]) and !empty($_GET["error"])) {

            ?>
                <div class="alert alert-block alert-danger" id="Rmdc">
                    <span class="help-block" id="helpRmdp"><?= $_GET["error"]; ?></span>
                </div>
            <?php  }  ?>
            <div class="col-sm-offset-3 col-sm-6" style="background-color: white;">
                <div class="row" style="background-color:#000;border-top-left-radius: 8px;border-top-right-radius: 8px;">
                    <div class="col-sm-offset-3">
                        <h2 style="color: white;"><span class=""></span> Se connecter a votre compte</h2>
                    </div>
                </div>
                <div class="row" style="border: 1px solid whitesmoke"></br></br>
                    <form class="form col-sm-offset-1 col-sm-10" method="POST" action="Modeles/connectCompte.php" enctype="multipart/form-data"></br>
                        <div class="form-group" id="formRm">
                            <input type="email" name="CandidatMail" class="input-lg form-control" placeholder="Entrer l'adresse mail ou numero de telephone de votre structure" required="" id="CandidatMail"></br>
                        </div></br>
                        <div class="form-group">
                            <input type="text" name="CandidatPwd" class="input-lg form-control" placeholder="Entrer votre mot de passse" required="" id="CandidatPwd">
                        </div></br>

                        <div class="row">
                            <div class="col-sm-offset-3 col-sm-2">
                                <button type="submit" class="btn btn-primary btn-lg" style="width: 200px;" id="" name="create"><span class="glyphicon glyphicon-ok-sign"></span> Se connecter</button>
                            </div></br>
                        </div></br>
                        <div class="row">
                            <div class="col-sm-offset-3 col-sm-9">
                                <span class="glyphicon glyphicon-lock" style="color: green"></span> <a href="index.php?page=createCompte" style="font-size: 16px;"> Creer un compte</a>
                            </div>
                        </div></br>
                        <div class="row">
                            <div class="col-sm-offset-3 col-sm-9">
                                <a href="" style="font-size: 16px;">Lire les conditions d'utilisations</a><span class="glyphicon glyphicon"></span></br></br>
                            </div>
                        </div>

                    </form>
    </section></br></br></br>
</body>

</html>