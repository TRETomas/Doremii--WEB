<?php


// inclure ici la librairie faciliant les requêtes SQL
include_once("maLibSQL.pdo.php");


/* PARTIE 1 : Côté Playlist */

// celle la c'est bon 
function playlist_user($idUser) {
    // 
    $SQL="SELECT user.pseudo, playlist.nom, playlist.id_playlist, playlist.lien_image, COUNT(Contenu.lien_musique) AS nbmusique
            FROM user JOIN playlist ON user.id_user = playlist.id_user
                        JOIN Contenu ON playlist.id_playlist = Contenu.id_playlist
	    
            WHERE user.id_user = '$idUser'
	
	    GROUP BY playlist.nom;";  

    return json_encode(parcoursRs(SQLSelect($SQL)));
}


function selectmin(){
   $SQL="SELECT MIN(id_playlist) from playlist;"; 
    return SQLGetChamp($SQL);
    }
    
  function selectmax(){
   $SQL="SELECT MAX(id_playlist) from playlist;"; 
    return SQLGetChamp($SQL);
    } 
     
function afficherplaylistaimer($id_user) {
    $SQL="SELECT user.pseudo, playlist.nom, playlist.id_playlist, playlist.lien_image, COUNT(Contenu.lien_musique) AS nbmusique
            FROM aime JOIN playlist ON playlist.id_playlist = aime.id_playlist
			JOIN user ON user.id_user=playlist.id_user
			JOIN Contenu ON Contenu.id_playlist=aime.id_playlist
            WHERE aime.id_user = '$id_user'
	    GROUP BY playlist.id_playlist;";

    return json_encode(parcoursRs(SQLSelect($SQL)));
}

// celle la c'est bon 
function afficherplaylist($text) {
 
  $SQL="SELECT user.pseudo, playlist.nom, playlist.id_playlist, playlist.lien_image, COUNT(Contenu.lien_musique) AS nbmusique
            FROM user JOIN playlist ON user.id_user = playlist.id_user
                        JOIN Contenu ON playlist.id_playlist = Contenu.id_playlist
	    GROUP BY playlist.nom
	    HAVING playlist.nom LIKE '%$text%';";  

    return json_encode(parcoursRs(SQLSelect($SQL)));
}

function afficherContenuPlaylist($id_playlist) {

    $SQL = "SELECT Contenu.lien_musique, playlist.nom, user.pseudo 
    FROM Contenu JOIN playlist ON Contenu.id_playlist = playlist.id_playlist
                    JOIN user ON playlist.id_user = user.id_user  
    WHERE playlist.id_playlist = '$id_playlist'";
    
    return json_encode(parcoursRs(SQLSelect($SQL)));
}

// celle la c'est bon 
function afficherCommentaire($id_playlist) {

    $SQL = "SELECT commentaire, user.pseudo FROM Commentaire 
    JOIN user ON Commentaire.id_user=user.id_user 
    WHERE id_playlist = '$id_playlist'
    ORDER BY ordre ASC";
    //
    return json_encode(parcoursRs(SQLSelect($SQL)));}
    
    
function mkPlaylist ($nom_playlist, $lien_image="ressources/default.png",$id_user)
{
    // Cette fonction crée une playlist
    $SQL="INSERT INTO playlist (id_user,nom, lien_image) VALUES ('$id_user','$nom_playlist', '$lien_image')";
    SQLInsert($SQL);

    return SQLGetChamp("SELECT id_playlist FROM playlist WHERE nom='$nom_playlist' AND lien_image = '$lien_image' AND id_user='$id_user' ;");
}

function mkCommentaire ($idPlaylist, $idUser, $contenu)
{
    

   $SQL="INSERT INTO Commentaire (id_playlist, id_user, commentaire) VALUES ('$idPlaylist','$idUser','$contenu')";
    SQLInsert($SQL);

    return 1;

}



function aimerPlaylist($idPlaylist, $idUser)
{
$SQL="Select id_playlist from aime where id_playlist='$idPlaylist' AND id_user='$idUser'";
$id=SQLGetChamp($SQL);
$sql="insert into aime (id_playlist,id_user) VALUES ('$idPlaylist','$idUser')";
$SQL="DELETE FROM aime WHERE id_playlist='$idPlaylist' AND id_user='$idUser';";
if(!$id){
SQLInsert($sql);}

else{
    SQLInsert($SQL);}

return 1;
}

function retirerAimer($idPlaylist, $idUser)
{

}

/* PARTIE 2 : Côté Utilisateur */

function mkUser($pseudo, $mdp)
{
	$sql="INSERT INTO user (pseudo,password,admin) VALUES ('$pseudo', '$mdp',0);";
	SQLInsert($sql);
	return 1;

}


function changerPasse($idUser,$passe)
{
	// cette fonction modifie le mot de passe d'un utilisateur
	$sql = "UPDATE user
	        SET `password` = '$passe'
	        WHERE id_user = '$idUser';";
  SQLUpdate($sql);
}


function changerPseudo($idUser,$pseudo)
{
	// cette fonction modifie le pseudo d'un utilisateur
	$sql = "UPDATE user
	        SET pseudo = '$pseudo'
	        WHERE id_user = '$idUser';";
  SQLUpdate($sql);
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

function Ajout($idplaylist,$Lien){
	
	$sql="INSERT INTO Contenu (id_playlist,lien_musique) VALUES ( '$idplaylist','$Lien')";
	SQLInsert($sql);
	return 1;
	
	}
?>

