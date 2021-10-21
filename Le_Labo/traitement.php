<?php

$bdd = new PDO("mysql:host=127.0.0.1;dbname=blog;charset=utf8","root","");

// $bdd--> variables pour base de données, ici il se "connecte" à  notre bdd

if(isset($_POST['submit']))
	{
		if(isset($_POST['identifiant'],$_POST['contenu']))
	// Si les cases comme pseudo ne sont pas vide on ne fait rien, la ligne d'au-dessus "selectionne" les cases comme pseudo etc.. et verifie si celles-ci sont vides, si c'est le cas il affiche le message d'error (voir else)	
		{
			if(!empty($_POST['identifiant']) AND !empty($_POST['contenu']))
			{
			// Si les cases comme pseudo ne sont pas vide on ne fait rien, c'est pourquoi on ne met rien dans ces crochets
			} 
			
			else 
			{
				header('location:formulaire_inscription.php?error=Veuillez remplir tous les champs*');
				return;
			}

			$pseudo= htmlspecialchars($_POST['identifiant']);
			$message= htmlspecialchars($_POST['contenu']);
						
			$insert = $bdd->prepare("INSERT INTO message (identifiant,contenu) VALUES (?,?)");
				// la ligne au-dessus est une requête qui indique qu'on prépare la base de données
			
			$insert->execute(array($pseudo,$message));
				// la ligne au-dessus indique qu'on exécute la base de données
				
			if(strlen($pseudo) > 256)				
	// si la longueur de pseudo est inf. à 255
			{
				header('location:formulaire_inscription.php?error=Votre Pseudo doit être inférieur à 255 caractères*');
			}
			
					
			if(strlen($pseudo) < 5 )
			{
				header('location:formulaire_inscription.php?error=Votre Pseudo doit être supérieur à 4 caractères*');
			}						
												
		}
	}
			
	
?>
