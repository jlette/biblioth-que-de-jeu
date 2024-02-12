<?php
//page d'accueil du formulaire pour créer un jeu.
include_once('header.php');


?>
<div class="container  p-3">
    <h1 class="text-center">Ajouter un jeu</h1>
    <form method="post" action="insertion.php" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="titre" class="col-sm-2 col-form-label">Titre du jeu:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="titre" name="titre" placeholder="Entrez le nom du jeu">
            </div>
        </div>
        <div class="form-group row">
            <label for="editeur" class="col-sm-2 col-form-label">Éditeur:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="editeur" name="editeur" placeholder="Entrez le nom de l'éditeur">
            </div>
        </div>
        <div class="form-group row">

            <label for="annee_de_parution" class="col-sm-2 col-form-label">Année de parution</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="annee_de_parution" name="annee_de_parution">
            </div>
        </div>
        <div class="form-group row">
            <label for="resumer" class="col-sm-2 col-form-label">Résumer</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="resumer" name="resumer" rows="3"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="type_de_public" class="col-sm-2 col-form-label">Type de public:</label>
            <div class="col-sm-10">
                <select class="form-control" id="type_de_public" name="type_de_public">
                    <option>+3</option>
                    <option>+7</option>
                    <option>+12</option>
                    <option>+16</option>
                    <option>+18</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="customFile" class="col-sm-2 col-form-label">Choix du visuel</label>
            <div class="col-sm-10">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" accept="image/*" id="visuel" name="visuel">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Créer</button>
            </div>
    </form>
</div>
</body>


</html>