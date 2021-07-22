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
			<?php if (isset($_GET["error"]) and !empty($_GET["error"])) { ?>
				<div class="alert alert-block alert-success col-sm-offset-3 col-sm-6" id="Rmdc" style="display: ;color: white">
					<span class="help-block" id="helpRmdp" style="color: black;text-align:center"><?= $_GET["error"]; ?></span>
				</div>
			<?php  }  ?>
			<div class="col-sm-offset-3 col-sm-6" style="background-color: white;">
				<div class="row" style="background-color: #333;border-top-left-radius: 8px;border-top-right-radius: 8px;">
					<div class="col-sm-offset-3">
						<h2 style="color: white;"><span class=""></span> Publier une nouvelle offre</h2>
					</div>
				</div>
				<div class="row" style="border: 1px solid whitesmoke;box-shadow: 6px 6px 20px -4px black;"></br></br>
					<form class="form col-sm-offset-1 col-sm-10" action="Modeles/postOffre.php" method="POST" enctype="multipart/form-data"  autocomplete="off"></br>
						<div class="form-group">
							<textarea type="text" name="ProfilOffre" class=" form-control" placeholder="Decrivez le profil visé par votre offre"></textarea>
						</div></br>
						<div class="form-group">
							<textarea type="text" name="MissionOffre" class=" form-control" placeholder="Quels sont les missions a accomplir par le candidat?"></textarea>
						</div></br>
						<div class="form-group">
							<input type="text" name="SecteurOffre" class=" form-control" placeholder="Entrer le domaine d'activité de votre offre">
						</div></br>
						<div class="form-group">
							<input type="text" name="LieuOffre" class=" form-control" placeholder="Entrer le lieu de realisation de votre offre">
						</div></br>
						<div class="form-group">
							<input type="number" name="Salaire" class=" form-control" placeholder="Entrer le salaire propose">
						</div></br>
						<div class="form-group">
							<label>Type d'emploi:</label>
							<select name="TypeEmploi" class="form-control">
								<option value="Temps plein">Temps plein</option>
								<option value="Temps partiel">Temps partiel</option>
							</select>
						</div></br>
						<div class="form-group">
							<label>Type de contrat:</label>
							<select name="TypeContrat" class="form-control">
								<option value="CDD">CDD</option>
								<option value="CDI">CDI</option>
							</select>
						</div></br>
						<div class="form-group">
							<input type="text" name="PosteOffre" cols="10" class="form-control" placeholder="Quel  est le poste proposé par l'offre"></input>
						</div></br>
						<div class="form-group">
							<input type="text" name="NbrePoste" cols="10" class="form-control" placeholder="Entrer le nombre de poste disponnibles"></input>
						</div></br>
						<div class="form-group">
							<label>Entrer la date d'expiration de l'offre:</label>
							<input type="date" name="DateFinValid" cols="10" class="form-control" placeholder=""></input>
						</div></br>
						<div class="form-group">
							<label>Entrer la date de publication</label>
							<input type="date" name="DatePoste" cols="10" class="form-control" placeholder=""></input>
						</div></br>
						<div class="form-group">
							<label>Telecharger le fichier numerique de l'offre:</label>
							<input type="file" name="FicheNum" class="form-control" placeholder=""></input>
						</div></br>
						<div class="form-group">
							<input type="hidden" name="IdRecrut" class="form-control" placeholder="Entrer la date de postulation" value=<?= $_GET["IdRecrut"] ?>></input>
						</div></br>
						<div class="row">
							<div class="col-sm-offset-1 col-sm-2">
								<button class="btn btn-primary btn-lg" style="width: 200px;"><span class="glyphicon glyphicon-ok-sign" id="post"></span> Creer</button>
							</div>

						</div></br>


					</form>
				</div></br></br>
			</div>
	</section></br></br>
	<script src="Vues/css/bootstrap/js/jquery-3.3.1.min.js"></script>
	<script src="Vues/css/bootstrap/js/bootstrap-4.3.1.min.js"></script>