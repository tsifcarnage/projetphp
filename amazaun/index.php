<?php 
    require 'formulaire.php';
    require 'articles.php';
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
            <form action="" method="POST">
                <h1>Votre Panier:</h1>
            </form>
        </div>
        
    </div>
    

    
</body>
</html>