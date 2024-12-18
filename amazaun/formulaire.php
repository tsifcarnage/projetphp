<?php
function getFormulaire($articles) {

$string = '';
$string .= '<form method="post">';

foreach ($articles as $article) {
    // Remplace les espaces entre les mots par des underscores pour le nom de l'article
    $nom_article = str_replace(' ', '_', $article['nom']);

    $string .= '<div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px; border-radius: 5px;">';
    $string .= '<h4>' . $article['nom'] . ' <br> <small><em>' . $article['prix']. ' €</em></small></h4>'; 
    $string .= '<div class="mb-3">'; 
    $string .= '<img src="img/img'.$article['photo'].'" alt="'.$article['nom'].'" class="rounded">';        
    $string .= '</div>';          
    $string .= '<div>';       
    $string .= '<label class="form-label" for="quantite_'.$nom_article.'">Quantité :</label>';        
    $string .= '<input class="form-control" type="number" name="quantite_'.$nom_article.'" id="quantite_'.$nom_article.'" value="1" max="10" min="1">';              
    $string .= '<input type="hidden" name="prix_'.$nom_article.'" value="'.$article['prix'].'">';        
    $string .= '<input type="hidden" name="nom_'.$nom_article.'" value="'.$article['nom'].'">';        
    $string .= '</div>';             
    $string .= '</div>';  
} 

$string .=  '<button type="submit" class="btn btn-outline-primary" name="ajouter" value="">Ajouter au panier</button>';
$string .=  ' <a class="btn btn-outline-secondary" href="index.php">Reload</a>';
$string .=  '</form>';

return $string;
}