<?php
require_once '../Controller/UserController.php';  // Vérifie que le fichier est bien inclus

$userController = new UserController();

if (isset($_GET['id'])) {
    $userId = intval($_GET['id']);  // Sécuriser l’ID
    $user = $userController->getUserById($userId);  // Utilise getUserById

    if (!$user) {
        die("Utilisateur introuvable !");
    }
} else {
    die("Aucun ID fourni !");
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier Utilisateur</title>
</head>
<body>
    <h2>Modifier l'utilisateur</h2>
    <form action="update_user.php" method="post">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">

        <label>Email :</label>
        <input type="email" name="email" value="<?php echo isset($user['email']) ? htmlspecialchars($user['email']) : ''; ?>" required>

        <label>Mot de passe :</label>
        <input type="password" name="pwd" value="<?php echo isset($user['pwd']) ? htmlspecialchars($user['pwd']) : ''; ?>" required>

        <button type="submit">Modifier</button>
    </form>
</body>
</html>
