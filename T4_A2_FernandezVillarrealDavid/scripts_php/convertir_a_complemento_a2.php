<?php
    $decimal = $_POST['caja_decimal'];
    
    $binario = decbin($decimal);

    $complementoA1 = null;
    
    for ($i=0; $i<32; $i++) {
        if (strlen($binario)==32) 
            break;
        $binario = 0 . $binario;
    }

    for ($i=0; $i<strlen($binario); $i++) {
        if ($binario{$i}==0) {
            $complementoA1 = $complementoA1 . 1; 
        } else {
            $complementoA1 = $complementoA1 . 0;
        }
    }
    
    echo "<h1> Binario: </h1>" . $binario;

    $complementoA1Decimal = bindec($complementoA1);
    $complementoA2Decimal = $complementoA1Decimal + 1;
    $complementoA2 = decbin($complementoA2Decimal);

    echo "<h1> Complemento A2: </h1>" . $complementoA2;
?>