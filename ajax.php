<?php
// On definit le type de contenu qu'on va renvoyer et l'encodage
header('Content-Type: application/json; charset=utf-8');

// Petite fonction qui nous permet d'afficher une erreur
function showError($msg) {
     echo json_encode(array('error' => $msg));
     exit;
}

// Si aucune action demandée
if (empty($_GET['action'])) {
     showError("Aucune action demandée");
}

// Nos inclusions
require_once ("core/Database.php");
require_once ("core/Users.php");
require_once ("core/Game.php");

// On traite l'action demandée
switch ($_GET['action']) {
    case 'login' :
        if(!empty($_GET['mail']) and !empty($_GET['password']))
             echo json_encode(Users::loginOrCreate($_GET['mail'], $_GET['password']));
        break;
    case 'creation_perso' :
        if (!empty($_GET['nom']) and !empty($_GET['sexe']) and !empty($_GET['race']) and !empty($_GET['classe'])) {
            echo json_encode(Game::creationPersonnage($_GET['nom'], $_GET['sexe'], $_GET['race'], $_GET['classe']));
        }
        break;
    default :
        showError("Action invalide");
}
