<!doctype html>
<HTML>
	<HEAD>
		<TITLE>FORMULAIRE</TITLE>
		<meta charset="utf8" />
	</HEAD>
	<BODY>
		<?php 
		$nom = $_POST["Nom"]; 
		$prenom = $_POST['Prenom'];
		
		
		
		if(empty($nom)|| empty($prenom)) //$nom ||$prenom contient une chaine vide
		{ 
			echo "Vous devez saisir le nom et le prénom."; 
			exit(); 
		} 
		
		echo "<H4>Bonjour ";
		
	//*********** Debut Pour question 5.**********	
	 
		if(!empty($_POST['sexe']))
		{
			
			$sexe=$_POST['sexe'];
			if($sexe=="Homme")
				echo "Monsieur ";
				else  echo "Mademoiselle/Madame ";	
				
		}
		
		//*********** Fin Pour question 5.**********	
		
		echo "$prenom $nom </H4> ";
		
		$age=$_POST['Age'];
		if(!empty($age))
		echo "<H4>Vous avez $age ans</H4> ";
		
		$textarea=$_POST['commentaire'];
		if(!empty($textarea))
		echo "<H4>Vous vous décrivez comme: $textarea </H4>";
		
		if(isset($_POST['langues']))/*ici, on doit tester directement sur $_POST car
		* si aucun chechbox n'est coché, aucune donnée n'est transmise au serveur
		* (il n'y a pas une case dans $_POST)*/
		{
			if (isset($_POST['langues']))
			{
				$langues=$_POST['langues'];
			//echo gettype($langues);
			echo "<H4>Les langues que vous parlez sont:</H4>";
		/*for($i=0;$i<count($langues);$i++)
		 echo "<ul><li><H4>$langues[$i]</H4></li></ul>";*/
		 	echo "<ul>";
		 	foreach($langues as $elem)
		 	echo"<li><H4>$elem</H4></li>";
		 	echo "</ul>";
			}
			
		}
		
		$langue=$_POST['langue'];
		if(!empty($langue))
		echo "<H4>Votre langue natale est: $langue</H4> <BR>";

		
		
		?> 
	</BODY>
</HTML>