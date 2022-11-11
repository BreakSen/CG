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
    function PrimeNum($n) {
        for ($i=2; $i<$n;$i++) {
            if ($n %$i ==0) {
                return 0;
            }
        }
        return 1;
    }
    $a = PrimeNum(4);
    if ($a==0)
    echo "This is not a prime Number";
    else
    echo "This is a Prime Number";
    ?>
</body>
</html>