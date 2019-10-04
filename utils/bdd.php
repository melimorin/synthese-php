<?php

$host = "localhost";
$utilisateur = "root";

$bdd = mysqli_connect($host, $utilisateur);
mysqli_select_db($bdd, "todo_app");
