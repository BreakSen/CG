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
    Function CanVote($name,$age) {
        if($name=="Tomi") {
            echo "<strong>$name</strong> You may be old enough to vote,
            but the exercise told me that you are not, so you can't vote. <br>";
        }
        elseif($age>=18) {
            echo"<strong>$name</strong> you are old enough to vote. <br>";
        }
        else {
            echo"<strong>$name</strong> you are not old enough to vote. --
            You should be 18 to be able to vote. <br> ";
        }
    }
    CanVote("Rick",15);
    CanVote("Jay",27);
    CanVote("Tomi",30);
    ?>
</body>
</html>