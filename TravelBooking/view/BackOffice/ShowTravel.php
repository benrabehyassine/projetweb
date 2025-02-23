<?php
// showTravelOffer.php dans le dossier BackOffice

require_once 'C:\xampp\htdocs\TravelBooking\Model\TravelOffer.php';

// Création d'une offre de voyage
$offre1 = new TravelOffer();
$offre1->id = 1;
$offre1->titre = "Discover Paris";
$offre1->destination = "Paris, France";
$offre1->date_depart = "2024-10-15";
$offre1->date_retour = "2024-10-22";
$offre1->prix = 1200;
$offre1->disponible = true;
$offre1->categorie = "Cultural";

// Affichage des informations avec var_dump()
var_dump($offre1);

// Affichage des informations avec la méthode show()
$offre1->show();
?>