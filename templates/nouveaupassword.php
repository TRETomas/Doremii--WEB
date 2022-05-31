<?php //TODO s'occuper d'afficher les playlists en fonction des recherches en temps reel avec javascript


// Si la page est appelée directement par son adresse, on redirige en passant pas la page index
// Pas de soucis de bufferisation, puisque c'est dans le cas où on appelle directement la page sans son contexte
if (basename($_SERVER["PHP_SELF"]) != "index.php")
{
	header("Location:../index.php?view=accueil");
	die("");
}
?>
<<form role="form" action="controleur.php">
<div id="page">
	<?php 
		if($msg=valider("msg")){
		echo "<h3 style='color:red;'>Erreur : $msg </h3>";}
		?>
		
		<h4>Changer votre mot de passe</h4>
		<p>Nuveau Mot de passe : </p>
		<input type="password" name="passe" placeholder="Veuillez saisir votre nouveau mot de passe " />
        <p>Confirmation du nouveau de passe : </p>
		<input type="password" name="passe2" placeholder="Veuillez saisir de nouveau votre nouveau mot de passe " />
		<input id="envoie" name="action" type="submit" Value="Modifier">
		
	</div>
	</form>
	
<style>
#page{
	border: 3px solid black;
	border-radius:10px;
	margin: 50px 200px 50px 200px;
	padding: 10px;
	background-color: cornsilk;
	height:500px;
	display: flex;
	flex-direction: column;
	


}


#page a{
	margin-top: 20px;
}
input{
	font-family: 'Comfortaa', cursive, sans-serif;
}

#envoie{
border: solid black 1px;
border-radius: 5px;
background-color:whitesmoke;
margin-top: 20px;
padding: 1%;

}

#envoie:hover{
	background-color: lightblue;
}