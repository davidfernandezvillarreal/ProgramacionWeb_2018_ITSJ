function convertirDecimal() {
    var entrada = document.getElementById("caja_decimal").value;
    var decimal = parseInt(entrada);
    
    document.getElementById("caja_binario").value = decimal.toString(2);
    document.getElementById("caja_octal").value = decimal.toString(8);
    document.getElementById("caja_hexadecimal").value = decimal.toString(16);
} 