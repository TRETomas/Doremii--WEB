<?php
/* FICHIER MODELE */
/* FONCTIONS SQL */

// inclure ici la librairie faciliant les requêtes SQL
include("maLibSQL.pdo.php");

/* PARTIE 1 : Coté Playlist */

function genererJson($view, $recherche=" * ", $idUser)
{
	// Fonction qui génére un JSON 
}

function mkPlaylist($nom_playlist, $lien_image="ressources/default.png", $tabMus)
{
	// Cette fonction crée une playlist
}

function mkCommentaire($idPlaylist, $idUser, $contenu)
{
	// Créer un commentaire
}

function aimerPlaylist($idPlaylist, $idUser)
{
	// Aimer la playlist
}

function retirerAimer($idPlaylist, $idUser)
{
	// Retire le j'aime sur la playlist
}

/* PARTIE 2 : Coté Utilisateur */

function mkUser($pseudo, $mdp)
{
	// Cette fonction crée un nouvel utilisateur et renvoie l'identifiant de l'utilisateur créé
}

function verifUserBdd($pseudo,$mdp)
{
	// Vérifier si le mdp et le pseudo correspond bien
}

function changerMDP($pseudo, $new_mdp, $mdp)
{
	// Changer le mot de passe de l'utilisateur
}

function changerPseudo($new_pseudo, $pseudo, $mdp)
{
	// Changer le pseudo
}

function isAdmin($idUser)
{
	// vérifie si l'utilisateur est un administrateur
}

?>
