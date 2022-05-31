<?php 

// Si la page est appelée directement par son adresse, on redirige en passant pas la page index
// Pas de soucis de bufferisation, puisque c'est dans le cas où on appelle directement la page sans son contexte
if (basename($_SERVER["PHP_SELF"]) != "index.php")
{
	header("Location:../index.php?view=accueil");
	die("");
}


	
?>



<div id="page">
	<h4>Creation de Playlist :</h4>
	<?php 
		if($msg=valider("msg")){
		echo "<h3 style='color:red;'>Erreur : $msg </h3>";}
		?>
		
	<?php if($idplaylist= valider("idplaylist")){
	echo "<form role='form' action='controleur.php'>
		<input type='hidden' name='idplaylist' value='$idplaylist'/>
		<p>Lien de la musique</p>
		<input type='text' name='LienMusique' placeholder='Lien de la musique' />
		<input id='envoie' name='action' type='submit' Value='Ajout'>
		</form>";
		echo "<a href='index.php?view=playlist'><h3 id='Quitter'>Quitter</h3></a>"
		;
	}
	
	else{
		echo"<form role='form' action='controleur.php'>
		<p>Nom</p>
		<input type='text' name='Titre' placeholder='Nom de la playlist' />
		<p>Lien de l'image</p>
		<input type='link' name='Lien' placeholder='Lien de l image' />
		<input id='envoie' name='action' type='submit' Value='Creation'>
		</form>";}
		?>
	
	
		
		
		
		
		
	
</div>
	




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
