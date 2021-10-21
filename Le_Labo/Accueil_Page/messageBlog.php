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
        $bdd = $this->bdd->query('SELECT * from blog'); #recuperation
        return $bdd->fetchAll(\PDO::FETCH_ASSOC); #transformation en liste
    }
}


$blog = new blog();
echo htmlspecialchars($_POST['user']), htmlspecialchars($_POST['contenu']);
$blog->nouveau_message(htmlspecialchars($_POST['user']), htmlspecialchars($_POST['contenu']));
echo 'test1', 'test2';
	/*

$blog = new blog();
$blog->nouveau_message('Welp2', 'davai1');

$blogmess = $blog->lire();
print_r($blogmess);

*/
?>
