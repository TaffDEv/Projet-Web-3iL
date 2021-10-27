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
}

$blog = new blog();

if(array_key_exists('Envoyer', $_POST))
{
    $blog->nouveau_message(htmlspecialchars($_POST['user']), htmlspecialchars($_POST['contenu']));
    #echo htmlspecialchars($_POST['user']), htmlspecialchars($_POST['contenu']);
}

?>

<ul id='bulleTab'> 

</ul>

<iframe name="votar" style="display:none;"></iframe>

<form method='POST' class="bulle"  target="votar">

	<table>
		
		<tr>

			<td align="right">				
				<label> Nom Utilisateur : </label>							
			</td>
			
			<td>
				<input type='text' name='user' placeholder='Pseudo' title='les caractères spéciaux ne sont pas autorisés'>
			</td>

		</tr>

		<tr>

			<td align="right">
				<label> Message : </label>							
			</td>
			
			<td>
				<textarea  type='text' name='contenu' placeholder='message' class='case_message'> </textarea>
			</td>

		</tr>

		<tr>
			<td align="right">				
			</td>
		
			<td>
				<input type='submit' name='Envoyer' value='Envoyer' style="padding: 10px;">
			</td>	
		</tr>		
				
	</table>	

</form>	
