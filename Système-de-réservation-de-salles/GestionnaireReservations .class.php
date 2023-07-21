<?php

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
