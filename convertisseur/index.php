<?php
    include 'function.php';
    if(isset($_POST['number'])&& isset($_POST['convert'])){
        $nombre=$_POST['number'];
        $convert=$_POST['convert'];
        $avantresult=before($nombre,$convert);
        $resultat=convertion($nombre,$convert);
        $egal='<span>est égale à </span>';
    }else{
        $nombre=null;
        $convert=null;
        $resultat=null;
        $avantresult=null;
        $egal=null;
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Convertisseur</title>
</head>
<body>
    <section>
        <div class="bloc"></div>
        <div class="bloc2">
            <h1>Convertisseur d'unité by Tsif</h1>
            <form method="POST">
                <label for="number">Entrez une valeur:</label>
                <input type="number" name="number" id="number" step="any" required>
                <label for="convert">Type de conversion:</label>
                <select id="convert" name="convert">
                    <option value="kimi">Kilomètres &#8594; Miles</option>
                    <option value="miki">Miles &#8594; Kilomètres </option>
                    <option value="cefa">Celsius &#8594; Farhenheit</option>
                    <option value="face">Farhenheit &#8594; Celsius</option>
                    <option value="kili">Kilogrammes &#8594; Livres</option>
                    <option value="liki">Livres &#8594; Kilogrammes</option>
                </select>
                <input type="submit" value="Convertir">
            </form>
            <div class="resultat">
                <?= $avantresult . $egal . $resultat ?>
            </div>
            <a href="index.php">reset</a>
        </div>
        <div class="bloc3"></div>
    </section>
</body>
</html>