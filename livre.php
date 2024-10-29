<?php

class Livre {
    private string $_titre;            // Titre du livre
    private int $_nbreDePages;        // Nombre de pages dans le livre
    private $anneeDeParution;         // Année de parution du livre
    private int $_prix;                // Prix du livre
    private Auteur $auteur;            // Auteur du livre

    // Constructeur 
    public function __construct($stitle, $nbPages, $annee, $prix, $auteur) {
        $this->_titre = $stitle;            // Initialise le titre
        $this->_nbreDePages = $nbPages;     // Initialise le nombre de pages
        $this->anneeDeParution = $annee;    // Initialise l'année de parution
        $this->_prix = $prix;                // Initialise le prix
        $this->auteur = $auteur;            // Initialise l'auteur
        $auteur->ajouterLivre($this);       // Ajoute ce livre à la bibliographie de l'auteur
    }

    // Getter pour le titre
    public function getTitle() {
        return $this->_titre; // Retourne le titre
    }

    // Setter pour le titre
    public function setTitle($title) {
        $this->_titre = $title; // Définit le titre
    }

    // Getter pour le nombre de pages
    public function getNbreDePages() {
        return $this->_nbreDePages; // Retourne le nombre de pages
    }

    // Setter pour le nombre de pages
    public function setNbreDePages($pages) {
        $this->_nbreDePages = $pages; // Définit le nombre de pages
    }

    // Setter pour l'année de parution
    public function setAnneeDeParution($annee) {
        $this->anneeDeParution = $annee; // Définit l'année de parution
    }

    // Getter pour le prix
    public function getPrix() {
        return $this->_prix; // Retourne le prix
    }

    // Setter pour le prix
    public function setPrix($prix) {
        $this->_prix = $prix; // Définit le prix
    }

    // Getter pour l'auteur
    public function getAuteur() {
        return $this->auteur; // Retourne l'auteur
    }

    // Méthode __toString() pour afficher les détails du livre
    public function __toString() {
        return "Titre: {$this->_titre}, Pages: {$this->_nbreDePages}, Année: {$this->anneeDeParution}, Prix: {$this->_prix}, Auteur: {$this->auteur}"; 
    }
}

?>

