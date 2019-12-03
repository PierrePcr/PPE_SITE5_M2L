<?php

function controleurPrincipal($action) {
    $lesActions = array();
    
    $lesActions["defaut"] = "accueil.php";    
    $lesActions["accueil"] = "accueil.php";
    $lesActions["detail"] = "detailSalle.php";

    $lesActions["connexion"] = "connexion.php";
    $lesActions["inscription"] = "inscription.php";
    $lesActions["deconnexion"] = "deconnexion.php";
    $lesActions["profil"] = "monProfil.php";

    $lesActions["creeSalle"] = "creeSalle.php";
    $lesActions["modifierSalle"] = "modifierSalle.php";



    if (array_key_exists($action, $lesActions)) {
        $action = (isset($_GET["action"])) ? $_GET["action"] : $action = (!isset($_SESSION["name"])) ? "connexion" : "defaut";

        // $action = (isset($_SESSION["name"])) ? "connexion" : $action = (isset($_GET["action"])) ? $_GET["action"] : "defaut";
        // a garder ?
        //SUPPRIMER
        
        return $lesActions[$action];
    } 
    else {
        return $lesActions["defaut"];
    }
}
?>