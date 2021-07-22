<!DOCTYPE html>
<html>

<head>
    <style type="text/css">
        #img-baniereOffre {
            background: url('Vues/Images/imgs/img1.jpg');
            background-size: cover;
            height: 280px;
            margin-top: -4.4%;
        }

        #name {
            font-size: 20px;
            text-transform: uppercase;
        }
    </style>
</head>

<body>

    <!--<?php //include('menuHome.php');
        ?> -->
    <div class="col-sm-offset-4 col-sm-8">
        <h3 class="" style="font-size: 22px;"><span>RECHERCHER</span> <span style="color: rgb(0,226,102)"><b>UNE OFFRE D'EMPLOI</b></span> </h3></br></br>
    </div>
    <div class="row">
        <form method="POST" action="index.php?page=searchOffrePlus">
            <div class=" col-sm-offset-1 col-lg-4">
                <div class="form">
                    <div class="form-group">
                        <input type="text" name="metier" class="input-lg form-control" placeholder="Saisir un metier ou mot clé.Ex:Developpeur">
                    </div>
                </div>
            </div>
            <div class="col-sm-offset-1 col-lg-4">
                <div class="form">
                    <div class="form-group">
                        <input type="text" name="secteur" class="input-lg form-control" placeholder="Saisir un secteur ou domaine">
                    </div>
                </div>
            </div>
            <div class="col-sm-offset-1 col-lg-4">
                <div class="form">
                    <div class="form-group">
                        <input type="text" name="lieu" class="input-lg form-control" placeholder="Saisir le lieu ou ville">
                    </div>
                </div>
            </div>
            <div class="col-sm-offset-1 col-lg-4">
                <div class="form">
                    <div class="form-group">
                        <input type="text" name="salaire" class="input-lg form-control" placeholder="Saisir le salaire">
                    </div>
                </div>
            </div>
            <div class="col-sm-offset-1 col-lg-4">
                <div class="form">
                    <div class="form-group">
                        <label>Type d'emploi:</label>
                        <select name="TypeEmploi" class="form-control">
                            <option value=""></option>
                            <option value="Temps plein">Temps plein</option>
                            <option value="Temps partiel">Temps partiel</option>
                        </select>
                    </div>
                </div>
            </div></br>
            <div class="col-sm-offset-1 col-lg-4">
                <div class="form">
                    <div class="form-group">
                        <label>Type de contrat:</label>
                        <select name="TypeContrat" class="form-control">
                            <option value=""></option>
                            <option value="CDD">CDD</option>
                            <option value="CDI">CDI</option>
                        </select>
                    </div>
                </div>
            </div></br>
            </br></br></br>
            <div class="col-lg-offset-5 ">
                <button class="btn btn-success btn-lg" type="submit" name="search"><span class="glyphicon glyphicon-search">Rechercher</span> </button>
            </div>
        </form></br>
    </div>
    </div>