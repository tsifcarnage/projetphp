<?php
function convertion($nbr,$type){
    if (!is_numeric($nbr) || empty($nbr)) {
        return "Entrée invalide !";
    }
    if(isset($_POST['convert'])){
        $final='';
        switch($type){
            case 'kimi':
                $final=number_format(($nbr*0.621371),2,',','.') . ' Miles ';
                break;  
            case 'miki':
                $final=number_format(($nbr/0.621371),2,',','.') . ' Kilomètres ';
                break;                   
            case 'cefa':
                $final=number_format((($nbr*9 / 5) + 32 ),2,',','.'). ' Fahrenheit ';
                break;  
            case 'face':
                $final=number_format((($nbr- 32) * 5 / 9),2,',','.') . ' Celsius ';
                break;  
            case 'kili':
                $final=number_format(($nbr* 2.20462),2,',','.') . ' Livres ';
                break;  
            case 'liki':
                $final=number_format(($nbr/ 2.20462),2,',','.') . ' Kilogrammes ';
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
