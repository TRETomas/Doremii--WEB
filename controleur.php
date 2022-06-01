<?php
session_start();

 include_once "libs/maLibUtils.php";
  include_once "libs/maLibSQL.pdo.php";
  include_once "libs/maLibSecurisation.php"; 
  include_once "libs/modele.php"; 

	  $qs = $_GET;

	if ($action = valider("action"))
	{
		ob_start ();
    echo "Action = '$action' <br />";
    

		// ATTENTION : le codage des caractères peut poser PB si on utilise des actions comportant des accents... 
		// A EVITER si on ne maitrise pas ce type de problématiques

		/* TODO: A REVOIR !!
		// Dans tous les cas, il faut etre logue... 
		// Sauf si on veut se connecter (action == Connexion)

		if ($action != "Connexion") 
			securiser("login");
		*/

		// Un paramètre action a été soumis, on fait le boulot...
		switch($action)
		{			// Connexion //////////////////////////////////////////////////
			case 'Connexion' :
				// On verifie la presence des champs login et passe
				    $qs = [];
        // On verifie la presence des champs pseudo et passe
        if ($pseudo = valider("login"))
        if ($passe = valider("passe"))
        {
          // On verifie l'utilisateur, 
          // et on crée des variables de session si tout est OK
          // Cf. maLibSecurisation
          if (verifUser($pseudo,$passe)) {
            // Tout s'est bien passé : on redirige vers la page d'accueil
           $qs["view"] = "accueil";
          } else {
            // Si erreur de connexion : on redirige vers le formulaire de connexion
            $qs["view"] = "connexion";
            // Avec un message d'erreur :
            $qs["msg"] = "Identifiant ou mot de passe invalide";
          }
          }
        
        
      break;		
      
		     case 'play' :
			  $qs["view"]="PLAYLIST";
			  $a=rand(selectmin(),selectmax());
			  $qs["id"]=$a;
			  
		     
		     break;
				
			case 'deconnexion' :
				session_destroy();
				$qs["view"]="accueil";
			break;
			
			 
			
			case 'Creation' :
			$qs["view"]="creationplaylist";
			 if ($Titre = valider("Titre"))
			if ($lien = valider("Lien"))
				{
					$pseudo=valider("login");
					$passe=valider("passe");  
					$user= valider("idUser","SESSION");
				$qs["idplaylist"]=mkplaylist($Titre,$lien,$user);}
			else{$qs["msg"]="Erreur lors de la saisie";}
				
			break;
			
			case 'Creer' :
				  $qs["view"] = "connexion";
				  $qs["msg"]="Erreur lors de la saisie";
		  // On verifie la presence des champs pseudo et passe
		    if ($pseudo = valider("login"))
		    if ($passe = valider("passe"))
		  {
			mkUser($pseudo,$passe);
			$qs["msg"]="Compte créé avec succès";
		      }
				
			break;
			
			
			
			case 'Ajout' :
			$qs["view"]="creationplaylist";
			 if ($Lien = valider("LienMusique"))
				{$idplaylist=valider("idplaylist");
					$qs["idplaylist"]=$idplaylist;
					Ajout($idplaylist,$Lien);
					}
			break;
			
			
			
			
			
			
			
			case 'Valider':
			$qs["view"]="gestioncompte";
				if($new_pseudo=valider("pseudo") ){
			   changerPseudo($_SESSION["idUser"],$new_pseudo,);
				}
			break;
			case 'Modifier':
				$qs["view"]="connexion";
				if($password=valider("passe"))
				if($password2=valider("passe2"))
				if($password==$password2){	
				changerPasse($_SESSION["idUser"] ,$password);
				session_destroy();
				 $_SESSION = array();
				}
		 	break;
			
				
			case 'like' :
			  $qs["view"]="accueil";
			  $playlist=valider("id");
			  $user=valider("idUser","SESSION");
			  aimerPlaylist($playlist,$user);
			  
			  
			break;
			
			case 'Envoyer':
			$qs["view"]="commentaires";
			$id=valider("id");
			$qs["id"]=$id;
			$user=valider("idUser","SESSION");
			$contenu=valider("contenu");
			mkCommentaire ($id, $user, $contenu);
			break;
					
		}
		}
			
			
			// On redirige toujours vers la page index, mais on ne connait pas le répertoire de base
  // Par exemple, si $_SERVER["PHP_SELF"] vaut /chat/data.php, dirname($_SERVER["PHP_SELF"]) contient /chat
  $urlBase = dirname($_SERVER["PHP_SELF"]) . "/index.php";

  // On redirige vers la page index avec les bons arguments
  rediriger($urlBase, $qs);

  // On écrit seulement après cette entête
  ob_end_flush();
	
?>
