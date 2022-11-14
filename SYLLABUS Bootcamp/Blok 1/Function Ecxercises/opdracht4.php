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
    $a = array("y", "t", 44, 1, 34, 50, "a");
    sort($a);

    $aLength = count($a);
    for($i = 0; $i < $aLength; $i++) {
    echo $a[$i];
    echo "<br>";
}
    ?>
</body>
</html>