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
    function SortArray ($a) {
        for($i=0;$i< count($a); $i++) {
            $min = $i;
            for($j=$i+1;$j< count($a); $j++)
            {
                if($a[$j] < $a[$min]) {
                    $k = $a[$min];
                    $a[$min] = $a[$j];
                    $a[$j] = $k;
                }
            }
        }
        return $a;
    }
    $a = array("y", "t", 44, 1, 34, 50, "a" );
    print_r(SortArray($a));
    
    ?>
</body>
</html>