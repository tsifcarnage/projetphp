<?php 
    require 'formulaire.php';
    require 'articles.php';
    $nikeq=isset($_POST['quantite_Nike_Air_AF1']) && !empty($_POST['quantite_Nike_Air_AF1'])?$_POST['quantite_Nike_Air_AF1']:'';
    $shirtq=isset($_POST['quantite_T-shirt']) && !empty($_POST['quantite_T-shirt'])?$_POST['quantite_T-shirt']:'';
    $pantq=isset($_POST['quantite_Pantalon']) && !empty($_POST['quantite_Pantalon'])?$_POST['quantite_Pantalon']:'';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Amazaun</title>
</head>

<body>
    <div class="bloc2">
        <div>
            <?=getFormulaire($articles)?>
        </div>
        <div>
            <h1>Votre Panier:</h1>
            <?php
                $resultat=0;
                if($nikeq>0 &&$shirtq>0 && $pantq>0 ){
    
                }
            ?>
            <h4>Montant de la commande:0€</h4>
            
        </div>
        
    </div>
    

    
</body>
</html>