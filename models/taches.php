<?php

// Modification de la base de donnee

include("utils/bdd.php");

// Ajout d'une nouvelle taches dans la base de donnee
function ajoutTache($taches) {
    global $bdd;
    $sql = "
    INSERT INTO taches
        (titre, priorite)
    VALUES
    ('". $taches["titre"] ."','". $taches["priorite"] ."')
    ";

    mysqli_query($bdd, $sql);
}

// Fonction pour afficher les actualites

function listeTaches() {
    global $bdd;
    $sql = "
        SELECT titre
        FROM taches
    ";
    $resultats = mysqli_query($bdd, $sql);
    return $resultats;
}
