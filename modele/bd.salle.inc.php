<?php
include_once "bd.inc.php";

function getSalles() {
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

function getSalleByIdS($idS) {
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from Salle where nSalle=:idS");
        $req->bindValue(':idS', $idS, PDO::PARAM_INT);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getPostes() {
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

function getPosteBySalle($Salle) {
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from Poste where nSalle=:Salle");
        $req->bindValue(':Salle', $Salle, PDO::PARAM_INT);
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        $resultat = array();
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

function getTypes() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from Types");
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

function createPoste($nomPoste, $typePoste, $nSalle, $nPoste) {
    try {
        $cnx = connexionPDO();
        $reqindIP = "SELECT indIP from Salle WHERE nSalle ='".$nSalle."';";
        $reqindIP = $cnx->query($reqindIP);
        $resindIP = $reqindIP->fetch();
        $resindIP = $resindIP['indIP'];

        $req = "INSERT  INTO Poste
            (nPoste, nomPoste, typePoste, nSalle, indIP)
            VALUES ('".$nPoste."', '".$nomPoste."', '".$typePoste."', '".$nSalle."' , '".$resindIP."');";
        $resultat = $cnx->query($req);
        return true;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
        return false;
    }
}

function updatePostes($nomPoste, $typePoste, $numSalle, $numPoste) {
    try {
        $cnx = connexionPDO();
        $cnx = connexionPDO();
        $reqindIP = "SELECT indIP from Salle WHERE nSalle ='".$numSalle."';";
        $reqindIP = $cnx->query($reqindIP);
        $resindIP = $reqindIP->fetch();
        $resindIP = $resindIP['indIP'];


        $req = $cnx->prepare("UPDATE Poste
            SET nomPoste = :nomP,
            typePoste = :typeP,
            nSalle = :numS,
            indIP = :ip
            WHERE nPoste = :numP");
        $req->bindValue(':nomP', $nomPoste);
        $req->bindValue(':ip', $resindIP);
        //$req->bindValue(':ad', $resAd, PDO::PARAM_INT);
        $req->bindValue(':typeP',$typePoste);
        $req->bindValue(':numS', $numSalle);
        $req->bindValue(':numP', $numPoste);
        $resultat = $req->execute();
        return true;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        return false;
        die();
    }
}



function updatePoste($nomPoste, $typePoste, $nSalle, $nPoste, $nPosteModifier) {
    try {

        $cnx = connexionPDO();
        $req = $cnx->prepare("UPDATE Poste
            SET nomPoste = :nomP, typePoste = :typeP, nSalle = :nS, nPoste = :numPMod
            WHERE nPoste = :numP");

        $req->bindValue(':nomP', $nomPoste);
        $req->bindValue(':typeP',$typePoste);
        $req->bindValue(':nS', $nSalle);
        $req->bindValue(':numP', $nPoste);
        $req->bindValue(':numPMod', $nPosteModifier);
        $resultat = $req->execute();
        return true;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        return false;
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

?>