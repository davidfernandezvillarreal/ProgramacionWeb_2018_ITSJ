function convertirDecimal() {
    var entrada = document.formulario_convertir_decimal.caja_decimal.value;
    var decimal = parseInt(entrada);
    
    document.formulario_convertir_decimal.caja_binario.value = decimal.toString(2);
    document.formulario_convertir_decimal.caja_octal.value = decimal.toString(8);
    document.formulario_convertir_decimal.caja_hexadecimal.value = decimal.toString(16);
} 