<?php 

// Si la page est appelée directement par son adresse, on redirige en passant pas la page index
// Pas de soucis de bufferisation, puisque c'est dans le cas où on appelle directement la page sans son contexte
if (basename($_SERVER["PHP_SELF"]) != "index.php")
{
	header("Location:../index.php?view=accueil");
	die("");
}



?>
<form role="form" action="controleur.php">
<div id="page">

	<?php 
		if($msg=valider("msg")){
		echo "<h3 style='color:red;'>Erreur : $msg </h3>";}
		
		?>
		
			<p>Pseudo</p>
		<input type="text" name="login" placeholder="Votre Pseudo" />
		<p>Mot de passe</p>
		<input type="password" name="passe" placeholder="Votre Mot De Passe" />
		<input id="envoie" name="action" type="submit" Value="Creer">
		
		
	
		
		
		
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

</style>
