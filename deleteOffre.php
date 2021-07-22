<?php 
echo "$IdOffre";
include 'Modeles/DeleteOffre.php'; 
$reqx=DeleteOffres($IdOffre);
?>
<div class="alert alert-block alert-danger col-sm-offset-3 col-sm-6" id="Rmdc" style="display: ;color: white">
<span class="help-block" id="helpRmdp" style="color: black">L'offre a bien eté Supprimer</span>
</div>            