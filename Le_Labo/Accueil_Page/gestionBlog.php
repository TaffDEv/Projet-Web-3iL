<?php

class blog
{
    public $bdd;
    public function __construct(){
        $this->bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', ''); #connexion à la base de donnée
    }
    public function nouveau_message($user, $contenu) {	#fonction d'ajout de message
        if(empty($user) or empty($contenu)) {
         	echo "argument missing";
         	return;
     	}
     	$this->bdd->exec("INSERT INTO message(user, contenu) VALUES('$user', '$contenu')");
    }
    public function supprime_message($id) {	#fonction de suppression de message (Admin only)
    	$this->bdd->exec("DELETE FROM message WHERE id = $id");
    }
    public function lire()
    {
        $bdd = $this->bdd->query("SELECT id, user, contenu FROM `message`");
        return $bdd->fetchAll(\PDO::FETCH_ASSOC); #transformation en liste
    }
}
  

$blog = new blog();

# récupère la valeur de "q="
$q = $_REQUEST["q"];
$hint = "";

if($q === "Lire")
{
	$hint = $blog->lire();
	# sortie suivant si un message est trouvé ou non
	echo json_encode($hint === "" ? "no msg found" : $hint);
}
else if($q === "Envoyer")
{
	$user = $_REQUEST["u"];
	$contenu = $_REQUEST["c"];
    $blog->nouveau_message(htmlspecialchars($user), htmlspecialchars($contenu));
}
else if($q === "Supprimer")
{
	$id = $_REQUEST["id"];
	$blog->supprime_message($id);
}

?>