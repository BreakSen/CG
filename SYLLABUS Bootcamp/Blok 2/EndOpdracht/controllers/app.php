<?php
$reservsation = new Reservation();
//Customer 1
$tomi = new Customer("Tomi");

// For Date, I didn't know how to add the correct one.
//$tomi->DateDiff(12/12/2022, 16/12/2022);
//$tomi->date = date_diff("12-12-2022", "16-12-2022");
//$tomi->date=("12-12-2022", "16-12-2022");
$tomi->number_of_people = 5;

$tomi->addCost("PITCH");
$tomi->addCost("CAR");
$tomi->addCost("PERSON");

//Customer 2
$sen = new Customer("Sen");
//$sen->DateDiff(23/11/2022, 30/11/2022);
$sen->number_of_people = 8;

$sen->addCost("PITCH");
$sen->addCost("CAR");
$sen->addCost("PERSON");

//Customer 3
$jhon = new Customer("Jhon");
$jhon->number_of_people = 4;

$jhon->addCost("PITCH");
$jhon->addCost("PERSON");

//Add Customers 
$reservsation->addReservation($tomi);
$reservsation->addReservation($sen);
$reservsation->addReservation($jhon);

//Show Reservation Data
echo "<br> RESERVATION DATA";
$reservsation->reservationData();


// the cumulativeTotalIncome
echo "<br> The cumulative total income is: " . $reservsation->cumulativeTotalIncome() . " € ";

//Total number of people
echo "<br> The total number of people is: " . $reservsation->totalNumberOfPeople() . " people";

//Total Days
//echo "<br> The total days is: " . $reservsation->totalDays(). "days";

//Avarage days
//echo "<br> The avarage days reserved are: " . $reservsation->avarageDays(). "days";


?>