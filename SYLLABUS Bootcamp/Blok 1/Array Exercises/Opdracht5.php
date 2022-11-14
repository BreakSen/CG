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
    foreach($weeklyTemps as $day => $city) {
        foreach($city as $city => $temp) {
            echo "The highst Temperature on $day was $temp grade in $city<br>";
            echo "<br>";
            /* I stopt right here because I didn't know how to go furthur, The loop Is working, and all the keys are identified now, But there is two problems I didn't know how to solve
            1 - I couldn't use the max() function, everytime i use it dose not work on $temp 
            2 - when I try to add another function or another values the loop will stop and it will only print the first line "The highst Temperature on Maandag was 25 grade in Groningen"
            I felt like I was about to find the answer, but I think I thought a lot about this and have to go further in the course, still want to know where is the problem. */
        }
        };
    ?>
</body>
</html>