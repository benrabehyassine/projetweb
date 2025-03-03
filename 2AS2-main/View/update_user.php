<?php
require_once '../Controller/UserController.php';  // Vérifie que le fichier est bien inclus

$userController = new UserController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = intval($_POST['id']); // Sécuriser l’ID
    $email = htmlspecialchars($_POST['email']);
    $pwd = htmlspecialchars($_POST['pwd']);

    if ($userController->updateUser($userId, $email, $pwd)) {
        header("Location: ListUsers.php"); // Redirige vers la liste des utilisateurs après modification
        exit(); // Assurez-vous que le script s'arrête ici
    } else {
        echo "Erreur lors de la mise à jour.";
    }
}
?>
