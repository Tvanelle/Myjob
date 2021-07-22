<?php session_start();  ?>
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
</head>
<body>
    <section id="one" class="">
		<header class="navbar navbar-inverse navbar-fixed-top">
			<div class="row">
				<div class="col-sm-1">
					<div class="navbar-header">
						<div class="navbar-brand">MYJOB</div>
					</div>
				</div>
				<div class="col-sm-offset-3 col-sm-8">
					<ul class="nav navbar-nav">
						<li class="plusnav"><a href=""><span class="glyphicon glyphicon-plus"></span></a></li>
						<li><a href="" style="" class="lien">Accueil</a></li>
						<li><a href="" class="lien">Toutes les offres</a></li>
						<li><a href="" class="lien">Publier une offre</a></li>
						<li><a href="" class="lien">Nos recruteurs</a></li>
						<li><a href="" class="lien">Cvtheques</a></li>
						<li class="dropdown" id="creer"><a href="" data-toggle="dropdown" class="lien"><span class="glyphicon glyphicon-user"></span> creer<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href=""></span> Une page(Pour recruteurs)</a></li>
								<li><a href="">Un compte(Pour utilisateurs)</a></li>
							</ul>
						</li>
					</ul>
					
				</div>
			</div>
			
		</header>
	</section></br></br>


    <h2><center>Creer le formulaire de postulation de l'offre</center></h2>
    <form class="form col-sm-offset-1 col-sm-10" action=""></br>
					<div class="form-group">
						<label>Choisir l'offre:</label>
					    <select class="form-control">
					    	<option value="">Offre1</option>
					    	<option value="">Offre1</option>
					    	<option value="">Offre1</option>
					    </select>
					</div></br>
					<div class="form-group" id="champ" style="display: none;">
						<input type="text" name="" class="form-control">
					</div></br>
					<div id="allChamps"></div>
					<div class="row">
						<div class="col-sm-offset-1 col-sm-2">
					        <button class="btn btn-primary btn-lg"  id="addChamp" style="width: 200px;"><span class="glyphicon glyphicon-ok-sign"></span> Ajouter un champ</button>
					    </div>
					    <div class="col-sm-offset-3 col-sm-2">
					         <a href=""  class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-lock" style=""> Enlever le champs </span></a>
					    </div>
					</div></br>
					<div class="form-group">
					    <input type="hidden" name="IdRecrut" value="<?=$IdRecrut ?>" class="form-control" placeholder="Entrer la date de postulation"></input> 
					</div></br>
				
				</form>
				<script src="css/bootstrap/js/jquery-3.3.1.min.js"></script>
                 <script src="css/bootstrap/js/bootstrap-4.3.1.min.js"></script>
                 <script type="text/javascript">
                 	$(function(){
                 		var test=0;
                 		//alert("'fdjfvjvnj");
                 		$("#addChamp").click(function(e){
                 			e.preventDefault();
                 			test=1;
                 			alert(test);
                 			
                 		});
                 	});
                 </script>
