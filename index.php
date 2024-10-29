<?php
include 'Auteur.php';
include 'Livre.php';
// Créer un auteur
$auteur = new Auteur("Stephen", "King");
// Créer des livres
$livre1 = new Livre("CA", "1138", "1986", 20, $auteur);
$livre2 = new Livre("Simetierre", "374", "1983", 16, $auteur);
$livre3 = new Livre("Le Fléau", "823", "1978", 14, $auteur);
$livre4 = new Livre("Shining", "447", "1977", 16, $auteur);
// Afficher les informations de l'auteur
echo $auteur . "<br>";
// Afficher les livres
echo $livre1 . "<br>";
echo $livre2 . "<br>";
echo $livre3 . "<br>";
echo $livre4 . "<br>";
// Ajouter les livres à un tableau
$livres = array($livre1, $livre2, $livre3, $livre4);
array_push($livres, "autre livre"); // Ajoute une chaîne de caractères comme "autre livre"
// Afficher la bibliographie de l'auteur
echo $auteur->bibliographie();
var_dump($auteur);
var_dump($livre1);
?>