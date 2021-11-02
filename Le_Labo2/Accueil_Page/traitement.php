<?php

	$bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');

	$user = htmlspecialchars($_POST['user']);
	$contenu = htmlspecialchars($_POST['contenu']);

	/*echo $user, $contenu;*/
	if(!empty($user) or !empty($contenu)){

		if(strlen($user)>4 AND strlen($user)<255){	

			/*echo $user;*/
			$bdd->exec("INSERT INTO message(user, contenu) VALUES('$user', '$contenu')");

		}
		
		else {	
	
			header('location:Accueil_labo_V1.1.php?error=Votre Pseudo doit être supérieur à 4 caractères et inférieur à 255');
		}

	}

	else{
		echo "argument missing";
	}
	
	

	/*$bdd->exec("INSERT INTO message(user, contenu) VALUES('$user', '$contenu')");*/

	
?>
