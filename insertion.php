<?php

$connexion = new mysqli("localhost", "root", "root", "evaluation_jimmy");


if ($connexion->connect_error) {
    die("Connexion échoué: " . $connexion->connect_error);
}


$titre = $_POST['titre'];
$editeur = $_POST['editeur'];
$annee = $_POST['annee_de_parution'];
$resumer = $_POST['resumer'];
$public = $_POST['type_de_public'];
$visuel = $_FILES['visuel']['name'];



$sql = "INSERT INTO jeuvideo (titre, editeur, annee_de_parution, resumer, type_de_public, visuel) VALUES ('$titre', '$editeur', '$annee', '$resumer', '$public','$visuel')";

if ($connexion->query($sql) === TRUE) {
    include_once('header.php');
    echo "Le jeu a été ajouté avec succès à la base de données";
} else {
    echo "Erreur : " . $sql . "<br>" . $connexion->error;
}


$connexion->close();
