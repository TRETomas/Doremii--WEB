<?php
include_once("libs/modele.php");
// Si la page est appelée directement par son adresse, on redirige en passant pas la page index
if (basename($_SERVER["PHP_SELF"]) != "index.php")
{
	header("Location:../index.php");
	die("");
}

// Pose qq soucis avec certains serveurs...
echo "<?xml version=\"1.0\" encoding=\"utf-8\" ?>";
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doremii</title>
</head>
<body onload="chargement();">


	<div id="header">
		<img id="logo" src ="play.png"/>
		<ul>
			
			<a href="index.php?view=accueil" ><h3 id="accueil">Accueil</h3></a>
			<a href="index.php?view=recherche"><h3 id="recherche">Recherche</h3></a>
			<a href="index.php?view=playlist"><h3 id="playlist">Playlists</h3></a>
			<a href="index.php?view=gestioncompte"><h3 id="parametre">Paramètres</h3></a>
			
			<!--Si on est pas connecté-->
			<a href="index.php?view=connexion"><h3 id="Connexion">Connexion</h3>
			
			<!--Si on est connecté-->
			<a href="index.php?view=accueil&action=deconnexion"><h3 id="deconnexion">Déconnexion</h3>
			
</a>		</ul>
	</div>
</body>
</html>



</html>
<!--Style css-->
<style>
@import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap');

	body{margin:0;
		font-family: 'Comfortaa', cursive, sans-serif;
		}
	
	#header{
		border:solid black 2px ;
		width: 100%;
		background-color:orange ;
		display: flex;
		color: black;
		display: flex;
		flex-direction: row;
	align-content: center;
	align-items: center;
	justify-content: center;
	justify-items: center;
		
	}

#header h3{border: black solid 2px;


padding: 20px;
}

#accueil,#recherche,#playlist,#parametre,#Connexion,#deconnexion{
	background-color: whitesmoke;
}
#header ul{
	display: flex;



}

	#header a{text-decoration: none;
		color: black;}

#logo{width: 100px;
height: 100px;
display: flex;
margin: auto 0px auto 0px;
align-content: space-around;}



#header h3:hover{
	background-color: lightblue;
}

</style>


