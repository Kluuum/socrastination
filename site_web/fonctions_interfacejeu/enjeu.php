<?php
	//CONNEXION BDD
	require("config.php");

	if (!isset($_SESSION['pseudo'])) {
		header('Location: ../erreur_paslog.php');
	}
	
	else {
		//RECUPERATION DES VARIABLES
		$num_forum = $_GET['nforum'];
		$num_partie = $_GET['npartie'];

		$req_role = $bdd->query("SELECT role FROM Role WHERE idMembre=".$_SESSION['idMembre'].";");
		$num_role = $req_role->fetchColumn();
		if($num_role==1) $nom_role="arbitre";
		if($num_role==0) $nom_role="joueur";

		echo "<p class=\"foot\">Vous êtes ".$_SESSION['pseudo']." et vous vous situez sur le forum $num_forum, dans la partie $num_partie avec le rôle $nom_role.</p>";
	}
?>