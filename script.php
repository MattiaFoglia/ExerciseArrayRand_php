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
    $numbersEven = array();
    $numbers = array();
    for($i = 0;$i<10;$i++){
    $numbers[$i]= (rand(1,100));
    }
    echo "Ordine: " . implode(" ",$numbers);
    echo "<br> Massimo: " . max($numbers) . "<br> Minimo: " . min ($numbers);
    echo "<br> Media: " . array_sum($numbers)/10;
    echo "<br> Ordine inverso: " . implode(" ",array_reverse($numbers));
    $j=1;
    for($i= 0; $i<10;$i++){
        if($numbers[$i]%2 == 0){
            $numbersEven["P$j"]=$numbers[$i];
            $j++;
        }
    }
    echo "<br> Array Numeri Pari: " . implode(" ",$numbersEven);
    ?>
    
</body>
</html>