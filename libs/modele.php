<?php


// inclure ici la librairie faciliant les requêtes SQL
include_once("maLibSQL.pdo.php");


/* PARTIE 1 : Côté Playlist */

function genererJson ($view, $recherche=" * ", $idUser)
{
    // Fonction qui génère un JSON 
}

function mkPlaylist ($nom_playlist, $lien_image="ressources/default.png", $tabMus)
{
    // Cette fonction crée une playlist
    // A MODIFIER
	
    /*$SQL="INSERT INTO Playlist (nom, lien_image) VALUES ('$nom_playlist', '$lien_image')";
    return SQLInsert($sql); */ 
}

function mkCommentaire ($idPlaylist, $idUser, $contenu)
{
    // Créer un commentaire

   $SQL="INSERT INTO Commentaire (id_playlist, id_user, commentaire) VALUES ('$idPlaylist','$idUser','$contenu';)";
    return SQLInsert($SQL);
}

function aimerPlaylist($idPlaylist, $idUser)
{
    // Aimer la playlist
}

function retirerAimer($idPlaylist, $idUser)
{
    // Retire le j'aime sur la playlist
}

/* PARTIE 2 : Côté Utilisateur */

function mkUser($pseudo, $mdp)
{
    // Cette fonction crée un nouvel utilisateur et renvoie l'identifiant de l'utilisateur créé
    $sql="INSERT TABLE user(`pseudo`,`password`,`admin`)
    VALUES ($pseudo,$mdp,0);";
    return SQLInsert($sql);
}

function changerMDP($pseudo, $new_mdp,$mdp)
{
    // Changer le mot de passe de l'utilisateur
    $sql="UPDATE user
    SET `password`=$new_mdp
    WHERE `pseudo`=$pseudo AND `password`=$mdp;";
    return SQLUpdate($sql);
}
function changerPseudo($new_pseudo, $pseudo, $mdp)
{
    // Changer le pseudo
    $sql="UPDATE user
    SET `pseudo`=$new_pseudo
    WHERE `pseudo`=$pseudo AND `password`=$mdp;";
    return SQLUpdate($sql);
}
function isAdmin($idUser)
{
    // Vérifie si l'utilisateur est un administrateur
    $sql="SELECT *
    FROM user
    WHERE `admin`=1 AND $idUser=`user`;"; 
    return SQLSelect($sql);
}

function verifUserBdd($login,$passe)
{
	// Vérifie l'identité d'un utilisateur 
	// dont les identifiants sont passes en paramètre
	// renvoie faux si user inconnu
	// renvoie l'id de l'utilisateur si succès

	$SQL="SELECT id_user FROM user WHERE pseudo='$login' AND password='$passe'";

	return SQLGetChamp($SQL);
	// si on avait besoin de plus d'un champ
	// on aurait du utiliser SQLSelect
}

?>

