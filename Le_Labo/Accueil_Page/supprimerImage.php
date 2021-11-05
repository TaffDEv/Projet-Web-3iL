<?php

$index=$_REQUEST["id"];

$document = new DOMDocument;

$document->load("data.xml" );
$document->formatOutput = TRUE;
$elements = $document->documentElement;
$item = $elements->getElementsByTagName('IMG')->item($index);
$src = $item->nodeValue;
$elements->removeChild($item->parentNode);

$target_dir = $_SERVER['DOCUMENT_ROOT'] . '/Accueil_Page/';
$target_file = $target_dir . $src;
unlink($target_dir . $src);

print $document->save("data.xml");

echo "good"

?>