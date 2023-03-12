<?php
class Profil {
    private $nom;
    private $prenom;
    private $age;
    private $ville;

    // Constructeur de la classe
    public function __construct($nom, $prenom, $age, $ville) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->ville = $ville;
    }

    // Getter pour le nom
    public function getNom() {
        return $this->nom;
    }

    // Setter pour le nom
    public function setNom($nom) {
        $this->nom = $nom;
    }

    // Getter pour le prénom
    public function getPrenom() {
        return $this->prenom;
    }

    // Setter pour le prénom
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    // Getter pour l'âge
    public function getAge() {
        return $this->age;
    }

    // Setter pour l'âge
    public function setAge($age) {
        $this->age = $age;
    }

    // Getter pour la ville
    public function getVille() {
        return $this->ville;
    }

    // Setter pour la ville
    public function setVille($ville) {
        $this->ville = $ville;
    }
}
?>