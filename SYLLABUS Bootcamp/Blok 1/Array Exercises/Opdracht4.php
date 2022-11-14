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
    $Rec_Temp = array( 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76,73,68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73);

    echo "Average Temperature is: ".array_sum($Rec_Temp)/count($Rec_Temp)."<br>";
    sort( $Rec_Temp );
    echo "List of five lowest temperatures are: ";
    for ($n=0;$n<5;$n++) {
        echo $Rec_Temp[$n].",";
    }
    echo "<br>"; 
    echo "List of five highest temperatures are: ";
    for ($n=25;$n<30;$n++) {
        echo $Rec_Temp[$n].",";
    }
    ?>
</body>
</html>