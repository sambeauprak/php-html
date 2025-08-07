<?php
// À partir de maintenant, tu vas m'enregistrer les infos que je veux
session_start();

$_SESSION["prenom"] = "Karim";

// print_r($_SESSION);

echo $_SESSION["prenom"];
