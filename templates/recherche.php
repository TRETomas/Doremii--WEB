<?php //TODO s'occuper d'afficher les playlists en fonction des recherches en temps reel avec javascript


// Si la page est appelée directement par son adresse, on redirige en passant pas la page index
// Pas de soucis de bufferisation, puisque c'est dans le cas où on appelle directement la page sans son contexte
if (basename($_SERVER["PHP_SELF"]) != "index.php")
{
	header("Location:../index.php?view=accueil");
	die("");
}
?>

<div id="page"><form role="form" action="index.php">
		<h4>Recherche</h4>
		<p>Vous pouvez effectuer votre recherche ici:</p>
		<input id="envoie" name="view" type="hidden" value="recherche">
		<input type="text" placeholder="Titre de la playlist" id="champ" name="text" />
		<input id="envoie" name="action" type="submit" Value="recherche">
		</form>
		<div id="lesplay"></div>
</div>

<style>
#page{
	border: 3px solid black;
	border-radius:10px;
	margin: 50px 200px 50px 200px;
	padding: 10px;
	background-color: cornsilk;
	height:auto;
	

}

#page #champ{
	text-align:justify;
	border: 2px solid black;
	margin: auto;
	width: 80%;
	height: 5%;
	font-family:'Comfortaa', cursive, sans-serif ;
	border-radius: 3px;

}

.playlist{

	display: flex;
	flex-direction: row;
	border: 1px solid black;
	border-top-right-radius: 10px;
	border-bottom-right-radius: 10px;
	justify-content: space-between;
	background-color: whitesmoke;

}

.playlist:hover{
	background-color: lightblue;

}

.contenu
{ line-height:auto;
margin-top:auto;
margin-bottom: auto;

padding: auto;}

.Pmage{
max-width:20% ;
max-height: 33%;

}

.interaction{max-height: 50px;
			max-width: 50px;
			margin-top:2.5%;
}

.interaction img{
	widths: 60%;
	height: 60%;
	margin: 6%;
		
	}

#new{
	max-height: 50px;
			max-width: 50px;
</style>

<script>


<?php
			if($action=valider("action"))
			if($action="recherche")
			if($text=valider("text"))
				$playlist=afficherplaylist($text);
			


echo"var playlist=$playlist;";

?>

<?php $user= valider("idUser","SESSION");
	$playlist=afficherplaylistaimer($user);
	echo "var liked=$playlist";?>

function chargement(){
refpage=document.getElementById("lesplay");
//refplaylists=JSON.parse(playlistjson);
afficherplaylist();
}




function afficherplaylist(){
	var i;
	refpage.innerHTML=null;
	
	//refplaylists.playlists.length;
	
	
	for(i=0;i<playlist.length;i++){
			if(appartient(playlist[i].id_playlist)){
			refpage.innerHTML+="<div class='playlist'>"+"<img class='Pmage' src='"+playlist[i].lien_image+"' />"+"<div class='contenu'>"+"<a href='index.php?view=PLAYLIST&id="+playlist[i].id_playlist+"'>"+"<h4>"+playlist[i].nom+"</h4></a>"+"<p>"+playlist[i].pseudo+"</p>"+"<p>Nombre de musiques: "+playlist[i].nbmusique+"</p>"+"</div>"+"<div class='interaction'><a href='controleur.php?action=like&id="+playlist[i].id_playlist+"' ><img src='ressources/liked.png' /></a><a href='index.php?view=commentaires&id="+playlist[i].id_playlist+"' ><img src='ressources/comment.png' /></a></div></div>";	
			}
			
			else{
			refpage.innerHTML+="<div class='playlist'>"+"<img class='Pmage' src='"+playlist[i].lien_image+"' />"+"<div class='contenu'>"+"<a href='index.php?view=PLAYLIST&id="+playlist[i].id_playlist+"'>"+"<h4>"+playlist[i].nom+"</h4></a>"+"<p>"+playlist[i].pseudo+"</p>"+"<p>Nombre de musiques: "+playlist[i].nbmusique+"</p>"+"</div>"+"<div class='interaction'><a href='controleur.php?action=like&id="+playlist[i].id_playlist+"' ><img src='ressources/like.png' /></a><a href='index.php?view=commentaires&id="+playlist[i].id_playlist+"' ><img src='ressources/comment.png' /></a></div></div>";
		}
	}

function appartient(id){
	var j;
	for(j=0;j<liked.length;j++)
	{	if(liked[j].id_playlist==id)
			return 1;
		}
	return 0;
	
	
	}


}
</script>
