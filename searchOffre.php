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
      #imgBan{
        background: url('Vues/Images/imgs/img1.jpg');
  background-size: cover;
  height: 380px;
  margin-top: -4.4%;
      }
    </style>
</head>
<body>
  <section class="four">
      <div class="row">
        <div class="col-sm-offset-4 col-sm-5"><h3 style="text-transform: uppercase;"><span class="glyphicon glyphicon-alarm"></span> Les offres publiées recemment</h3> </br></br></div>

            <!--Requette pour recuperer les infos concernant l'offre -->

             <?php  
             //include("Modeles/searchOffre.php");
              $newReq1=GetResult();
                while($result=$newReq1->fetch()){   
                    $_SESSION["IdRecrut"]=$result["IdRecrut"] ;
                    $_SESSION["IdOffre"]=$result["IdOffre"] ;
                   $IdRecruts = $_SESSION["IdRecrut"];
                   echo "$IdRecruts";
                   ?>

        <div class="col-sm-offset-1 col-sm-10" style="box-shadow: 1px 1px 2px 2px;margin-bottom: 3%;"></br>
          <div class="row">
            <div class="col-sm-1"><img src="Vues/Images/imgs/OIP (1).JFIF" style="width: 50px;height: 50px;border-radius: 50px;"></div>
            <div class="col-sm-10" id="ese">
                        <?php 
                        $newReq2=GetNameRecrut($IdRecruts);
                        while($resultat=$newReq2->fetch()){?>
              <?= "<a style=font-size: 20px;text-transform: uppercase; href=Vues/personalPage.php?IdRecrut=".$_SESSION["IdRecrut"].">"; ?> <?= $resultat["RecrutName"]  ?><?php } ?></a><a href="" style="font-size: 20px;"> (Il y'a)</a></br>
              <span class="glyphicon glyphicon-user"><i><?=$result["LieuOffre"] ?> </i></span>   <span class="glyphicon glyphicon-calendar"><i><?=$result["DatePoste"] ?> </i></span>  <span class="glyphicon glyphicon-pencil"><i><?=$result["TypeContrat"] ?> </i></span>
            </div>
          </div> 
          <div class="row"></br>
            <div class="col-sm-offset-1 col-sm-8"><p style="font-size: 17px;"><span class="badge" style="background-color: red;"><?=$result["NbrePoste"] ?></span> <?= "<a href=index.php?page=detailsOffre&amp;IdOffre=".$_SESSION["IdOffre"].">"; ?> <?=$result["PosteOffre"] ?></a> </p> </div>
          </div>
          <div class="row"></br>
            <div class="col-sm-8"><button class="btn btn-success btn-lg" style="background-color: #333;border: 0px;" href=""><?= "<a href=index.php?page=detailsOffre&amp;IdOffre=".$_SESSION["IdOffre"]." style=color:white>"; ?>Voir les  details</a></button> </div></br>
          </div></br>
        </div>
           
           <?php 
           $newReq3=GetOffresNbPerso($IdRecruts);
           $reponse=$newReq3->rowCount();
           if ($reponse>1) {
              
           ?>
              
            <div class="row"></br></br></br>
                    <div class="col-sm-5"><center><button class="btn btn-danger btn-lg" style=""><?=$reponse?> Offres disponnibles</button></center>  </div>
                </div></br><?php } ?><?php } ?>
       
            
      </div></br></br>
    </section></br></br>