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
        $req = $cnx->prepare("select nomPoste, nomSalle,poste.indIP,typePoste, nPoste, ad from poste inner join salle on poste.nSalle = salle.nSalle");
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

function creerPoste($nPoste, $nomPoste, $indIP, $ad, $typePoste, $nSalle){
    try {
        $cnx = connexionPDO();
        $req1 = $cnx->prepare("insert into poste (nPoste, nomPoste, indIP, ad, typePoste, nSalle) values ('".$nPoste."','".$nomPoste."','".$indIP."','".$ad."','".$typePoste."', '".$nSalle."')");
        $req->execute();
        $req2 = $cnx->prepare("update salle set nbPoste = nbPoste + 1 where nSalle = '".$nSalle."'");
        $req2->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function modifierPoste($nPoste,$nSalle){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("update poste set nSalle = '".$nSalle."' where nPoste = '".$nPoste."'");
        $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function supprimerPoste($nPoste){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("delete from poste where nPoste = '".$nPoste."'");
        $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}