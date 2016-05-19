<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />

	<link rel="icon" href="images/favicon.ico"/>

	<meta name="viewport" content="width=device-width, user-scalable=no">

	<!-- CSS -->	

		<!-- BOOTSTRAP -->

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

		<!-- PERSO -->
		<link rel="stylesheet" href="css/style.css">   

	<!-- === -->

	<!-- POLICES EN LIGNE -->
	<link href='https://fonts.googleapis.com/css?family=Kanit' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Cantarell' rel='stylesheet' type='text/css'>
	<!-- ================ -->
	
	<title>Socrastination - Accueil</title>
   	
</head>

<body> 
    	<!-- DIV GLOBALE -->
	<div class="row" id="row_corps">
	<!-- ============ -->
			
		<!-- HEADER / NAV -->
		<div class="row">
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<div id="myNavbar">
						<ul class="nav navbar-nav">
							<li class="menu active"><a href="index.php">Accueil</a></li>
							<li class="menu"><a href="regles.php">Règles</a></li>
							<li class="menu"><a href="classement.php">Classement</a></li>
						</ul>

						<ul class="nav navbar-nav navbar-right">
							<li><a href="inscription.php"><span class="glyphicon glyphicon-user"></span> S'inscrire</a></li>
						{header}
		<!-- ========= -->
	
		<div class="container" id="corps">

			<div class="row">
				<div id="section">

					<div class="col-sm-12">
						<div class="row">
							<h1>Présentation</h1>
							<p>Socrastination est un projet basé sur un forum fonctionnant sur les principes de la méthode socratique.</p>
							<p>Cette méthode consiste à rechercher une définition universelle qui pourra se présenter comme une solution à un problème moral. Pour ce faire, Socrate a mis en place une méthode pratique qui est basée sur le dialogue appellé la dialectique. Celle-ci est divisée en deux phases.</p>
							<p>La première, appellée l'ironie, dont le but est d'atteindre un état de "lâcher prise". Ainsi, chaque protagoniste reconnait son ignorance après avoir confronté ses idées (et du coup sa vérité) à celles d'un autre. La seconde phase, la maïeutique, est celle de la recherche de la fameuse définition universelle.</p>
							
							<div class="text-center"><img id="socrate" src="images/socrate.jpg" alt="Portrait Socrate"></img></div>
							<h2>
								"Je sais seulement que je ne sais rien"
								- Socrate
							</h2>
							<p>Pour résumer : c'est un forum de débat.</p>
							<p>Le principe : le 1er joueur qui se connecte crée une partie basée sur une question. Un deuxième joueur se connecte à la conversation et c'est parti ! D'autres joueurs peuvent assister au débat et faire figure d'arbitres, en votant pour ou contre chaque argument. Ceci permettra aux principaux protagonistes de voir quel type d'argument fonctionne (... ou non).</p>
							<p>Nous vous souhaitons d'agréables partie dans la joie, la bonne humeur et le respect des <a href="regles.php">règles</a>!</p>
						</div>
					</div>
					
					<!-- BOUTON JOUER TEMPORAIRE -->
					<div id="bloc_jouer" class="col-sm-12">
						<div class="row">
							<a id ="jouer" href="liste_forums.php">JOUER</a>
						</div>
					</div>
					<!-- ========================= -->

				</div><!-- Ferme la row  du milieu -->
			</div><!-- Ferme le bloc section du milieu -->

		</div><!-- Ferme le bloc du milieu (container #corps) -->

		<!-- FOOTER -->
		<div class="row">
			<div class="col-sm-12" id="footer">
					<p class="foot">Mentions légales 2016, IUT Montpellier-Sète - Projet AS : <a href="http://www.dalle-cort.fr/" target="_blank">Dalle-Cort</a>, Chac, <a href="http://www.maxime.ferrer-ferrer.fr/" targ="_blank">Ferrer</a>, <a href="http://infolimon.iutmontp.univ-montp2.fr/~roigc/" target="_blank">Roig</a></p>
			</div>
		</div>
		<!-- ===== -->

	</div><!-- Ferme la row_corps" -->

</body>
</html>