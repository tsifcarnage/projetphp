<?php
/*function convertion($nbr,$type){
    if (!is_numeric($nbr) || empty($nbr)) {
        return "Entrée invalide !";
    }
    if(isset($_POST['convert'])){
        $final='';
        switch($type){
            case 'kimi':
                $final=$nbr*0.621371 . ' Miles ';
                break;  
            case 'miki':
                $final=$nbr/0.621371 . ' Kilomètres ';
                break;                   
            case 'cefa':
                $final=($nbr*9 / 5) + 32 . ' Fahrenheit ';
                break;  
            case 'face':
                $final=($nbr- 32) * 5 / 9 . ' Celsius ';
                break;  
            case 'kili':
                $final=$nbr* 2.20462 . ' Livres ';
                break;  
            case 'liki':
                $final=$nbr/ 2.20462 . ' Kilogrammes ';
                break;  
            default:
                $final= "Type de conversion invalide ! ";
        }
        return $final;
    }
}*/

function convertform($nbr,$type){
    if (!is_numeric($nbr) || empty($nbr)) {
        return "Entrée invalide !";
    }
    if(isset($_POST['convert'])){
        $final='';
        switch($type){
            case 'kimi':
                $final=$nbr*0.621371;
                break;  
            case 'miki':
                $final=$nbr/0.621371;
                break;                   
            case 'cefa':
                $final=($nbr*9 / 5) + 32;
                break;  
            case 'face':
                $final=($nbr- 32) * 5 / 9;
                break;  
            case 'kili':
                $final=$nbr* 2.20462;
                break;  
            case 'liki':
                $final=$nbr/ 2.20462;
                break;  
            default:
                $final= "Type de conversion invalide ! ";
        }
        return $final;
    }
}

function before($nbr,$type){
    if (!is_numeric($nbr) || empty($nbr)) {
        return "Entrée invalide !";
    }
    if(isset($_POST['convert'])){
        switch($type){
            case 'kimi':
                return $nbr. ' Kilomètres ';
            case 'miki':
                return $nbr. ' Miles ';  
            case 'cefa':
                return $nbr. ' Celsius ';
            case 'face':
                return $nbr. ' Fahrenheit ';
            case 'kili':
                return $nbr. ' Kilogrammes ';
            case 'liki':
                return $nbr. ' Livres ';
            default:
                return "Type de conversion invalide ! ";
        }
    }
}
