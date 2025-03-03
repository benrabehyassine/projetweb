<?php
// Inclure le fichier TravelOfferController.php
require_once __DIR__ . '/../../Controller/TravelOfferController.php';

// Instancier le contrôleur
$travelController = new TravelOfferController();

// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier que tous les champs obligatoires sont présents dans $_POST
    $requiredFields = ['Title', 'Destination', 'DepartureDate', 'ReturnDate', 'Price', 'Category'];
    $missingFields = [];

    foreach ($requiredFields as $field) {
        if (!isset($_POST[$field]) || empty($_POST[$field])) {
            $missingFields[] = $field;
        }
    }

    // Si des champs obligatoires sont manquants, afficher un message d'erreur
    if (!empty($missingFields)) {
        die("Les champs suivants sont obligatoires et doivent être remplis : " . implode(', ', $missingFields));
    }

    // Récupérer les données du formulaire
    $offer = [
        'Title' => $_POST['Title'],
        'Destination' => $_POST['Destination'],
        'DepartureDate' => $_POST['DepartureDate'],
        'ReturnDate' => $_POST['ReturnDate'],
        'Price' => $_POST['Price'],
        'Disponible' => isset($_POST['Disponible']) ? 1 : 0,
        'Category' => $_POST['Category']
    ];

    // Ajouter l'offre de voyage
    if ($travelController->addTravelOffer($offer)) {
        header("Location: displayOffers.php");
        exit();
    } else {
        die("Une erreur s'est produite lors de l'ajout de l'offre.");
    }
}
?>