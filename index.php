<?php include_once "libs/maLibUtils.php";
//TODO RAJOUTER LES VIEWS DE TRUS CHIANTS COMME NOUVEAU COMPTE 
	// on récupère le paramètre view éventuel 
	$view = valider("view"); 


	// S'il est vide, on charge la vue accueil par défaut
	if (!$view) $view = "accueil"; 


	// Dans tous les cas, on affiche l'entete, 
	// qui contient les balises de structure de la page, le logo, etc. 
	// Le formulaire de recherche ainsi que le lien de connexion 
	// si l'utilisateur n'est pas connecté 

	include("templates/header.php");

	// En fonction de la vue à afficher, on appelle tel ou tel template
	switch($view)
	{		

		case "accueil" : 
			include("templates/accueil.php");
		break;
		
		case "recherche" : 
			include("templates/recherche.php");
		break;
		
		case "connexion" : 
			include("templates/connexion.php");
		break;
		
		case "playlist":
			include("temlates/playlist.php");
		break;
		
		case "gestioncompte":
			include("temlates/gestioncompte.php");
		break;
		
		/*TODO REMPLIR ÇA APRÈS 
		case "":
			include("temlates/");
		break;
		
		case "":
			include("temlates/");
		break;*/


		default : // si le template correspondant à l'argument existe, on l'affiche
			if (file_exists("templates/$view.php"))
				include("templates/$view.php");

	}


	// Dans tous les cas, on affiche le pied de page
	// Qui contient les coordonnées de la personne si elle est connectée
	include("templates/footer.php");


	
?>
	 
	 
