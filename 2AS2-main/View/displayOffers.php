<?php
require_once '../Controller/TravelOfferController.php';   // Inclure le contrôleur

$travelController = new TravelOfferController();
$offers = $travelController->getTravelOffers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Offers</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">List of Travel Offers</h2>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    
                    <th>Title</th>
                    <th>Destination</th>
                    <th>Departure Date</th>
                    <th>Return Date</th>
                    <th>Price</th>
                    <th>Availability</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
            <?php
if (!isset($offers) || empty($offers)) {
    echo "<p>Aucune offre trouvée dans la base de données.</p>";
} else { 
    foreach ($offers as $offer) { ?>
        <tr>
            <td><?php echo htmlspecialchars($offer['Title']); ?></td>
            <td><?php echo htmlspecialchars($offer['Destination']); ?></td>
            <td><?php echo htmlspecialchars($offer['DepartureDate']); ?></td>
            <td><?php echo htmlspecialchars($offer['ReturnDate']); ?></td>
            <td><?php echo htmlspecialchars($offer['Price']); ?></td>
            <td><?php echo htmlspecialchars($offer['Disponible']); ?></td>
            <td><?php echo htmlspecialchars($offer['Category']); ?></td>

        
        </tr>
    <?php }
}
?>
            </tbody>
        </table>
    </div>
</body>
</html>
