<?php

class Salle {
    private $ID;
    private $nom;
    private $capacite;
    private $disponibilite;

    public function __construct($ID, $nom, $capacite, $disponibilite) {
        $this->ID = $ID;
        $this->nom = $nom;
        $this->capacite = $capacite;
        $this->disponibilite = $disponibilite;
    }

    public function getID() {
        return $this->ID;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getCapacite() {
        return $this->capacite;
    }

    public function getDisponibilite() {
        return $this->disponibilite;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setCapacite($capacite) {
        $this->capacite = $capacite;
    }

    public function modifierDisponibilite($disponibilite) {
        $this->disponibilite = $disponibilite;
    }
}