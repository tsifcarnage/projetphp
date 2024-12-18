<?php 
    include 'article.php';
    $articles = [
        ["nom" => "Nike Air AF1", "prix" => 110, "photo" => "af1.png"],
        ["nom" => "T-shirt", "prix" => 29, "photo" => "t-shirt.png"],    
        ["nom" => "Pantalon", "prix" => 95, "photo" => "pantalon.png"]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?=getFormulaire($articles)?>
</body>
</html>