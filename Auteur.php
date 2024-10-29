<?php

class Auteur {
    private string $prenom;
    private string $nom;
    private array $livres;
    

    // Constructeur 
    public function __construct($prenom, $nom) {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->livres = array();
    }

    // Getter pour le prénom 
    public function getPrenom() {
        return $this->prenom;
    }

    // Getter pour le nom 
    public function getNom() {
        return $this->nom;
    }

    // Méthode toString() pour afficher le nom complet de l'auteur
    public function __toString() {  
        return $this->prenom . " " . $this->nom;
    }
    public function bibiliographie(){
        
    }
}

// Exemple d'utilisation
$auteur = new Auteur("Stephen", "King");
echo $auteur; // Affiche : Stephen King
?>