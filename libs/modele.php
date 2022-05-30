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
    $SQL="INSERT INTO Playlist (nom, lien_image) VALUES ('$nom_playlist', '$lien_image')";
    SQLInsert($sql);

    return SQLGetChamp("SELECT id_playlist FROM Playlist WHERE nom='nom_playlist' && lien_image = 'lien_image';");
}

function mkCommentaire ($idPlaylist, $idUser, $contenu)
{
    // Créer un commentaire

   $SQL="INSERT INTO Commentaire (id_playlist, id_user, commentaire) VALUES ('$idPlaylist','$idUser','$contenu';");
    SQLInsert($sql);

    return SQLGetChamp("SELECT commentaire FROM Commentaire WHERE id_playlist='$ifPlaylist' && id_user= '$idUser';");

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
}

function verifUserBdd($pseudo,$mdp)
{
    // Vérifier si le mdp et le pseudo correspond bien
    // Renvoie false si utilisateur inconnu
    // Renvoie l'id sinon
    $SQL="SELECT Id_user FROM User WHERE pseudo='$pseudo' AND password='$mdp'";

    return SQLGetChamp($SQL);
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
    // Vérifie si l'utilisateur est un administrateur
}

?>
