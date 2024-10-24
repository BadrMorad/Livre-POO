<?php

class Auteur {
    private string  $prenom;
    private string  $nom;

    //Constructeur 
    public function __construct($prenom, $nom) {
        $this->prenom =$prenom;
        $this->nom =$nom;
    }
    //Getter pour le prénom 
    public function getPrenom() {
        return $this->prenom;
    }
    // Getter pour le nom 
    public function getNom() {
        return $this->nom;

    }
//Méthode toString() pour afficher le nom complet de l'auteur
public function __toString() {  
return $this->prenom . " " . $this->nom;

}
}
echo "helo

"
?>