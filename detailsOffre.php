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
     #imgBan {
       background: url('Vues/Images/imgs/img1.jpg');
       background-size: cover;
       height: 380px;
       margin-top: -4.4%;
     }

     #name {
       font-size: 20px;
       text-transform: uppercase;
     }
   </style>
 </head>

 <body>
   <?php
    if (!empty($_GET["IdOffre"]) and isset($_GET["IdOffre"])) {
      $_SESSION["IdOffre"] = $_GET["IdOffre"];
      $IdOffre = $_SESSION["IdOffre"];
      while ($result = $newRequest->fetch()) {
        $_SESSION["SecteurOffre"] = $result["SecteurOffre"];
        $PosteOffre = $result["PosteOffre"];
        echo $IdOffre;
    ?>
       <div class="row" id="imgBan">
         <div class="">
           <center>
             <h2 style="color: white"><?= $result["PosteOffre"] ?></h2>
           </center>
         </div>
       </div></br>

       <center>
         <h2><u> Voici les details de l'offre</u></h2>
       </center></br></br>
       <div class="container-fluid">
         <div class="row">
           <div class="col-sm-8">
             <div class="jumbotron">
               <div class="Profil">
                 <h4><b>Profil de l'offre:</b></h4>
                 <p style="font-size: 16px;"><?= $result["ProfilOffre"] ?></p>
               </div>

               <div class="Profil">
                 <h4><b>Mission de l'offre:</b></h4>
                 <p style="font-size: 16px;"><?= $result["MissionOffre"] ?></p>
               </div>
               <div class="Profil">
                 <h4><b>Salaire de l'offre:</b></h4>
                 <p style="font-size: 16px;"><?= $result["Salaire"] ?></p>
               </div>
               <div class="Profil">
                 <h4><b>Lieu:</b></h4>
                 <p style="font-size: 16px;"><?= $result["LieuOffre"] ?></p>
               </div>
               <div class="Profil">
                 <h4><b>Poste:</b></h4>
                 <p style="font-size: 16px;"><?= $result["PosteOffre"] ?></p>
               </div>
               <div class="Profil">
                 <h4><b>Type contrat:</b></h4>
                 <p style="font-size: 16px;"><?= $result["TypeContrat"] ?></p>
               </div>

             </div>
           </div><?php }
              } ?>
       <div class="col-sm-3" style="position: relative;">
         <form class="form" method="POST" action="index.php?page=Postuler" enctype="multipart/form-data">
           <h3>Postuler a cette offre</h3></br>
           <div class="form-group">
             <input type="email" name="CandidatMail" class="input-lg form-control" placeholder="Entrer votre E-mail" required="">
           </div>
           <div class="form-group">
             <input type="file" name="cv" class="input-lg form-control" placeholder="A" required="">
             <span class="help-block" style="color: red">Les extensions autorisésont:doc,docx,pdf.La taille maximum des fichiers est 2Mo</span>
           </div>
           <div class="form-group">
             <input type="file" cols="5" rows="10" name="LettreMotive" placeholder="Laisser une lettre de motivation" required=""></textarea>
           </div>
           <div class="form-group">
             <input type="hidden" name="IdOffre" value=<?= $IdOffre ?>></textarea>
           </div>
           <button class="btn btn-danger btn-lg"> Je postule</button></br></br>
           <?php if (isset($_GET["error"]) and !empty($_GET["error"])) {
            ?>
             <div class="alert alert-block alert-danger" id="Rmdp">
               <span class="help-block" id="helpRmdp" style="color:black"><?= $_GET["error"]; ?></span>
             </div><?php } ?>
         </form>
       </div>
         </div>
       </div>
       <div>
         <h3></h3>
         <section class="four">
           <div class="row">
             <div class="col-sm-offset-4 col-sm-5">
               <h3 style="text-transform: uppercase;">Les offres similaires</h3> </br></br>
             </div>

             <!--Requette pour recuperer les infos concernant l'offre -->

             <?php
              $dateN = time();
              while ($result = $newReq->fetch()) {
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





               </div></br></br> <?php } ?>
         </section></br></br>
         <script src="Vues/css/bootstrap/js/jquery-3.3.1.min.js"></script>
         <script src="Vues/css/bootstrap/js/bootstrap-4.3.1.min.js"></script>