<?php

$bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
$hint = $bdd->query("SELECT id, titre, texte FROM `articles`")->fetchAll(\PDO::FETCH_ASSOC);
echo json_encode($hint === "" ? "no msg found" : $hint);

?>