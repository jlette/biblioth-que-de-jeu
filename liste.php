<?php
// cette page génère la liste des jeux
include_once('header.php');
?>
<div class="container">
    <?php

    $connexion = mysqli_connect("localhost", "root", "root", "evaluation_jimmy");


    if (!$connexion) {
        die("Connexion échouée : " . mysqli_connect_error());
    }


    $sql = "SELECT * FROM jeuvideo";

    $resultat = mysqli_query($connexion, $sql);




    if (!$resultat) {
        die("Erreur : " . mysqli_error($connexion));
    }


    echo "<table class='table table-hover'>";
    echo " <thead class='thead-dark'><tr><th>Id</th><th>Titre</th><th>Editeur</th><th>Année de parution</th><th>Résumé</th><th>Type de public</th><th>Visuel</th><th>modifier</th><th>supprimer</th><th>Loueur</th></tr></thead>";

    foreach ($resultat as $row) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["titre"] . "</td>";
        echo "<td>" . $row["editeur"] . "</td>";
        echo "<td>" . $row["annee_de_parution"] . "</td>";
        echo "<td>" . $row["resumer"] . "</td>";
        echo "<td>" . $row["type_de_public"] . "</td>";
        echo "<td><img class='img-thumbnail w-50' src='./visuel/" . $row["visuel"] . "'></td>";
        echo "<td><form method='GET' action='modification.php'><input id='id' name='id' type='hidden' value=" . $row["id"] . "><button class='btn btn-primary' type='submit' >Modifier</button></form></td>";
        echo "<td><form method='GET' action='suppression.php'>
                <input type='hidden' id='id 'name='id'  value=" . $row["id"] . ">
                <button type='submit' class='btn btn-danger'>Supprimer</button>
              </form></td>";
        echo "<td> <form method='post'action='loueur.php' >";

        if (empty($row["loueur"])) {
            echo "  <input type='hidden' id='id 'name='id'  value=" . $row["id"] . ">
        <input type='text' id='loueur' name='loueur'>";
            echo "<button type='submit' class='btn btn-primary'>Valider</button></form>";
        } else {
            echo   $row["loueur"];
            echo "  <input type='hidden' id='id 'name='id'  value=" . $row["id"] . ">";
            echo "<button type='submit' class='btn btn-danger'>Retour</button></form>";
        }

        echo  "</td>";
        echo "</tr>";
        echo "</tr>";
    }

    echo "</table>";


    mysqli_close($connexion);

    ?>



</div>