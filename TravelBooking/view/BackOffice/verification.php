<?php
// Verification.php dans le dossier BackOffice

require_once 'C:\xampp\htdocs\TravelBooking\Model\TravelOffer.php';
require_once 'C:\xampp\htdocs\TravelBooking\Controller\TravelOfferController.php';

// Récupération des données du formulaire
$title = $_POST['title'];
$destination = $_POST['destination'];
$departure_date = $_POST['departure_date'];
$return_date = $_POST['return_date'];
$price = $_POST['price'];
$available = isset($_POST['available']) ? true : false;
$category = $_POST['category'];

// Création de l'objet offre1
$offre1 = new TravelOffer(1, $title, $destination, $departure_date, $return_date, $price, $available, $category);

// Affichage des informations avec var_dump()
var_dump($offre1);

// Affichage des informations avec la méthode showTravelOffer()
$controller = new TravelOfferController();
$controller->showTravelOffer($offre1);
?>