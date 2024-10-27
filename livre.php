<?php

class Livre {
    private string $_titre;
    private int $_nbreDePages;
    private $anneeDeParution;
    private int $_prix;
    private Auteur $auteur;

    public function __construct($stitle, $nbPages, $annee, $prix, $auteur) {
        $this->_titre = $stitle;
        $this->_nbreDePages = $nbPages;
        $this->anneeDeParution = $annee;
        $this->_prix = $prix;
        $this->auteur = $auteur;
    }

    public function getTitle() {
        return $this->_titre;
    }

    public function setTitle($title) {
        $this->_titre = $title;
    }

    public function getNbreDePages() {
        return $this->_nbreDePages;
    }

    public function setNbreDePages($pages) {
        $this->_nbreDePages = $pages;
    }

    public function setAnneeDeParution($annee) {
        $this->anneeDeParution = $annee;
    }

    public function getPrix() {
        return $this->_prix;
    }

    public function setPrix($prix) {
        $this->_prix = $prix;
    }

    public function getAuteur() {
        return $this->auteur;
    }

    public function __toString() {
        return "Titre: {$this->_titre}, Pages: {$this->_nbreDePages}, Année: {$this->anneeDeParution}, Prix: {$this->_prix}, Auteur: {$this->auteur}";
    }
}

?>
 
