<?php
$articles=[
    ["titre" => "Bienvenue sur mon blog","contenu"=>"Ceci est le premier article de mon blog !"],
    ["titre" => "PHP pour debutants","contenu"=>"Apprenez à creer des sites dynamiques avec PHP. "],
    ["titre" => "Contacter moi","contenu"=>"Laissez vos commentaires pour ameliorer mon blog. "]
];
foreach($articles as $affichage){
    echo '<h2>' .$affichage["titre"].'</h2>';
    echo '<p>' .$affichage["contenu"].'</p>';
}