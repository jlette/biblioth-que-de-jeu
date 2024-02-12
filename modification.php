<?php
//Pour afficher le formulaire de modification et pouvoir modifier.
include_once('header.php');



$connexion = mysqli_connect("localhost", "root", "root", "evaluation_jimmy");


if (!$connexion) {
    die("Connexion échouée : " . mysqli_connect_error());
}


$sql = "SELECT * FROM jeuvideo WHERE id=" . $_GET['id'] . "";


$resultat = mysqli_query($connexion, $sql);


if (!$resultat) {
    die("Erreur : " . mysqli_error($connexion));
}


?>

<?php if (mysqli_num_rows($resultat) > 0) {
    $ligne = mysqli_fetch_assoc($resultat); ?>
    <h1 class="text-center">Modification</h1>
    <div class="container  p-3">
        <form method="post" action="recuperation.php" enctype="multipart/form-data">
            <input id="id" name="id" type="hidden" value=<?php echo ($ligne['id']); ?>>
            <div class="form-group row">
                <label for="titre" class="col-sm-2 col-form-label">Titre du jeu:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="titre" name="titre" placeholder="Entrez le nom du jeu" value=<?php echo ($ligne['titre']); ?>>
                </div>
            </div>

            <div class="form-group row">
                <label for="editeur" class="col-sm-2 col-form-label">Éditeur:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="editeur" name="editeur" placeholder="Entrez le nom de l'éditeur" value=<?php echo ($ligne['editeur']); ?>>
                </div>
            </div>
            <div class="form-group row">

                <label for="annee_de_parution" class="col-sm-2 col-form-label">Année de parution</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="annee_de_parution" name="annee_de_parution" value=<?php echo ($ligne['annee_de_parution']); ?>>
                </div>
            </div>
            <div class="form-group row">
                <label for="resumer" class="col-sm-2 col-form-label">Résumer</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="resumer" name="resumer" rows="3"><?php echo ($ligne['resumer']); ?></textarea>
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
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </div>
        </form>
    <?php } ?>
    </div>
    </body>


    </html>