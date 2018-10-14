<?php
    $nombre = strtoupper($_POST['cajaNombre']);
    $primerAp = strtoupper($_POST['cajaPrimerAp']);
    $segundoAp = strtoupper($_POST['cajaSegundoAp']);
    $fechaNac = strtoupper($_POST['cajaFechaDeNacimiento']);
    $entidadNac = strtoupper($_POST['cajaEntidadNacimiento']);
    $sexo = strtoupper($_POST['cajaSexo']);
    
    $consonantePrimerAp = "";
    $consonanteSegundoAp = "";
    $consonanteNombre = "";

    for($i=2; $i<strlen($primerAp); $i++) {
        if ($primerAp{$i}!='A' && 
            $primerAp{$i}!='E' && 
            $primerAp{$i}!='I' && 
            $primerAp{$i}!='O' && 
            $primerAp{$i}!='U') {
           $consonantePrimerAp = $primerAp{$i};
           break;
       }
    }

    for($i=1; $i<strlen($segundoAp); $i++) {
        if ($segundoAp{$i}!='A' && 
            $segundoAp{$i}!='E' && 
            $segundoAp{$i}!='I' && 
            $segundoAp{$i}!='O' && 
            $segundoAp{$i}!='U') {
           $consonanteSegundoAp = $segundoAp{$i};
           break;
       }
    }

    for ($i=1; $i<strlen($nombre); $i++) {
       if ($nombre{$i}!='A' &&
          $nombre{$i}!='E' &&
          $nombre{$i}!='I' &&
          $nombre{$i}!='O' &&
          $nombre{$i}!='U') {
           $consonanteNombre = $nombre{$i};
           break;
       }
    }
    
    $aleatorio1 = rand(0, 9);
    $aleatorio2 = rand(0, 9);

    $curp = $primerAp{0} . $primerAp{1} .
        $segundoAp{0} . 
        $nombre{0} . 
        $fechaNac{8} . $fechaNac{9} . 
        $fechaNac{3} . $fechaNac{4} .  
        $fechaNac{0} . $fechaNac{1} .  
        $sexo{0} . 
        $entidadNac{0} . 
        $entidadNac{strlen($entidadNac)-1} . 
        $consonantePrimerAp . 
        $consonanteSegundoAp . 
        $consonanteNombre . 
        $aleatorio1 . 
        $aleatorio2;
    
    echo "<h1> CURP: </h1>" . "<h2>" . $curp . "</h2>";
?>