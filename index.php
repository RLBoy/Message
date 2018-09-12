<?php
    session_start();
	# Prise du temps actuel au début du script
	$time_start = microtime(true);

    
	# Variables globales du site
	define('CHEMIN_VUES','views/');
	
//	# Require des classes automatisé
//	function chargerClasse($classe) {
//		require 'models/' . $classe . '.class.php';
//	}
//	spl_autoload_register('chargerClasse'); 

	# Ecrire ici le header de toutes pages HTML
	require_once(CHEMIN_VUES . 'header.php');

	# Tester si une variable GET 'action' est précisée dans l'URL index.php?action=...
	$action = (isset($_GET['action'])) ? htmlentities($_GET['action']) : 'default';
	# Quelle action est demandée ?
	switch($action) {
		default: # Par défaut, le contrôleur de l'accueil est sélectionné
			require_once('controllers/AccueilController.php');	
			$controller = new AccueilController();
			break;
	}
	# Exécution du contrôleur correspondant à l'action demandée
	$controller->run();
	
	$time_end = microtime(true);
	$time = number_format(($time_end - $time_start)*1000,6);
	# Ecrire ici le footer du site de toutes pages HTML
	require_once(CHEMIN_VUES . 'footer.php');

?>