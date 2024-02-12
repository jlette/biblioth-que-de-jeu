<?php
//script pour gérer l'emprun du jeu
$connexion = mysqli_connect("localhost", "root", "root", "evaluation_jimmy");
$loueur = $_POST['loueur'];
$id = $_POST['id'];
if (empty($loueur)) {

    $sql = "UPDATE jeuvideo SET loueur = NULL WHERE id ='$id'";

    if (mysqli_query($connexion, $sql)) {
        include_once('liste.php');
        echo "Le jeu n'est plus emprunter.";
    } else {
        echo "Erreur lors de l'attribution du nom " . mysqli_error($connexion);
    }
} else {

    $sql = "UPDATE jeuvideo SET loueur = '$loueur' WHERE id ='$id'";

    if (mysqli_query($connexion, $sql)) {
        include_once('liste.php');
        echo "Le jeu a été emprunter.";
    } else {
        echo "Erreur lors de l'attribution du nom " . mysqli_error($connexion);
    }
}
