<?php
// MUSEO · ERROR 1: falta el punto y coma
// Mirá la línea 5: no termina con ;  -> PHP se confunde al leer la línea 6.
// ARREGLO: agregá ; al final de la línea 5.
$nombre = 'Ana'
echo "Hola, $nombre";
