<?php

require_once "./Salle.class.php";

class GestionnaireSalles extends Salle{
    private $listeSalles = [];

    public function ajouterSalle(Salle $salle) {
        $this->listeSalles[] = $salle;
    }

    public function modifierSalle($salleId, $nouveauNom, $nouvelleCapacite) {
        foreach ($this->listeSalles as $salle) {
            if ($salle->getID() === $salleId) {
                $salle->setNom($nouveauNom);
                $salle->setCapacite($nouvelleCapacite);
            }
        }
    }

    public function supprimerSalle($salleId) {
        foreach ($this->listeSalles as $key => $salle) {
            if ($salle->getID() === $salleId) {
                unset($this->listeSalles[$key]);
                break;
            }
        }
    }

    public function consulterDisponibilite($salleId) {
        foreach ($this->listeSalles as $salle) {
            if ($salle->getID() === $salleId) {
                $salle->getDisponibilite();
                break;
            }
        }
    }
}