<?php
// MUSEO · ERROR 3: comillas simples cuando querías el valor
// No hay mensaje de error... pero sale el texto literal "$nombre".
// ARREGLO: usá comillas dobles "Hola, $nombre" o concatená 'Hola, ' . $nombre
$nombre = 'Ana';
echo 'Hola, $nombre';
