<?php


	$bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');

	$user = htmlspecialchars($_POST['user']);
	$contenu = htmlspecialchars($_POST['contenu']);

	echo $user, $contenu;

	$bdd->exec("INSERT INTO message(user, contenu) VALUES('$user', '$contenu')");

	
?>
