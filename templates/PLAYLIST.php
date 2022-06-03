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

</style>
<script>

<?php 
$idplaylist=valider("id");
$playlist=afficherContenuPlaylist($idplaylist);
echo "var musique=$playlist;"

?>
var refpag=null;
function chargement(){
refpage=document.getElementById("lesplay");

//refplaylists=JSON.parse(playlistjson);

refpage.innerHTML="<h4>"+musique[0].nom+"</h4>";

afficherplaylist();


}

function afficherplaylist(){
	var i;
	
	
	for(i=0;i<musique.length;i++){
		refpage.innerHTML+="<iframe width='100%' height='166' scrolling='no' frameborder='no' allow='autoplay' src='https://w.soundcloud.com/player/?url="+musique[i].lien_musique+";{}'></iframe>";
		
		}
	

	}
</script>
