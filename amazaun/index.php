<?php
require 'formulaire.php'; 
require 'articles.php'; 

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
    <title>Amazaune</title>
</head>
<body>
    <h1 class="titre">Ama<span class="bluetitle">zaune</span></h1>
    <hr>
    <section>
        <div class="bloc1"></div>
        <div class="bloc2">
            <div class="formulaire">
                <h1>Article disponibles:</h1>
                <?= getFormulaire($articles) ?>
            </div>
            <!-- Section pour afficher le panier -->
            <div class="panier">
                <h1>Votre Panier :</h1>
                <div>
                    <?php require 'panier.php'?>
                </div>
            </div>
        </div>
        <div class="bloc3"></div>
    </section>
</body>
</html>
