<?php               
if (array_sum($quantite) > 0) {//arraysum permet de calculer la total du quantite,verifier si cest plus grand que zero les quantites
    $total = 0; 
    foreach ($articles as $article) {
        $nom = $article["nom"];
        $prix = $article["prix"];
        $quantite_article = $quantite[$nom]; 
        if ($quantite_article > 0) {                           
            $total += $prix * $quantite_article; // Calcule le total
            echo '<ul>';
            echo '<li>'.$nom . ' (' . $prix . ' €)' .'<span> x ' . $quantite_article .'</span> = '. $total . ' €</li>';
            echo '</ul>';
        }
    }
    // Affiche le montant total
    echo "<h4>Montant total de la commande : " . $total . "€</h4>";

} else {
    echo "<h4>Montant de la commande : 0€</h4>";
}
