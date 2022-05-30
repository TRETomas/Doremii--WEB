<?php //TODO s'occuper du contenu de la page et des views


// Si la page est appelée directement par son adresse, on redirige en passant pas la page index
// Pas de soucis de bufferisation, puisque c'est dans le cas où on appelle directement la page sans son contexte
if (basename($_SERVER["PHP_SELF"]) != "index.php")
{
	header("Location:../index.php?view=accueil");
	die("");
}
?>


	<div id="page">
		<h4>Changer vos données personnelles</h4>
		<a href="index.php?view=nouveaupseudo">Nouveau pseudo</a>
		<a href="index.php?view=nouveaupassword">Nouveau mot de passe</a>
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

#page a{
	text-decoration: none;
	display: flex;
	flex-direction: column;
	margin-top: 5%;
}
</style>
