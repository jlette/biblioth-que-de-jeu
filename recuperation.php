<?php
//script pour mettre à jour le jeu dans la liste
$id = $_POST["id"];
$titre = $_POST["titre"];
$editeur = $_POST["editeur"];
$annee_de_parution = $_POST["annee_de_parution"];
$resumer = $_POST["resumer"];
$type_de_public = $_POST["type_de_public"];
$visuel = $_FILES['visuel']['name'];




$connexion = mysqli_connect("localhost", "root", "root", "evaluation_jimmy");


if (!$connexion) {
    die("Connexion échouée: " . mysqli_connect_error());
}


$sql = "UPDATE jeuvideo SET titre='$titre', editeur='$editeur', annee_de_parution='$annee_de_parution', resumer='$resumer', type_de_public='$type_de_public', visuel='$visuel' WHERE id='$id'";
if (mysqli_query($connexion, $sql)) {
    include_once('header.php');
    echo "Le jeu vidéo a été mis à jour avec succès.";
} else {
    echo "Erreur lors de la mise à jour du jeu vidéo: " . mysqli_error($connexion);
}


mysqli_close($connexion);
