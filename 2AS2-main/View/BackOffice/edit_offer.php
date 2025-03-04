<?php
require_once '../../Controller/TravelOfferController.php';  // Inclure le contrôleur des offres

$travelController = new TravelOfferController();

if (isset($_GET['Title'])) {
    $offerTitle = htmlspecialchars($_GET['Title']);  // Sécuriser le titre
    $offer = $travelController->getTravelOfferByTitle($offerTitle);  // Utiliser getTravelOfferByTitle

    if (!$offer) {
        die("Offre introuvable !");
    }
} else {
    die("Aucun titre fourni !");
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier une Offre</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Modifier l'offre</h2>
        <form action="update_offer.php" method="post">
            <!-- Champ caché pour le titre de l'offre -->
            <input type="hidden" name="Title" value="<?php echo $offer['Title']; ?>">

            <!-- Champ Titre -->
            <div class="mb-3">
                <label for="title" class="form-label">Titre :</label>
                <input type="text" class="form-control" id="title" name="Title" value="<?php echo isset($offer['Title']) ? htmlspecialchars($offer['Title']) : ''; ?>" required>
            </div>

            <!-- Champ Destination -->
            <div class="mb-3">
                <label for="destination" class="form-label">Destination :</label>
                <input type="text" class="form-control" id="destination" name="Destination" value="<?php echo isset($offer['Destination']) ? htmlspecialchars($offer['Destination']) : ''; ?>" required>
            </div>

            <!-- Champ Date de Départ -->
            <div class="mb-3">
                <label for="departure_date" class="form-label">Date de Départ :</label>
                <input type="date" class="form-control" id="departure_date" name="DepartureDate" value="<?php echo isset($offer['DepartureDate']) ? htmlspecialchars($offer['DepartureDate']) : ''; ?>" required>
            </div>

            <!-- Champ Date de Retour -->
            <div class="mb-3">
                <label for="return_date" class="form-label">Date de Retour :</label>
                <input type="date" class="form-control" id="return_date" name="ReturnDate" value="<?php echo isset($offer['ReturnDate']) ? htmlspecialchars($offer['ReturnDate']) : ''; ?>" required>
            </div>

            <!-- Champ Prix -->
            <div class="mb-3">
                <label for="price" class="form-label">Prix :</label>
                <input type="number" class="form-control" id="price" name="Price" step="0.01" value="<?php echo isset($offer['Price']) ? htmlspecialchars($offer['Price']) : ''; ?>" required>
            </div>

            <!-- Champ Disponibilité -->
            <div class="mb-3">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="disponible" name="Disponible" <?php echo (isset($offer['Disponible']) && $offer['Disponible'] == 1) ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="disponible">Disponible</label>
                </div>
            </div>

            <!-- Champ Catégorie -->
            <div class="mb-3">
                <label for="category" class="form-label">Catégorie :</label>
                <select class="form-control" id="category" name="Category" required>
                    <option value="adventure" <?php echo (isset($offer['Category']) && $offer['Category'] == 'adventure') ? 'selected' : ''; ?>>Adventure</option>
                    <option value="relaxation" <?php echo (isset($offer['Category']) && $offer['Category'] == 'relaxation') ? 'selected' : ''; ?>>Relaxation</option>
                    <option value="culture" <?php echo (isset($offer['Category']) && $offer['Category'] == 'culture') ? 'selected' : ''; ?>>Culture</option>
                </select>
            </div>

            <!-- Bouton de soumission -->
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</body>
</html>