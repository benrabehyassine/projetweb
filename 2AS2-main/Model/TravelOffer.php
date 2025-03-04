<?php 

class TravelOffer
{   /*  Question 1.b
    public  $id;
    public  $Title;
    public  $Destination;
    public  $DepartureDate;
    public  $ReturnDate;
    public $Price;
    public $Disponible;
    public $Category;
*/

private  $id;
private  $Title;
private  $Destination;
private  $DepartureDate;
private  $ReturnDate;
private $Price;
private $Disponible;
private $Category;
    // question 3
    public function __construct($Title=null, $Destination=null,$DepartureDate=null, $ReturnDate = null, $Price = null, $Disponible = null, $Category = null)
    {
        $this->Title= $Title;
        $this->Destination= $Destination;
        $this->DepartureDate= $DepartureDate;
        $this->ReturnDate= $ReturnDate;
        $this->Price= $Price;
        $this->Disponible= $Disponible;
        $this->Category= $Category;
    }
    public function show() {
        echo '<table border=1 width="100%">
            <tr align="center">
                <td>Title</td>
                <td>Destination</td>
                <td>Departure Date</td>
                <td>Return Date</td>
                <td>Price</td>
                <td>Disponibility</td>
                 <td>Category</td>
            </tr>
            <tr>
                <td>'. $this->Title .'</td>
                <td>'. $this->Destination .'</td>
                <td>'. $this->DepartureDate .'</td>
                <td>'. $this->ReturnDate .'</td>
                <td>'. $this->Price .'</td>
                <td>'. $this->Disponible .'</td>
                 <td>'. $this->Category .'</td>
            </tr>
        </table>';
    }
     // Getters
     public function getTitle() {
        return $this->Title;
    }

    public function getDestination() {
        return $this->Destination;
    }

    public function getDepartureDate() {
        return $this->DepartureDate;
    }

    public function getReturnDate() {
        return $this->ReturnDate;
    }

    public function getPrice() {
        return $this->Price;
    }

    public function isDisponible() {
        return $this->Disponible;
    }

    public function getCategory() {
        return $this->Category;
    }

    // Setters
    public function setTitle($Title) {
        $this->Title = $Title;
    }

    public function setDestination($Destination) {
        $this->Destination = $Destination;
    }

    public function setDepartureDate($DepartureDate) {
        $this->DepartureDate = $DepartureDate;
    }

    public function setReturnDate($ReturnDate) {
        $this->ReturnDate = $ReturnDate;
    }

    public function setPrice($Price) {
        $this->Price = $Price;
    }

    public function setDisponible($Disponible) {
        $this->Disponible = $Disponible;
    }

    public function setCategory($Category) {
        $this->Category = $Category;
    }
}


?>