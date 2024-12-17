<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertisseur</title>
</head>
<body>
    <section>
        <h1>Convertisseur d'unité</h1>
        <form method="$_POST">
            <label for="number">Entrez une valeur:</label>
            <input type="number" name="number" id="number">
            <label for="convert">Type de conversion:</label>
            <select id="convert">
                <option value="kili">Kilomètres &#8594; Miles</option>
                <option value="miki">Miles &#8594; Kilomètres </option>
                <option value="cefa">Celsius &#8594; Farhenheit</option>
                <option value="face">Farhenheit &#8594; Celsius</option>
                <option value="kili">Kilogrammes &#8594; Livres</option>
                <option value="liki">Livres &#8594; Kilogrammes</option>
            </select>
            <input type="submit" value="Convertir">
        </form>
    </section>
</body>
</html>