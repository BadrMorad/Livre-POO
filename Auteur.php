<?php

class Auteur {
    private string $prenom;  // Prénom de l'auteur
    private string $nom;     // Nom de l'auteur
    private DateTime $dateNaissance; 
    private array $livres;   // Tableau pour stocker les livres de l'auteur

    // Constructeur 
    public function __construct($prenom, $nom, $dateNaissance) {
        $this->prenom = $prenom; // Initialise le prénom
        $this->nom = $nom;       // Initialise le nom
        $this->dateNaissance = new DateTime($dateNaissance); 
        $this->livres = array(); // Initialise le tableau des livres
    }

    // Getter pour le prénom 
    public function getPrenom() {
        return $this->prenom; // Retourne le prénom
    }

    // Getter pour le nom 
    public function getNom() {
        return $this->nom; // Retourne le nom
    }

    // Getter pour la date de naissance 
    public function getDateNaissance() {
        return $this->dateNaissance; 
    }

    // Méthode pour calculer l'âge de l'auteur
    public function age() {
        $aujourdhui = new DateTime(); 
        $age = $aujourdhui->diff($this->dateNaissance); 
        return $age->y; 
    }

    // Méthode __toString() pour afficher le nom complet de l'auteur
    public function __toString() {  
        return $this->prenom . " " . $this->nom; // Formate le nom complet
    }

    // Méthode pour ajouter un livre à la bibliographie
    public function ajouterLivre(Livre $livre) {
        $this->livres[] = $livre; 
    }

    // Méthode pour obtenir la bibliographie de l'auteur
    public function bibliographie() {
        foreach ($this->livres as $livre) {
            return $livre; // Retourne le premier livre (à revoir)
        }
    }
   
}
?>
