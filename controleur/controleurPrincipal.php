<?php

function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["defaut"] = "afficher.php";
    $lesActions["afficher"] = "afficher.php";
    $lesActions["detail"] = "detailSalle.php";



    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } 
    else {
        return $lesActions["defaut"];
    }
}

?>