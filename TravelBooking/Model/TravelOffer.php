<?php
// TravelOffer.php dans le dossier Model (modifié)

class TravelOffer {
    // Attributs privés
    private $id;
    private $titre;
    private $destination;
    private $date_depart;
    private $date_retour;
    private $prix;
    private $disponible;
    private $categorie;

    // Constructeur paramétré
    public function __construct($id, $titre, $destination, $date_depart, $date_retour, $prix, $disponible, $categorie) {
        $this->id = $id;
        $this->titre = $titre;
        $this->destination = $destination;
        $this->date_depart = $date_depart;
        $this->date_retour = $date_retour;
        $this->prix = $prix;
        $this->disponible = $disponible;
        $this->categorie = $categorie;
    }

    // Méthode pour afficher les informations de l'offre
    public function show() {
        echo "<table border='1'>
                <tr>
                    <th>Title</th>
                    <th>Destination</th>
                    <th>Departure Date</th>
                    <th>Return Date</th>
                    <th>Price</th>
                    <th>Disponibility</th>
                    <th>Category</th>
                </tr>
                <tr>
                    <td>{$this->titre}</td>
                    <td>{$this->destination}</td>
                    <td>{$this->date_depart}</td>
                    <td>{$this->date_retour}</td>
                    <td>{$this->prix}</td>
                    <td>" . ($this->disponible ? 'Yes' : 'No') . "</td>
                    <td>{$this->categorie}</td>
                </tr>
              </table>";
    }
}
?>