<?php

function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["defaut"] = "listeRestos.php";/*A MODIFIER >>>*/
    /*$lesActions["defaut"] = "accueil.php";*/
    $lesActions["liste"] = "listeRestos.php";/*A SUPPRIMER*/
    $lesActions["detail"] = "detailResto.php";/*A SUPPRIMER*/
    $lesActions["recherche"] = "rechercheResto.php";/*A SUPPRIMER*/
    $lesActions["connexion"] = "connexion.php";
    $lesActions["inscription"] = "inscription.php";/*NEW*/
    $lesActions["deconnexion"] = "deconnexion.php";
    $lesActions["profil"] = "monProfil.php";
    $lesActions["cgu"] = "cgu.php";/*A SUPPRIMER*/
    $lesActions["aimer"] = "aimer.php";/*A SUPPRIMER*/




    if (array_key_exists($action, $lesActions)) {
        $action = (isset($_GET["action"])) ? $_GET["action"] : $action = (!isset($_SESSION["name"])) ? "connexion" : "defaut";

        // $action = (isset($_SESSION["name"])) ? "connexion" : $action = (isset($_GET["action"])) ? $_GET["action"] : "defaut";
        
        return $lesActions[$action];
    } 
    else {
        return $lesActions["defaut"];
    }
}
?>