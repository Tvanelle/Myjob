<?php
$CandidatMail = $_POST["mails"];
$DateAlert = date('y,m,d:h,m');
try {
    $bdd = new PDO('mysql:host=localhost;dbname=myjob;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {
    die("Erreur lors de la connexion au serveur");
}
$req = $bdd->prepare("INSERT INTO alertmail(CandidatMail,DateAlertDateMsg)VALUES(?,?)");
$req->execute(array($CandidatMail, $DateAlert));
echo "<div></div>";
echo "<center><div style=font-size:20px;background-color:blue;color:white;width:800px;height:85px;>Votre alerte a bien ete cree<div></center>";
