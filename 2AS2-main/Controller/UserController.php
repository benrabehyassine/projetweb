<?php   
require '../Config.php';

class UserController{

public function getUsers(){
 $db= config::getConnexion(); 
 $sql = "SELECT * FROM user";
  try {

$query = $db->prepare($sql);
$query ->execute();
return $query->fetchAll();


  } catch (Exception $e) {
    die('Erreur: ' . $e->getMessage());
  }
}

function addUser($user){
$db= config::getConnexion();
$req = "INSERT INTO user(email,pwd) VALUES(:email,:pwd)"    ;
try {
    $query = $db->prepare($req);
    $query ->execute ([
'email'=> $user['email'],
'pwd'=> $user['pwd']
    ]);
    
}
catch (Exception $e) {
  die('Erreur: ' . $e->getMessage());
}
}
public function deleteUser($userId) {
  $db = config::getConnexion(); 
  $req = "DELETE FROM user WHERE id = :id";
  try {
      $query = $db->prepare($req);
      $query->execute(['id' => $userId]);
      return true;
  } catch (Exception $e) {
      die('Erreur: ' . $e->getMessage());
  }
}
public function getUserById($userId){
  $db = config::getConnexion();
  $sql = "SELECT * FROM user WHERE id = :id";  // Requête modifiée pour filtrer par ID
  try {
      $query = $db->prepare($sql);
      $query->execute(['id' => $userId]);
      return $query->fetch();  // Récupère un seul utilisateur
  } catch (Exception $e) {
      die('Erreur: ' . $e->getMessage());
  }
}
public function updateUser($userId, $email, $pwd) {
  $db = config::getConnexion();
  $sql = "UPDATE user SET email = :email, pwd = :pwd WHERE id = :id";  // Modification de la requête pour inclure email et mot de passe

  try {
      $query = $db->prepare($sql);
      $query->execute([
          'email' => $email,
          'pwd' => $pwd,
          'id' => $userId
      ]);
      return true;  // Retourne true si la mise à jour réussit
  } catch (Exception $e) {
      die('Erreur: ' . $e->getMessage());
  }
}



}







?>