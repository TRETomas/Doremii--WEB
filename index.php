<?php  
session_start();

include_once "libs/maLibUtils.php";
  include_once "libs/maLibSQL.pdo.php";
  include_once "libs/maLibForms.php";
  include_once "libs/modele.php";
//TODO RAJOUTER LES VIEWS DE TRUS CHIANTS COMME NOUVEAU COMPTE 
	// on récupère le paramètre view éventuel 
	$view = valider("view"); 

	if (!$view = valider("view")) {
		$view="accueil";
		$qs["view"]="accueil";
		$urlBase = dirname($_SERVER["PHP_SELF"]) . "/index.php";
		rediriger($urlBase, $qs);
	}
	// S'il est vide, on charge la vue accueil par défaut

	// Dans tous les cas, on affiche l'entete, 
	// qui contient les balises de structure de la page, le logo, etc. 
	// Le formulaire de recherche ainsi que le lien de connexion 
	// si l'utilisateur n'est pas connecté 

	include("templates/header.php");
	
	

	// En fonction de la vue à afficher, on appelle tel ou tel template
	//switch($view)
	//{		

		/*case "accueil" : 
			include("templates/accueil.php");
		break;
		
		case "recherche" : 
			include("templates/recherche.php");
		break;
		
		case "connexion" : 
			include("templates/connexion.php");
		break;
		
		case "playlist":
			include("templates/playlist.php");
		break;
		
		case "gestioncompte":
			include("templates/gestioncompte.php");
		break;*/
		
		
		if (file_exists("templates/$view.php")) {
                include("templates/$view.php");
            } 
            else {
                include("templates/accueil.php");
            }
		

		/*TODO REMPLIR ÇA APRÈS 
		case "":
			include("temlates/");
		break;
		
		case "":
			include("temlates/");
		break;*/


	

	//}


	// Dans tous les cas, on affiche le pied de page
	// Qui contient les coordonnées de la personne si elle est connectée



	
?>
	 
	 
