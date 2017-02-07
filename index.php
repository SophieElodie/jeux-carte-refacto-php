<?php 
$tabimg =["img/ane.jpg", "img/chat.jpg", "img/chien.jpg", "img/lama.jpg", "img/lapins.jpg", 
"img/lionne.jpg", "img/ours.jpg", "img/ane.jpg", "img/chat.jpg", "img/chien.jpg", "img/lama.jpg", 
"img/lapins.jpg", "img/lionne.jpg", "img/ours.jpg"];

shuffle($tabimg);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Jeux-des-paires</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Kumar+One" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="theme5.css">
	<script type="text/javascript">
	var tab =[<?php foreach ($tabimg as $casetabimg){
		echo '"'.$casetabimg.'",';
	} ?>]; </script>
	
</head>
	<body>
		<div id="titre">
		<h1>Jeux des paires</h1>
		</div>
		<p>Règles du jeu: Afficher toutes les paires pour gagner</p>
		<p>Vous avez trouvé <span id="paires">0</span> paires cachées</p>
		<span id="chronotime">00:00</span>
		<div id="photo"> 

<?php
$dos= "img/dos.png";
for($i=0; $i<=13 ;$i++)
echo '<img src ="'.$dos.'" class="photo" onclick="choisir('.$i.')" draggable="false"/>';
?>

		  <!--ici javascript--> 
		</div>
		<script type="text/javascript" src="script.js"></script>
	</body>
</html>

