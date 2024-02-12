<?php
//Pour supprimer le jeu de la liste
$connexion = mysqli_connect("localhost", "root", "root", "evaluation_jimmy");

if (!$connexion) {
    die("Connexion échouée : " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $sql = "DELETE FROM jeuvideo WHERE id=$id";


    if (mysqli_query($connexion, $sql)) {

        include_once('header.php');
        include_once('liste.php');
        echo "Jeu supprimé avec succès.";
    } else {
        echo "Erreur : " . mysqli_error($connexion);
    }


    mysqli_close($connexion);
}
