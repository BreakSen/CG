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
    function Lower_Case($str) {
        for($i=0;$i<=strlen($str); $i++) {
            if(ord($str[$i]) >= ord('A') &&
            ord($str[$i]) <= ord('Z')) {
                return false;
            }
        }
        return true;
    }
    /*I tried here to get an outpot as
    No Upper Case? True
    No Upper Case? False
    But Didn't know how to do It So I decided to leave it like that and ask about it when I send the exercieses*/
    $a = "No Upper Case?";
    var_dump($a,Lower_Case("there is no upper case here"));
    echo "<br>";
    var_dump($a,Lower_Case("there is An upper case here"));
    ?>
</body>
</html>