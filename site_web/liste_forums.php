<?php
	session_start();
	require ("config.php");
	
	//Contrôle pour savoir quel header nécessaire
	if (!isset($_SESSION['pseudo'])) {
		$header=file_get_contents("elements_communs/header2.php");
	}
	else {
		$header=file_get_contents("elements_communs/header3.php");
		$header=str_replace("{pseudo}",$_SESSION['pseudo'],$header);
	}

	//Chargement de la vue
	$vue=file_get_contents("vues/v_liste_forums.html");
	$vue=str_replace("{header}",$header,$vue);
	echo $vue;
?>
