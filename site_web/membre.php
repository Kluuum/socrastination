<?php
	session_start();
	if (!isset($_SESSION['pseudo'])) {
		header ('Location: index.php');
		exit();
	}
	
	// connexion BDD
	require("config.php");
	   
	// INTERROGATION
	$query = $bdd->prepare('SELECT * FROM Membres WHERE pseudo = :pseudo');
	$query->bindValue(':pseudo',$_SESSION['pseudo'], PDO::PARAM_STR);
	$query->execute();
	$info=$query->fetchobject();
	if ($query==false) {
		echo "erreur query";
		exit();
	}   

   	// TRAITEMENT
	echo "Pseudo : {$info->pseudo} ; Mail : {$info->mail}; Niveau : {$info->niveau}; Points : {$info->nbDePoints}; Parties gagnees : {$info->nbPartiesGagnees}; Total parties : {$info->NbTotalParties} ";	
	echo "<a href='deco.php'>deco</a>";
?>

