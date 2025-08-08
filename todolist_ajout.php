<?php
session_start();


$produit = $_POST['produit'];

$temporaire = $_SESSION["produits"]; // Récupère les produits en session
$temporaire[] = $produit; // Je rajoute au tableau mon nouveau produit
$_SESSION["produits"] = $temporaire; // Et je remet les valeurs de mon tableau dans ma variable de session