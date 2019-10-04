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

function accueil() {
    include("views/accueil.php");
}

function tachesModifierController() {
    // recuperer les informations du film
    $nom = getTache($_GET["id"]);


    // afficher formulaire
    include("views/modifier.php");
}

function modifierSubmitController() {
    // mettre a jour le film
    modifierTache($_POST["id"], $_POST["titre"]);
    // redirection vers liste 
    header("location:listeTaches.php");
    exit();

}

function tacheSupprimer() {
    // supprimer le film
    supprimertache($_GET["id"]);
    // redirection
    header("location:listeTaches.php");
    exit();
}
