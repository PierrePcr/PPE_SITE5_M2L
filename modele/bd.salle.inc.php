<?php
include_once "bd.inc.php";

function getSalle() {
    $resultat = array();
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from salle");
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getPoste() {
    $resultat = array();
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select poste.nomPoste, poste.nSalle, salle.nomSalle FROM poste INNER JOIN salle ON poste.nSalle = salle.nSalle");
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}
