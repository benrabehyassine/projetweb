<?php
require_once '../../Controller/TravelOfferController.php'; // Vérifie le bon chemin

$travelController = new TravelOfferController(); // Assure-toi que cette classe existe

if (isset($_GET['Title'])) {
    $offerTitle = htmlspecialchars($_GET['Title']); // Sécuriser l'ID

    // Appeler la méthode pour supprimer l'offre
    if ($travelController->deleteTravelOffer($offerTitle)) {
        header('Location: displayOffers.php'); // Redirige après suppression
        exit();
    } else {
        echo "Erreur : la suppression de l'offre a échoué.";
    }
} else {
    echo "Aucun ID spécifié pour la suppression.";
}
?>