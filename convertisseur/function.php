<?php
function convertion($nbr,$type){
    if(isset($_POST['convert'])){
        $final='';
        switch($type){
            case 'kimi':
                $final=$nbr*0.621371 . 'Miles';
                return $final;
            case 'miki':
                $final=$nbr/0.621371
                return $nbr/0.621371;
            case 'cefa':
                $final=$nbr
                return ($nbr* 9 / 5) + 32;
            case 'face':
                $final=$nbr
                return ($nbr- 32) * 5 / 9;
            case 'kili':
                $final=$nbr
                return $nbr* 2.20462;
            case 'liki':
                $final=$nbr
                return $nbr/ 2.20462;
        }
    }
}

function affichage($resultat,$type){
    if(isset($_POST['convert'])){
        switch($type)
    }
}
