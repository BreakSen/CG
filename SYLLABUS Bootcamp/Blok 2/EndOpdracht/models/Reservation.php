<?php
class Reservation {
    private $reservations;

    function __construct()  {
        $this->reservations =[];
    }
    public function addReservation($reservation) {
        array_push($this->reservations, $reservation);
    }

    public function reservationData() {
        foreach($this->reservations as $customer) {
            echo"<br> ";
            echo "#Name: " . $customer->name. " ";
            echo"<br> ";
            echo "Revenue ->" . $customer->revenue() . " € ";
            /*echo"<br> ";
            echo "Pitch" . $customer->cost_pitch;
            echo"<br> ";
            echo "Person" . $customer->cost_per_person;*/
            echo"<br> ";
            echo $customer->cost_car . " Car(s) can be enter";
        }
    }

    public function cumulativeTotalIncome() {

        $totalIncome = 0;

        foreach($this->reservations as $customer) {
            $totalIncome += $customer->revenue();
        }
        return $totalIncome;
    }
    public function totalNumberOfPeople() {

        $totalNumberOfPeople = 0;

        foreach($this->reservations as $Customer) {
            $totalNumberOfPeople += $Customer-> totalPeoples();

            return $totalNumberOfPeople;
        }
    }
    /*public function totalDays() {
        
        $totalDays = 0;
        foreach($this->reservations as $Customer) {
            $totalDays += $Customer->DateDiff();

            return $totalDays;
        } 
    }
    public function avarageDays() {

        $avarageDays= $this->totalDays() / count($this->reservations);

        return $avarageDays;
    }*/
}
?>