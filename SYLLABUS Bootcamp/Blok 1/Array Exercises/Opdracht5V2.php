<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$weeklyTemps = [
    "Maandag" => [ 
    	"Groningen" => 25,
        "Assen" => 12,
       	"Emmen" => 19
    ],
     "Dinsdag" => [ 
    	"Groningen" => 26,
        "Assen" => 28,
        "Emmen" => 19
    ],
     "Woensdag" => [ 
    	"Groningen" => 16,
        "Assen" => 30,
        "Emmen" => 35
    ]
];
echo "The highst Temperature on Maandag was " . $weeklyTemps["Maandag"]["Groningen"] ." grade in <br>";
echo "The highst Temperature on Dinsdag was " . $weeklyTemps["Dinsdag"]["Assen"] ." grade in <br>";
echo "The highst Temperature on Woensdag was " . $weeklyTemps["Woensdag"]["Assen"] ." grade in <br>";
// OR
echo "<br>";
echo "The highst Temperature on Maandag was " . max($weeklyTemps['Maandag']) ." grade in <br>";
echo "The highst Temperature on Dinsdag was " . max($weeklyTemps['Dinsdag']) ." grade in <br>";
echo "The highst Temperature on Woensdag was " . max($weeklyTemps['Woensdag']) ." grade in <br>";
    ?>
</body>
</html>