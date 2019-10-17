<?php 
	if ($_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    	$racine="..";
	}
	include "$racine/vue/entete.html.php";




	$titre = "Page d'accueil";
	
	include "$racine/vue/vueListeSalle.php";
	include "$racine/vue/pied.html.php";
 ?>
