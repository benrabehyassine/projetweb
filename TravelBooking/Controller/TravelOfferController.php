<?php
// TravelOfferController.php dans le dossier Controller

require_once 'C:\xampp\htdocs\TravelBooking\Model\TravelOffer.php';

class TravelOfferController {
    // Méthode pour afficher les informations d'une offre
    public function showTravelOffer($offer) {
        $offer->show();
    }
}
?>