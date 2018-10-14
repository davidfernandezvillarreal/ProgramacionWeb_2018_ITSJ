<?php
    $cadena = $_POST['area_cadena'];

    $palabra = "";

    $vocales = 0;
    $consonantes = 0;
    $numeroPalabra = 0;
    $cadenaLoca = "";
    
    for($i=0; $i<strlen($cadena); $i++) {
        if ($cadena{$i}=='a' || $cadena{$i}=='e' ||
           $cadena{$i}=='i' || $cadena{$i}=='o' ||
           $cadena{$i}=='u' || $cadena{$i}=='A' ||
           $cadena{$i}=='E' || $cadena{$i}=='I' ||
           $cadena{$i}=='O' || $cadena{$i}=='U') 
            $vocales++;
    }
    
    echo "<h2> VOCALES: " . $vocales . "</h2>";

    for($i=0; $i<strlen($cadena); $i++) {
        if ($cadena{$i}!='a' || $cadena{$i}!='e' ||
           $cadena{$i}!='i' || $cadena{$i}!='o' ||
           $cadena{$i}!='u' || $cadena{$i}!='A' ||
           $cadena{$i}!='E' || $cadena{$i}!='I' ||
           $cadena{$i}!='O' || $cadena{$i}!='U') 
            $consonantes++;
    }
    
    echo "<h2> CONSONANTES: " . $consonantes . "</h2>";

    $palabras = preg_split("/[\s,]+/", $cadena);

    $palabra = $_POST['caja_buscar_palabra'];

    foreach($palabras as $word) {
        if ($word==$palabra) {
            $numeroPalabra++;
        }
    }
    echo "<h2> NO. PALABRAS: " . $numeroPalabra . "</h2>";

    for($i=0; $i<strlen($cadena); $i++) {
        if (($i%2)==0) {
            $cadenaLoca = $cadenaLoca . strtoupper($cadena{$i});
        } else if (($i%2)==1) {
            $cadenaLoca = $cadenaLoca . strtolower($cadena{$i});
        }
    }
    echo "<h2> CADENA LOCA: </h2>" . "<p>" . $cadenaLoca . "</p>";
?>