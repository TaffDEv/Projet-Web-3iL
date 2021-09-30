<?php

$bdd = new PDO("mysql:host=127.0.0.1;dbname=espace_membres;charset=utf8","root","");

// $bdd--> variables pour base de données, ici il se "connecte" à  notre bdd

if(isset($_POST['submit']))
	{
		if(isset($_POST['id'],$_POST['mail'],$_POST['mail2'],$_POST['mdp'],$_POST['mdp2']))
	// Si les cases comme pseudo ne sont pas vide on ne fait rien, la ligne d'au-dessus "selectionne" les cases comme pseudo etc.. et verifie si celles-ci sont vide, si c'est le cas il affiche le message d'error (voir else)	
		{
			if(!empty($_POST['id']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) 
			{
			// Si les cases comme pseudo ne sont pas vide on ne fait rien, c'est pourquoi on ne met rien dans ces crochets
			} 
			
			else 
			{
				header('location:formulaire_inscription.php?error=Veuillez remplir tous les champs*');
			}
			$pseudo= htmlspecialchars($_POST['id']);
			$email= htmlspecialchars($_POST['mail']);
			$email2= htmlspecialchars($_POST['mail2']);
				// ici nous venous de déclarer des variables (ex: $pseudo etc..) pour qu'il n'est pas d'injection de code par l'utilisateur.
			$mdpass= sha1($_POST['mdp']);
				// le sha1 permet de chiffrer le mdp de l'utilisateur
			$mdpass2= sha1($_POST['mdp2']);	
			
			$insert = $bdd->prepare("INSERT INTO membre (pseudo,mail,motdepasse) VALUES (?,?,?)");
				// la ligne au-dessus est une requête qui indique qu'on prépare la base de données
			
			$insert->execute(array($pseudo,$email,$mdpass));
				// la ligne au-dessus indique qu'on exécute la base de données
				
			if(strlen($pseudo)<255)				
	// si la longueur de pseudo est inf. à 255
			{
				// on ne fait rien
			}
			
			else 
			{
				header('location:formulaire_inscription.php?error=Votre Pseudo doit être inférieur à 255 caractères*');
			}
		
			if(strlen($pseudo)>4)
			{
				// on ne fait rien
			}
			
			else 
			{
				header('location:formulaire_inscription.php?error=Votre Pseudo doit être supérieur à 4 caractères*');
			}
			
			if(strlen($mdpass)>6)
			{
				// on ne fait rien
			}
			
			else 
			{
				header('location:formulaire_inscription.php?error=Votre Mot de passe doit être supérieur à 6 caractères*');
			}
			
					
			if($email == $email2)
			{
				// on ne fait rien
			}		
			
			else
			{
				header('location:formulaire_inscription.php?error=Les adresses mail ne correspondent pas*');
			}
			
			if(filter_var($email, FILTER_VALIDATE_EMAIL)) //on vérifie si l'adresse mail est valide
			{
				$reqmail = $bdd->prepare("SELECT * FROM membre WHERE mail = ?"); //on vériie si l'adresse mail est déja utilisée
				$reqmail-> execute(array($email));
				$mailexist = $reqmail->rowCount();
					if($mailexist == 0)
					{
						//on ne fait rien
					}
					
					else
					{
						header('location:formulaire_inscription.php?error=Mail déjà utilisée*');
					}
			}
			
			else
			{
				header('location:formulaire_inscription.php?error=Votre adresse mail est invalide*');
			}

			
			if($mdpass == $mdpass2)
			{
				$insertmbr =$bdd->prepare("INSERT INTO membres(pseudo, mail, motdepasse) VALUES (?, ?, ?)");
				$insertmbr->execute(array($pseudo, $email, $mdpass));
				$error= "Votre Compte a bien été créer";		
			}
			
			else
			{
				header('location:formulaire_inscription.php?error=Les mots de passes ne correspondent pas*');
			}			
												
		}
	}
			
	
?>
