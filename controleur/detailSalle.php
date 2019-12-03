<?php 
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
	$racine="..";
}
$titre = "Détail d'une salle";
include "$racine/vue/entete.html.php";
include "$racine/modele/bd.salle.inc.php";

// recuperation des donnees GET, POST, et SESSION
$idS = $_GET["nSalle"];
$listeDetail = getSalle();

$listeDetailPoste = getPoste();



include "$racine/vue/vueDetailSalle.php";
include "$racine/vue/pied.html.php";
 ?>
