<?php
class Livre {
    private $titre;      
    private $pages;      
    private $annee;      
    private $prix;       
    private $auteur;     
    public function __construct($titre, $pages, $annee, $prix, Auteur $auteur) {
        $this->titre = $titre;
        $this->pages = $pages
        $this->annee = $annee;
        $this->prix = $prix;
        $this->auteur = $auteur;
    }
    public function getTitre() {
        return $this->titre;
    }
    public function getPages() {
        return $this->pages;
    }
    public function getAnnee() {
        return $this->annee;
    }
    public function getPrix() {
        return $this->prix;
    }
    public function getAuteur() {
        return $this->auteur;
    }
    // Méthode toString pour afficher les détails du livre
    public function __toString() {
        return 
    }
   // la méthode pour function 
    public function () {
        return $this->__toString();
    }
}
?>
 
