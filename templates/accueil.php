<?php //TODO s'occuper d'afficher les playlists favorites


// Si la page est appelée directement par son adresse, on redirige en passant pas la page index
// Pas de soucis de bufferisation, puisque c'est dans le cas où on appelle directement la page sans son contexte
if (basename($_SERVER["PHP_SELF"]) != "index.php")
{
	header("Location:../index.php?view=accueil");
	die("");
}

?>

<div id="page">
		<h4>Bienvenue sur l'accueil !</h4>
		<p>Doremii est une application qui vous permet de créer, gérer et commenter des 
playlists ! Vous pouvez ajouter vos titres favoris via un lien.</p>

<?php if(valider("connecte","SESSION"))
{
echo"<h4>Vos playlists favorites :</h4>";
//TODO faire en sorte que les playlists s'affichent 
}?>

<!--à mettre que si on est connecté-->
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

</style>
