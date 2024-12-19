<?php
require 'formulaire.php'; // Charge la fonction getFormulaire
require 'articles.php'; // Charge le tableau des articles

// Initialisation des quantités pour chaque article
$quantite = [
    "Nike Air AF1" => $_POST['quantite_Nike_Air_AF1'] ?? 0,
    "T-shirt" => $_POST['quantite_T-shirt'] ?? 0,
    "Pantalon" => $_POST['quantite_Pantalon'] ?? 0
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Amazaun</title>
</head>
<body>
    <div class="bloc2">
        <!-- Formulaire pour sélectionner les articles -->
        <div>
            <?= getFormulaire($articles) ?>
        </div>
        <!-- Section pour afficher le panier -->
        <div>
            <h1>Votre Panier :</h1>
            <div>
                <?php require 'panier.php'?>
            </div>
        </div>
    </div>
</body>
</html>
