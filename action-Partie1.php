<!doctype html>
<HTML>
	<HEAD>
		<TITLE>FORMULAIRE</TITLE>
		<meta  charset="utf8" />
	</HEAD>
	<BODY>
		<?php 
		$nom = $_GET["Nom"]; 
		$prenom = $_GET['Prenom'];
	
		
		if(empty($nom)|| empty($prenom)) //$nom ||$prenom contient une chaine vide, donc empty retourne true
		{ 
			echo "Vous devez saisir le nom et le prénom."; 
			exit(); 
		} 
		
		
		echo "<H4>Bonjour $prenom $nom</H4> ";
		$age=$_GET['Age'];
		if(!empty($age))
		echo "<H4>Vous avez $age ans</H4> ";
		/*2.b: pour les champs obligatoires, il est plus efficace de les mettre "required"
		dans HTML5 et annuler donc la vérification de saisie côté serveur. Mais pour les champs 
		qui ne sont pas (par conception) obligatoires, on aura besoin parfois de faire certaines
		vérifications de saisie côté serveur*/

		
		?> 
	</BODY>
</HTML>