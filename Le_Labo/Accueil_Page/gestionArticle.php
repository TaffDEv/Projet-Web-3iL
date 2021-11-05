<?php

class Article
{
    public $bdd;
    public function __construct(){
        $this->bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', ''); #connexion à la base de donnée
    }
    public function nouveau_article($titre, $texte) {	#fonction d'ajout de message
        if(empty($titre) or empty($texte)) {
         	echo "argument missing";
         	return;
     	}
     	$this->bdd->exec("INSERT INTO articles(titre, texte) VALUES('$titre', '$texte')");
    }
    public function supprime_article($id) {	#fonction de suppression de message (Admin only)
    	$this->bdd->exec("DELETE FROM articles WHERE id = $id");
    }
}

$article = new Article();

# récupère la valeur de "q="
$q = $_REQUEST["q"];
$hint = "";

if($q === "Envoyer")
{
	$titre = $_REQUEST["T"];
	$texte = $_REQUEST["t"];
    $article->nouveau_article(htmlspecialchars($titre), htmlspecialchars($texte));
}
else if($q === "Supprimer")
{
	$id = $_REQUEST["id"];
	$article->supprime_article($id);
}

?>