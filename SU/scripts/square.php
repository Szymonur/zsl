<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4> kwadrat </h4>
     <form method="post">
         <input type="text" name="sideA" placeholder="Podaj długość boku a"> <br> <br>
         <input type="submit" value="Oblicz">
     </form>
<?php
    if (!empty($_POST['sideA'])) {
        $sideA = $_POST['sideA']; 
        $area = pow($sideA, 2);
        $circiut = 4*$sideA;
        echo <<< RESULT
        <hr>
         Pole kwadratu wynosi : $area cm<sup>2</sup>; <br> <br>
         Obwód kwadartu wynosi : $circiut cm;

    RESULT;

    } else {
        echo '<hr>wpisz długość boku a';
    }
?>
    
</body>
</html>