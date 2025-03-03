<?php
require_once '../Controller/UserController.php'; // Vérifie le bon chemin

$userController = new UserController(); // Assure-toi que cette classe existe

if (isset($_GET['id'])) {
    $userId = intval($_GET['id']); // Sécuriser l'ID

    if ($userController->deleteUser($userId)) {
        header('Location: ListUsers.php'); // Redirige après suppression
        exit();
    } else {
        echo "Erreur : la suppression a échoué.";
    }
} else {
    echo "Aucun ID spécifié pour la suppression.";
}

?>