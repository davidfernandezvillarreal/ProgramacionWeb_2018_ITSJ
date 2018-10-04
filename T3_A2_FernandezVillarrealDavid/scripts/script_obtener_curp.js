function obtenerCURP() {
    var nombre = document.formularioCURP.cajaNombre.value.toUpperCase();
    var primerAp = document.formularioCURP.cajaPrimerAp.value.toUpperCase();
    var segundoAp = document.formularioCURP.cajaSegundoAp.value.toUpperCase();
    var fechaNac = document.formularioCURP.cajaFechaNac.value;
    var entidadNac = document.formularioCURP.cajaEntidadNacimiento.value.toUpperCase();
    var sexo = document.formularioCURP.cajaSexo.value.toUpperCase();
    
    var consonantePrimerAp;
    var consonanteSegundoAp;
    var consonanteNombre;
    
    for (i=2; i<primerAp.length; i++) {
       if (primerAp.charAt(i)!='A' &&
          primerAp.charAt(i)!='E' &&
          primerAp.charAt(i)!='I' &&
          primerAp.charAt(i)!='O' &&
          primerAp.charAt(i)!='U') {
           consonantePrimerAp = primerAp.charAt(i);
           break;
       }
    }
    
    for (i=1; i<segundoAp.length; i++) {
       if (segundoAp.charAt(i)!='A' &&
          segundoAp.charAt(i)!='E' &&
          segundoAp.charAt(i)!='I' &&
          segundoAp.charAt(i)!='O' &&
          segundoAp.charAt(i)!='U') {
           consonanteSegundoAp = segundoAp.charAt(i);
           break;
       }
    }
    
    for (i=1; i<nombre.length; i++) {
       if (nombre.charAt(i)!='A' &&
          nombre.charAt(i)!='E' &&
          nombre.charAt(i)!='I' &&
          nombre.charAt(i)!='O' &&
          nombre.charAt(i)!='U') {
           consonanteNombre = nombre.charAt(i);
           break;
       }
    }
    
    var aleatorio1 = Math.round(Math.random()*9);
    var aleatorio2 = Math.round(Math.random()*9);
    
    var curp = primerAp.charAt(0) + primerAp.charAt(1) + 
        segundoAp.charAt(0) + 
        nombre.charAt(0) + 
        fechaNac.charAt(8) + fechaNac.charAt(9) + 
        fechaNac.charAt(3) + fechaNac.charAt(4) +  
        fechaNac.charAt(0) + fechaNac.charAt(1) +  
        sexo.charAt(0) + 
        entidadNac.charAt(0) + 
        entidadNac.charAt(entidadNac.length-1) + 
        consonantePrimerAp + 
        consonanteSegundoAp + 
        consonanteNombre + 
        aleatorio1 + 
        aleatorio2;
    
    document.formularioCURP.caja_curp.value = curp;
}