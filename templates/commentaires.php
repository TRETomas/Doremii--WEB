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
	<div id="lesplay">
	</div>
	
	<form role="form" action="controleur.php">
		<input type="text" name="contenu" placeholder="Votre message" />
		<input type="hidden" name="id" value="<?php $id=valider("id");echo"$id"?>"/>
		<input id="envoie" name="action" type="submit" Value="Envoyer">
	</form>
	

	
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

.comm{
	border:2px solid black;
	border-radius:10px;
	background-color:whitesmoke;
	margin: 5px 80% 5px 0px;
	padding:5px;
	}

.comm:hover{background-color:lightblue;
	}
	
	
.comm>h5{
	margin:0;
	text-decoration: underline;}

</style>

<script>
<?php $idplaylist=valider("id");
				$commentaires=afficherCommentaire($idplaylist);
			echo "var commentaire = $commentaires;";
		?>
		var refpage=null;
		
	function chargement(){
		refpage=document.getElementById("lesplay");
		var i;
		for (i=0;i<commentaire.length;i++){
			refpage.innerHTML+="<div class='comm'><h5>"+commentaire[i].pseudo+"</h5><p>"+commentaire[i].commentaire+"</p></div>";
			}
		
		
		}
		

</script>
