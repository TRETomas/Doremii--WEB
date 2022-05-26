<?php //TODO s'occuper d'afficher les playlists en fonction des recherches en temps reel avec javascript


// Si la page est appelée directement par son adresse, on redirige en passant pas la page index
// Pas de soucis de bufferisation, puisque c'est dans le cas où on appelle directement la page sans son contexte
if (basename($_SERVER["PHP_SELF"]) != "index.php")
{
	header("Location:../index.php?view=accueil");
	die("");
}
?>
<div id="page">
		<h4>Recherche</h4>
		<p>Vous pouvez effectuer votre recherche ici:</p>
		<input type="text" placeholder="Titre de la playlist" id="champ" onclick="Recherche();"/>
</div>
<style>
#page{
	border: 3px solid black;
	border-radius:10px;
	margin: 50px 200px 50px 200px;
	padding: 10px;
	background-color: cornsilk;
	height:500px;
	

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
</style>

<script>
// TODO 
</script>
