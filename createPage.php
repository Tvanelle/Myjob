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
				<div class="alert alert-block alert-danger col-sm-offset-3 col-sm-6" id="Rmdc" style="display: ;color: white">
					<span class="help-block" id="helpRmdp" style="color: black"><?= $_GET["error"]; ?></span>
				</div>
			<?php  }  ?>
			<div class="col-sm-offset-3 col-sm-6" style="background-color: white;">
				<div class="row" style="background-color:#a94442;border-top-left-radius: 8px;border-top-right-radius: 8px;">
					<div class="col-sm-offset-3">
						<h2 style="color: white;"><span class=""></span> Creer une nouvelle page</h2>
					</div>
				</div>
				<div class="row" style="border: 1px solid whitesmoke"></br></br>
					<form class="form col-sm-offset-1 col-sm-10" method="POST" action="Modeles/createPage.php" enctype="multipart/form-data" autocomplete="off"></br>
						<div class="form-group" id="formRm">
							<input type="email" name="RecrutMail" class="input-lg form-control" placeholder="Entrer l'adresse mail ou numero de telephone de votre structure" required="" id="RecrutMail"></br>
							<div class="alert alert-block alert-danger" id="Rm" style="display: none;">
								<span class="help-block" id="helpRm">Vueillez entrer une adresse mail valide</span>
							</div>
						</div></br>
						<div class="form-group">
							<input type="text" name="RecrutName" class="input-lg form-control" placeholder="Entrer le nom votre structure" required="" id="RecrutName">
						</div></br>
						<div class="form-group">
							<input type="text" name="RecrutLieu" class="input-lg form-control" placeholder="Entrer le lieu ou est situé votre structure" required="" id="RecrutLieu">
						</div></br>
						<div class="form-group">
							<input type="text" name="RecrutAct" class="input-lg form-control" placeholder="Entrer l'activité principale de  votre structure" required="" id="RecrutAct">
						</div></br>
						<div class="form-group" id="formRmdp">
							<input type="password" name="RecrutMdp" class="input-lg form-control" placeholder="Entrer votre mot de passe" id="RecrutMdp"></br>
							<div class="alert alert-block alert-danger" id="Rmdp" style="display: none;">
								<span class="help-block" id="helpRmdp">Vueillez entrer un mot de passe contenant au moins 8 caracteres</span>
							</div>
						</div></br>
						<div class="form-group" id="formRmdc">
							<input type="password" name="RecrutMdpComfirm" class="input-lg form-control" placeholder="Confirmer le mot de passe" id="RecrutMdpComfirm"></br>
							<div class="alert alert-block alert-danger" id="Rmdc" style="display: none;">
								<span class="help-block" id="helpRmdp">Ce mot de passe est differents vueillez entrer un mot de passe identique</span>
							</div>
						</div></br>

						<div id="display">

						</div>
						<div class="row">
							<div class="col-sm-offset-3 col-sm-2">
								<button type="submit" class="btn btn-primary btn-lg" style="width: 200px;" id="" name="create"><span class="glyphicon glyphicon-ok-sign"></span> Creer</button>
							</div></br>
						</div></br>
						<div class="row">
							<div class="col-sm-offset-3 col-sm-9">
								<span class="glyphicon glyphicon-lock" style="color: green"></span> <a href="index.php?page=connectPage" style="font-size: 16px;"> Se connecter</a>
							</div>
						</div></br>
						<div class="row">
							<div class="col-sm-offset-3 col-sm-9">
								<a href="" style="font-size: 16px;">Lire les conditions d'utilisations</a><span class="glyphicon glyphicon"></span>
							</div>
						</div>

					</form>
				</div></br></br>
			</div>
	</section></br></br>
	<script src="Vues/css/bootstrap/js/jquery-3.3.1.min.js"></script>
	<script src="Vues/js/createPage.js"></script>
	<script src="Vues/css/bootstrap/js/bootstrap-4.3.1.min.js"></script>