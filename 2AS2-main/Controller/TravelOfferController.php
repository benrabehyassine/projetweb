<?php 
require 'C:\xampp\htdocs\2AS2-main\Config.php';
class TravelOfferController 
{
    
    public function addTravelOffer($offer) {
        $db = config::getConnexion();
        $sql = "INSERT INTO offer (Title, Destination, DepartureDate, ReturnDate, Price, Disponible, Category) 
                VALUES (:Title, :Destination, :DepartureDate, :ReturnDate, :Price, :Disponible, :Category)";

        try {
            $query = $db->prepare($sql);
            $query->execute([
                'Title' => $offer['Title'],
                'Destination' => $offer['Destination'],
                'DepartureDate' => $offer['DepartureDate'],
                'ReturnDate' => $offer['ReturnDate'],
                'Price' => $offer['Price'],
                'Disponible' => $offer['Disponible'],
                'Category' => $offer['Category']
            ]);
            return true; // Succès
        } catch (PDOException $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public function getTravelOffers() {
        $db = config::getConnexion();
        $sql = "SELECT * FROM offer"; 

        try {
            $query = $db->prepare($sql);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC); // Récupérer les données sous forme de tableau associatif
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }


}



