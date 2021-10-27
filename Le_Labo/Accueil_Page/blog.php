<?php

class blog # Déclaration de la classe
{
    public $bdd;
    public function __construct(){
        $this->bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', ''); #connexion à la base de donnée
    }
    public function nouveau_message($user, $contenu) {
        if(empty($user) or empty($contenu)) {
         	echo "argument missing";
         	return;
     	}
     	$this->bdd->exec("INSERT INTO message(user, contenu) VALUES('$user', '$contenu')");
    }
    public function lire()
    {
        $bdd = $this->bdd->query('SELECT user, contenu FROM `message` WHERE id > ((SELECT MAX(id) FROM `message`) - 10)'); #recuperation
        return $bdd->fetchAll(\PDO::FETCH_ASSOC); #transformation en liste
    }
}

$blog = new blog();


$data = $blog->lire();
#echo '<pre>' . print_r($data, true) .'</pre>';	//Show all data in db

foreach ($data as $key => $value)
{
	echo $value['user'], " ", $value['contenu'], "<br/>";
}

/*
if(array_key_exists('Envoyer', $_POST))
{
    $blog->nouveau_message(htmlspecialchars($_POST['user']), htmlspecialchars($_POST['contenu']));
    echo htmlspecialchars($_POST['user']), htmlspecialchars($_POST['contenu']);
}
#$blog->nouveau_message(htmlspecialchars($_POST['user']), htmlspecialchars($_POST['contenu']));

*/
?>

<ul id='bulleTab'> 

</ul>

<form method='POST' class="bulle">

	<table>
		
		<tr>

			<td align="right">				
				<label> Nom Utilisateur : </label>							
			</td>
			
			<td>
				<input type='text' name='user' placeholder='username' title='les caractères spéciaux ne sont pas autorisés'>
			</td>

		</tr>

		<tr>

			<td align="right">
				<label> Message : </label>							
			</td>
			
			<td>
				<input type='text' name='contenu' placeholder='message' class='case_message'>
			</td>

		</tr>

		<tr>
			<td align="right">				
			</td>
		
			<td>
				<input type='submit' name='Envoyer' value='Envoyer'>
			</td>	
		</tr>		
				
	</table>	

</form>	
