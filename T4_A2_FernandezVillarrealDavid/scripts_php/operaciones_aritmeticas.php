<?php
    $operacion = $_POST['caja_operacion'];

    $separacion = preg_split("/[\s]+/", $operacion);

    if (sizeof($separacion)<3) {
        $expresiones = array();
        $expresion = ""; 
        foreach ($separacion as $token) {
            for ($i=0; $i<strlen($token); $i++) {
                if ($token{$i}=='+' || 
                    $token{$i}=='-' ||
                    $token{$i}=='*' ||
                    $token{$i}=='/') {
                    array_push($expresiones, $expresion);
                    array_push($expresiones, $token{$i});
                    $expresion = "";
                } else {
                    $expresion = $expresion . $token{$i};
                }
            }
            
        }
        array_push($expresiones, $expresion);
        realizarOperacion($expresiones);
    } else {
        realizarOperacion($separacion);
    }

    function realizarOperacion($arrayArgs) {
        echo "<h1> Resultado: </h1>";
        if ($arrayArgs{1}=='+') {
            echo "<h3>" . $arrayArgs{0} . " " . $arrayArgs{1} . " " . $arrayArgs{2} . " = " . ($arrayArgs{0} + $arrayArgs{2});
        } else if ($arrayArgs{1}=='-') {
            echo "<h3>" . $arrayArgs{0} . " " . $arrayArgs{1} . " " . $arrayArgs{2} . " = " . ($arrayArgs{0} - $arrayArgs{2});
        } else if ($arrayArgs{1}=='*') {
            echo "<h3>" . $arrayArgs{0} . " " . $arrayArgs{1} . " " . $arrayArgs{2} . " = " . ($arrayArgs{0} * $arrayArgs{2});
        } else if ($arrayArgs{1}=='/') {
            echo "<h3>" . $arrayArgs{0} . " " . $arrayArgs{1} . " " . $arrayArgs{2} . " = " . ($arrayArgs{0} / $arrayArgs{2});
        }
    }
?>