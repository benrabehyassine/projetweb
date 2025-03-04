<?php
require_once '../../Controller/TravelOfferController.php';

$travelController = new TravelOfferController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $offer = [
        'Title' => $_POST['Title'], // Titre utilisé comme identifiant
        'Destination' => $_POST['Destination'],
        'DepartureDate' => $_POST['DepartureDate'],
        'ReturnDate' => $_POST['ReturnDate'],
        'Price' => $_POST['Price'],
        'Disponible' => isset($_POST['Disponible']) ? 1 : 0,
        'Category' => $_POST['Category']
    ];

    if ($travelController->updateTravelOfferByTitle($offer)) {
        header('Location: displayOffers.php');
        exit();
    } else {
        die("Erreur : la mise à jour de l'offre a échoué.");
    }
} else {
    die("Méthode non autorisée.");
}
?>