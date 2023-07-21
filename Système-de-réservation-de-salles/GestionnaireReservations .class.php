<?php

require_once "./Salle.class.php";

class GestionnaireReservations {
    private $listeReservations = [];


    public function ajouterReservation($salleId) {
        $reservation = "this salle is reserved : " . $salleId;
        $this->listeReservations[] = $reservation;
    }

    public function modifierReservation($index,$modification) {
        $this->listeReservations[$index] = $modification;
    }

    public function supprimerReservation($index) {
        unset($this->listeReservations[$index]);
    }

    public function afficherReservations() {
        foreach ($this->listeReservations as $reservation) {
            echo $reservation;
        }
    }

}

$gestionnaireSalles = new GestionnaireSalles();
$gestionnaireSalles->ajouterSalle(1, "Salle A", 10, false);
$gestionnaireSalles->ajouterSalle(2, "Salle B", 8, true);
$gestionnaireSalles->modifierSalle(1, "Salle A", 15, false);
$gestionnaireSalles->consulterDisponibilite(new Utilisateur());