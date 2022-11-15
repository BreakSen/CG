    <title>Index opdrachten</title>
<?php
include 'Includes/opdracht1.inc.php';
include 'Includes/opdracht2.inc.php';
include 'Includes/Opdracht2V2.inc.php';
include 'Includes/Opdracht3.inc.php';
include 'Includes/Opdracht3V2.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    // Opdracht 1 
    $string01 = new disString("MyClass class has been initialized!");
    echo "<br>";
    $string02 = new disString("MyClass class has been initialized!, again");
    
    echo "<br><br>";
    // Opdracht 2
    $name01 = new displayNameInIntroduction("Scott");

    echo "<br><br>";
    //Opdracht 2 V2
    $mymessage = New displayNameInIntroduction2();
    echo $mymessage->introduction2('Sen');

    echo "<br><br>";
    //Opdracht 3
    $newClc = new Calculator();
    echo $newClc->clc(10,5);

    echo "<br><br>";
    //Opdracht 3 V2
    $newclc2 = new Calculator2();
    echo $newclc2->add(12,6);
    echo $newclc2->sub(12,6);
    echo $newclc2->multiply(12,6);
    echo $newclc2->divide(12,6);
    ?>
</body>
</html>