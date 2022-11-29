<?php

//use Customer as GlobalCustomer;

class Customer {
    public $name;
    public $date;

    public $number_of_people;
    public $cost_per_person;
    //public $persons_cost;

    public $cost_pitch;
    public $cost_car;
    public $costs;

    const PITCH_COST = 15;
    const PERSON_COST = 2.50;
    const CAR_COST = 3.00;

    function DateDiff($dateBegin,$dateEND) {
        $date = 0;
        
        $this->date = date_diff($dateEND, $dateBegin)->days;

        return $date;
    }
    /*function PersonCost($number_of_people,$cost_per_person) {
        $this->persons_cost = $number_of_people * $cost_per_person;
    }*/

    function __construct($name) {
        $this->name = $name;
        $this->number_of_people = 0;
        $this->cost_pitch = 0;
        $this->cost_per_person = 0;
        $this->cost_car = 0;
        $this->costs =0;
    }

    public function addCost($costs) {
        switch ($costs) {
            case "PITCH":
                $this->cost_pitch +=1;
                break;
            case "CAR":
                $this->cost_car+=1;
                break;
            case "PERSON": 
                $this->cost_per_person+=1;
                break;
        }
        $this->costs +=1;
    }
    public function revenue() {
        $revenue = 0;
        $revenue += $this->cost_pitch * self::PITCH_COST;
        $revenue += $this->cost_car * self::CAR_COST;
        $revenue += $this->cost_per_person * self::PERSON_COST * $this->number_of_people;

        return $revenue;
}
    public function totalPeoples() {
        $totalPeoples =  0;
        $totalPeoples += $this->number_of_people;

        return $totalPeoples;
    }
/*your reservation calculates the amount of people based on the customer objects

$reservation = new Reservation();

//2 people
$tomi = new Customer();
$bato = new Cucstomer();

$reservation->addCustomer($tomi);
$reservation->addCustomer($bato);

$reservation->showCost();

function showCost(){

    $income = count($this->customers) * PRICE_PER_CUSTOMER;
    return $income;
}*/
}
?>

