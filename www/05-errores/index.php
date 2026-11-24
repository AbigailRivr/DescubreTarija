<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Museo de los 5 errores</title>
  <link rel="stylesheet" href="/assets/fogon.css">
</head>
<body>
<main>
  <div class="migas"><a href="/">🔥 inicio</a> / museo de errores</div>
  <div class="kicker">MUSEO · LOS 5 ERRORES QUE TODOS COMETEN</div>
  <h1>🏛️ El museo de los errores</h1>
  <p>Cada archivo está <b>roto a propósito</b>. Abrilo, leé el mensaje de PHP, encontrá la línea que dice y arreglalo en VS Code.</p>
  <table>
    <tr><th>#</th><th>Error</th><th>Lo que vas a ver</th><th>Cómo se arregla</th></tr>
    <tr><td>1</td><td><a href="1-punto-y-coma.php">Falta el <code>;</code></a></td>
        <td><span class="mal">Parse error: syntax error, unexpected token "echo"</span></td><td>Agregar <code>;</code> al final de la línea <b>anterior</b> a la que marca.</td></tr>
    <tr><td>2</td><td><a href="2-sin-dolar.php">Variable sin <code>$</code></a></td>
        <td><span class="mal">Fatal error: Undefined constant "nombre"</span></td><td>Escribir <code>$nombre</code>.</td></tr>
    <tr><td>3</td><td><a href="3-comillas.php">Comillas simples</a></td>
        <td>Sale <code>Hola, $nombre</code> literal (¡sin error!)</td><td>Comillas dobles o concatenar con <code>.</code></td></tr>
    <tr><td>4</td><td><a href="4-saludo.html">PHP en un <code>.html</code></a></td>
        <td>No aparece nada (el PHP quedó crudo en el código fuente)</td><td>Renombrar el archivo a <code>.php</code>.</td></tr>
    <tr><td>5</td><td><a href="5-variable-mal-escrita.php">Variable mal escrita</a></td>
        <td><span class="mal">Warning: Undefined variable $nombr</span></td><td>Escribir el nombre exacto (¡ojo con las mayúsculas!).</td></tr>
  </table>
  <div class="tarjeta fuego">
    <b>🧠 La regla de oro para leer errores:</b> PHP te dice <b>qué</b> pasó y <b>en qué línea</b> (<code>on line 6</code>).
    Si la línea parece bien, mirá la <b>línea de arriba</b>: muchas veces el error empezó ahí.
  </div>
</main>
</body>
</html>
