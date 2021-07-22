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
    <?php
    if (isset($_GET["IdCandidat"]) or isset($_GET["IdCandidat"])) {
        $_SESSION["IdCandidat"] = $_GET["IdCandidat"];
        $IdCandidat = $_SESSION["IdCandidat"];
        echo $IdCandidat;

    ?>
        <section class="">
            <div class="row"></br></br></br></br>
                <div class="col-sm-offset-3 col-sm-6" style="background-color: white;">
                    <h3>
                        <center>Voulez vous vraiment vous deconnecter?</center>
                    </h3>
                    <div class="row" style="border: 1px solid whitesmoke"></br></br>

                        <div class="row">
                            <div class="col-sm-offset-3 col-sm-2">
                                <button type="submit" class="btn btn-primary btn-lg" style="width: 200px;" id="" name="create"><span class="glyphicon glyphicon-ok-sign"></span><a style="color: white" href="Modeles/deconnectPage.php?IdCandidat=192" <?= $IdCandidat ?>>Se déconnecter</a> </button></br></br>
                            </div><?php } ?>
        </section></br></br></br>
</body>

</html>