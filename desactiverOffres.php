<?php 
echo "$IdOffre";
include 'Modeles/desactiverOffres.php'; 
$reqx=UpdateOffres($IdOffre);
?>
<div class="alert alert-block alert-danger col-sm-offset-3 col-sm-6" id="Rmdc" style="display: ;color: white">
<span class="help-block" id="helpRmdp" style="color: black">L'offre a bien eté dessactiver</span>
</div>            