<?php
    include 'citation.php';
    if(isset($citations)&& !empty($citations)){
        $randomize= array_rand($citations);
        $citarand=$citations[$randomize];
    }else{
        $randomize= array_rand($citations);
        $citarand=$citations[$randomize];
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Citations</title>
</head>
<body>
    <section>
        <h1>Tsif citation:</h1>
        <div class="blue">
            <i><?= $citarand?></i>
        </div>
        <div>
            <a href="index.php">Generer</a>
        </div>
    </section>
</body>
</html>