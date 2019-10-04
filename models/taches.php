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

function getTache($id) {
    global$bdd;
    $sql = "
        SELECT id, titre
        FROM taches
        WHERE id = $id 
    ";

    $resultats = mysqli_query($bdd, $sql);


    return mysqli_fetch_assoc($resultats);
}

// Fonction pour afficher les actualites

function listeTaches() {
    global $bdd;
    $sql = "
        SELECT id, titre
        FROM taches
    ";
    $resultats = mysqli_query($bdd, $sql);
    return $resultats;
}

function modifierTache($id, $nom) {
    global$bdd;
    $sql = "
        UPDATE taches
        SET titre = '$nom'
        WHERE id = $id 
    ";
    $resultats = mysqli_query($bdd, $sql);
    return $resultats;
}

function supprimerTache($id) {
    global$bdd;
    $sql = "
        DELETE FROM taches
        WHERE id = $id 
    ";
    $resultats = mysqli_query($bdd, $sql);
    return $resultats;
}
