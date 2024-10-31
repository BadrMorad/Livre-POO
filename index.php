<?php
// Inclusion des fichiers contenant les classes Auteur et Livre
include 'Auteur.php';
include 'Livre.php';

// Créer un auteur avec son prénom et son nom
$auteur = new Auteur("Stephen", "King", "1947-01-01"); // Format de date ISO recommandé

// Créer des livres en spécifiant leur titre, ISBN, année de publication, prix et auteur
$livre1 = new Livre("CA", "1138", "1986", 20, $auteur);
$livre2 = new Livre("Simetierre", "374", "1983", 16, $auteur);
$livre3 = new Livre("Le Fléau", "823", "1978", 14, $auteur);
$livre4 = new Livre("Shining", "447", "1977", 16, $auteur);

// Afficher les informations de l'auteur
echo $auteur . "<br>"; // Appelle la méthode __toString de la classe Auteur
echo "Âge: " . $auteur->age() . " ans<br>"; // Afficher l'âge de l'auteur

// Afficher les informations de chaque livre
echo $livre1 . "<br>"; // Appelle la méthode __toString de la classe Livre
echo $livre2 . "<br>";
echo $livre3 . "<br>";
echo $livre4 . "<br>";

// Ajouter les livres à la bibliographie de l'auteur
$auteur->ajouterLivre($livre1);
$auteur->ajouterLivre($livre2);
$auteur->ajouterLivre($livre3);
$auteur->ajouterLivre($livre4);

// Afficher la bibliographie de l'auteur
foreach ($auteur->bibliographie() as $livre) {
    echo $livre . "<br>"; // Affiche chaque livre de la bibliographie
}

// Débogage : afficher les détails de l'objet auteur
var_dump($auteur); // Montre les propriétés de l'objet auteur
var_dump($livre1); // Montre les propriétés de l'objet livre1
?>
