<?php
    $decimal = $_POST['caja_decimal'];
    
    echo "<h2> BINARIO: </h2>" . "<h3>" . decbin($decimal) . "</h3>";
    echo "<hr> <h2> OCTAL: </h2>" . "<h3>" . octdec($decimal) . "</h3>";
    echo "<hr> <h2> HEXADECIMAL: </h2>" . "<h3>" . hexdec($decimal) . "</h3>";
?>