<?php

// Appelle les fonction de modification du model et retourne les vues (html)
include("models/taches.php");
// Array qui prend l'info du formulaire
function ajoutTachesController() {
    $taches = array(
        "titre" => $_POST["titre"],
        "priorite" => $_POST["priorite"],
    );
// Appel de la fonction du model pour sauvegarder dans la bd
    ajoutTache($taches);

    // Retourne la page html de succes
    include("views/ajoutSucces.php");
}

function ajoutController() {
    include("views/ajoutTaches.php");
}

function listeController() {
    $todos = listeTaches();
    include("views/listeTaches.php");
}
