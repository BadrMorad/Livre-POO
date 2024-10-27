<?php
include 'Auteur.php';
include 'Livre.php';

$auteur = new Auteur("Stephen", "King");
$livre1 = new Livre("ÇA", "1138", "1986", "20", $auteur);
$livre2 = new Livre("Simetierre", "374", "1983", "16", $auteur);
$livre3 = new Livre("Le Fléau", "823", "1978", "14", $auteur);
$livre4 = new Livre("Shining", "447", "1977", "16", $auteur);

echo $auteur . "<br>";
echo $livre1;
echo $livre2;
echo $livre3;
echo $livre4 . "<br>";

$livres = array($livre1, $livre2, $livre3, $livre4);
array_push($livres, "autre livre"); 

var_dump($auteur);
var_dump($livre1); 
?>