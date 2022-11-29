<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>END opdracht 4</title>

    <link rel="stylesheet" href="/Demo/Template App/styles/main.css">

</head>
<body>
<div class="flex wrapper">

        <div class="container">
            <p class="text heading">Opdracht 4 - Camping</p>
            <p class="text paragraph">
            Reservations come in at a campsite. The following rates are used by the campsite: € 15 per pitch. In addition, € 2.50 per person and € 3.00 for the car. From July 11 to August 15, a surcharge of 25% applies.
            </p>
            <p class="text paragraph">
            A program should be developed that allows the start and end date (format ddmmyyyy), as well as the number of people and whether or not a car can be entered for each reservation. For each reservation, the costs due must be calculated and shown. Furthermore, the cumulative total income (per reservation), the average number of days for which reservations are made and the total number of people must be shown.
            </p>
        </div>
        <div class="container">
            <p class="text heading">App Output Here:</p>
            <p class="text paragraph">
                <?php

                    require 'models/Reservation.php';
                    require 'models/Customer.php';
                    

                
                    require 'controllers/app.php';
                ?>
            </p>
        </div>
    </div>
</body>
</html>