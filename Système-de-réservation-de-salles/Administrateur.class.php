<?php
require_once "./GestionnaireSalles.class.php";
require_once "./GestionnaireReservations.class.php";
require_once "./Salle.class.php";

class Administrateur {
    public function ajouterSalle(GestionnaireSalles $gestionnaireSalle,$id, $nom, $capacite, $disponibilite) {
        $salle = new Salle($id, $nom, $capacite, $disponibilite);
        $gestionnaireSalle->ajouterSalle($salle);
    }

    public function modifierSalle(GestionnaireSalles $gestionnaireSalle, $salleId, $nouveauNom, $nouvelleCapacite) {
        $gestionnaireSalle->modifierSalle($salleId, $nouveauNom, $nouvelleCapacite);
    }

    public function supprimerSalle(GestionnaireSalles $gestionnaireSalle, $salleId) {
        $gestionnaireSalle->supprimerSalle($salleId);
    }

    public function modifierReservation(GestionnaireReservations $gestionnaireReservations,$index,$modification) {
        $gestionnaireReservations->modifierReservation($index,$modification);
    }

    public function supprimerReservation(GestionnaireReservations $gestionnaireReservations, $index) {
        $gestionnaireReservations->supprimerReservation($index);
    }
}