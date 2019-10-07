<?php
session_start();
include("utilisateurs/utils/bdd.php");

//$_POST["username"]
//$_POST["password"]

function loginModels() {
    global $bdd;
    if (isset($_POST["username"]) == false) {
        header("location:login.php");
        exit();
    }
    
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    
    $sql = "
    SELECT *
    FROM utilisateurs
    WHERE
        prenom = '" . $username . "' AND
        motdepasse = '" . $password . "';
    ";
    
    $resultats = mysqli_query($bdd, $sql);
    
    if (!$resultats) {
        echo mysqli_error($bdd);
        exit();
    }
    
    if (mysqli_num_rows($resultats) > 0) {
    
        $utilisateur = mysqli_fetch_assoc($resultats);
    
    
    
        header("location:accueil.php");
        $_SESSION["estConnecte"] = true;
        $_SESSION["nom"] = $utilisateur["nom"];
        $_SESSION["prenom"] = $utilisateur["prenom"];
    
    } else {
    
        echo "Erreur de connexion";
        $_SESSION["estConnecte"] = false;
    
    }
    
    echo $sql;
}
