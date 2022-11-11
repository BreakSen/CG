<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht5</title>
</head>
<body>
 <!-- I tried here to gove each border from the double border style a diferent color, But didn't work, tried also to make 2 borders with different colors, but also didn't work here, I will work easier I think if i linked a css file and worked it from there, but I spend too much time on trying to make this one, even though it's not a part of the exercise, so yeah If you have an idea about how I can make it without using css -->
<table width="270px" cellspacing="0px" cellpadding="0px"  border="10px" style="border-style:double" style="color:aqua" >
    <?php
   for ($row=1;$row<=8;$row++){
    echo "<tr>";
    for ($col=1; $col<=8;$col++) {
        $board = $row + $col;
        if ($board%2==0) {
            echo"<td height=30px width=30px bgcolor=#000000></td>";
        }
        else {
            echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
        }
    }
    echo "<tr>";
   }
    ?>
</table>

</body>
</html>