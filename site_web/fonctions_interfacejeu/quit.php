<?php	
	session_start();
	require("../config.php");

	//On regarde si c'est un joueur ou un arbitre qui demande à quitter
	//Un joueur quitte
	if($_GET['role']==0) {
		//On supprime dans Role, on supprime les messages 
		$req = 	"DELETE FROM Role 
				WHERE idMembre={$_SESSION['idMembre']};
				DELETE FROM Chat_messages 
				WHERE message_id_membre={$_SESSION['idMembre']};
				DELETE V FROM Votes AS V 
				JOIN Chat_messages AS C ON V.idMessage=C.message_id
				WHERE C.message_id_membre = {$_SESSION['idMembre']}
				;";


		$req_nbj="SELECT COUNT(*) FROM Role WHERE idPartie={$_SESSION['id_partie']} AND role=0;";
		$res_nbj=$bdd->query($req_nbj);
		$nb_j= $res_nbj->fetchColumn();
	
		//S'il y a un autre joueur, c'est son "tour" (il peut choisir le sujet)
		if ($nb_j==2) {
			//On récupère son id
			$req_adv=	"SELECT idMembre FROM Role
						WHERE role=0
						AND idPartie={$_SESSION['id_partie']}
						AND idMembre!={$_SESSION['idMembre']}
						;";
			$res_adv=$bdd->query($req_adv);
			if(!$res_adv) {
				echo "Erreur requete id aversaire : $req_adv.";
				exit();
			}
			$id_adv=$res_adv->fetch()['idMembre'];

			//On modifie tour_joueur avec l'id de l'adversaire
			$req.=	"UPDATE Parties 
					SET tour_joueur=$id_adv
					WHERE idPartie={$_SESSION['id_partie']};";
		}
		//Sinon, on supprime la partie, on était le dernier dedans
		else {
			$req.=	"DELETE FROM Parties
					WHERE idPartie={$_SESSION['id_partie']};
					UPDATE Forums 
					SET idPartie=0
					WHERE idPartie={$_SESSION['id_partie']}
					;";
		}
	}
	//Un arbitre quitte, on supprime son role et ses votes
	else {
		$req = 	"DELETE FROM Role 
				WHERE idMembre={$_SESSION['idMembre']};
				DELETE FROM Votes 
				WHERE idArbitre={$_SESSION['idMembre']}
				;";
	}

	//On exécute la requete et on nettoie $_SESSION
	//Envoi de la requete 
	$res=$bdd->query($req);
	if(!$res){
		echo "Erreur nettoyage BDD quit : $req.";
		exit();
	}

	//Nettoyage dans $_SESSION 
	$_SESSION['id_forum']="";	
	$_SESSION['id_partie']="";
	header('Location: ../liste_forums.php');
?>
