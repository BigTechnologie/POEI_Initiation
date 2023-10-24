<?php
// Ecrire un script qui vous dit le jour choisi dans les 7 jours de la semaine

$jour = 3;
switch($jour) {
    case '1':
        echo "c'est lundi";
        break;
    case '2':
        echo "c'est mardi";
        break;
    case '3':
        echo "c'est mercredi";
        break;
    case '4':
        echo "c'est jeudi";
        break;
    case '5':
        echo "c'est vendredi";
        break;
    case '6':
        echo "c'est samedi";
        break; 
    case '7':
        echo "c'est dimanche";
        break; 
    default:
        echo "Desolé ce nombre ne correspond pas aux 7 jours de la semaine";                             
}