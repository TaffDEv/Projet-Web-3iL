<?php

class Articles # Déclaration de la classe
{
    public $bdd;
    public function __construct(){
        $this->bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', ''); #connexion à la base de donnée
    }
    public function nouveau_Article($contenuArticles) {
        if(empty($contenuArticles)) {
         	echo "argument missing";
         	return;
     	}
     	$this->bdd->exec("INSERT INTO articleslabo(contenuArticles) VALUES('$contenuArticles')");
    }
    public function supprime_Article($id) {
    	$this->bdd->exec("DELETE FROM message WHERE id = $id");
    }
    public function Lire_Article()
    {
        $bdd = $this->bdd->query('SELECT id, contenuArticles FROM `articleslabo`');# WHERE id > ((SELECT MAX(id) FROM `message`) - 10)'); #recuperation
        return $bdd->fetchAll(\PDO::FETCH_ASSOC); #transformation en liste
    }
}

?>