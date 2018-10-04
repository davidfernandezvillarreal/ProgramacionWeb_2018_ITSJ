function manejarCadena() {
    var cadena = document.formulario_manejo_cadena.area_cadena.value;
    
    var palabra = "";
    
    var vocales = 0;
    var consonantes = 0;
    var numeroPalabra = 0;
    var cadenaLoca = "";
    
    for (i=0; i<cadena.length; i++) {
        if (cadena[i]=='a' || cadena[i]=='e' ||
           cadena[i]=='i' || cadena[i]=='o' ||
           cadena[i]=='u' || cadena[i]=='A' ||
           cadena[i]=='E' || cadena[i]=='I' ||
           cadena[i]=='O' || cadena[i]=='U')
            vocales++;
    }
    
    document.formulario_manejo_cadena.caja_vocales.value = vocales;
    
    for (i=0; i<cadena.length; i++) {
        if (cadena[i]!='a' && cadena[i]!='e' &&
           cadena[i]!='i' && cadena[i]!='o' &&
           cadena[i]!='u' && cadena[i]!='A' &&
           cadena[i]!='E' && cadena[i]!='I' &&
           cadena[i]!='O' && cadena[i]!='U' && 
           cadena[i]!=' ')
            consonantes++;
    }
    
    document.formulario_manejo_cadena.caja_consonantes.value = consonantes;
    
    var palabras = cadena.split(" ");
    palabra = document.formulario_manejo_cadena.caja_buscar_palabra.value;
    
    for(var i=0; i<palabras.length; i++) {
        if (palabras[i]==palabra) {
            numeroPalabra++;
        }
    } 
    document.formulario_manejo_cadena.caja_numero_palabras.value = numeroPalabra;
    
    for(i=0; i<cadena.length; i++) {
        if ((i%2)==0) {
            cadenaLoca = cadenaLoca + cadena[i].toUpperCase();
        } else if ((i%2)==1) {
            cadenaLoca = cadenaLoca + cadena[i].toLowerCase();
        }
    }
    
    document.formulario_manejo_cadena.area_cadena_loca.value = cadenaLoca;
}