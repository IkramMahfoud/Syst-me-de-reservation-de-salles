<?php
require_once "./Salle.class.php";
require_once "./Utilisateur.class.php";

class Utilisateur {
  public function consulterDisponibilite(GestionnaireSalles $gestionnaireSalle,$salleId) {
      echo "disponibilité pour la salle " . $salleId . " est " . $gestionnaireSalle->consulterDisponibilite($salleId);
  }

  public function reserverSalle(GestionnaireReservations $gestionnaireReservations, $salleId) {
      $gestionnaireReservations->ajouterReservation($salleId);
  }

  public function afficherReservations(GestionnaireReservations $gestionnaireReservations) {
      $gestionnaireReservations->afficherReservations();
  }
}

