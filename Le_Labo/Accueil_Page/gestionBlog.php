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
        $bdd = $this->bdd->query('SELECT user, contenu FROM `message`');# WHERE id > ((SELECT MAX(id) FROM `message`) - 10)'); #recuperation
        return $bdd->fetchAll(\PDO::FETCH_ASSOC); #transformation en liste
    }
}

$blog = new blog();


#foreach ()
#{
#	echo $value['user'], " ", $value['contenu'], "<br/>";
#}

// get the q parameter from URL
$q = $_REQUEST["q"];
$hint = "";
// lookup all hints from array if $q is different from ""
$hint = $blog->lire();
// Output "no suggestion" if no hint was found or output correct values
echo json_encode($hint === "" ? "no msg found" : $hint);

?>