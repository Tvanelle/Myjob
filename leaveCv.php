
<div class="col-sm-offset-2 col-sm-6">

    <div class="modal-header">

        <h4 class="modal-title">
            <center>LAISSER VOTRE CV</center>
        </h4>
    </div>
    <div class="modal-body">
        <?php if (isset($_GET["error"]) and !empty($_GET["error"])) { ?>
            <div class="alert alert-block alert-success col-sm-offset-1 col-sm-6" id="Rmdc" style="display: ;color: white">
                <span class="help-block" id="helpRmdp" style="color: black"><?= $_GET["error"]; ?></span>
            </div>
        <?php  }  ?>
        <form class="form" method="POST" action="Modeles/Cvtheques.php" enctype="multipart/form-data">
            <div class="form-group">
                <input type="email" name="CandidatMail" class="input-lg form-control" placeholder="Entrer votre E-mail">
            </div>
            <div class="form-group">
                <label>Importer votre Cv:</label>
                <input type="file" name="cv" class="input-lg form-control" placeholder="A">
            </div>
            <div class="form-group">
                <label>Importer votre Lettre de motivation:</label>
                <input type="file" class="form-control" cols="5" rows="10" name="LettreMotive" placeholder="Laisser une lettre de motivation"></textarea>
                <input type="hidden" value= <?= $IdCandidat ?> name="IdCandidat">
            </div>
            <button class="btn btn-primary btn-lg"> Ajouter</button>
        </form>
    </div>

</div>
</div>