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
    function reverse($s) {
        for ($i=strlen($s)-1, $j=0; $i>=0, $j<$i; $i--, $j++) {
            
            $k = $s[$i];
            $s[$i] = $s[$j];
            $s[$j] = $k;
            
        }
        return $s;
    }
    $s = "Welcome";
    print(reverse($s));
    ?>
</body>
</html>