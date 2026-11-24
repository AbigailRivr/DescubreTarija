<?php
// =====================================================================
//  NIVEL 2 · REPETIR: arrays y foreach
//  Un ARRAY es una lista. foreach la recorre elemento por elemento.
// =====================================================================

// Lista simple
$categorias = ['Entradas', 'Fondos', 'Postres', 'Bebidas'];

// Lista de "fichas": cada plato tiene nombre, precio y si es picante
$menu = [
    ['plato' => 'Salteña de carne',  'precio' => 10, 'picante' => true],
    ['plato' => 'Saice tarijeño',    'precio' => 38, 'picante' => true],
    ['plato' => 'Chancho a la cruz', 'precio' => 55, 'picante' => false],
    ['plato' => 'Sopa de maní',      'precio' => 18, 'picante' => false],
    ['plato' => 'Tojorí',            'precio' => 12, 'picante' => false],
    ['plato' => 'Mocochinchi',       'precio' =>  7, 'picante' => false],
];

$total = 0;
foreach ($menu as $item) {
    $total = $total + $item['precio'];     // vamos sumando
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Nivel 2 · foreach</title>
  <link rel="stylesheet" href="/assets/fogon.css">
</head>
<body>
<main>
  <div class="migas"><a href="/">🔥 inicio</a> / <a href="/02-decidir/">nivel 2</a> / 2-menu.php</div>
  <div class="kicker">NIVEL 2 · REPETIR</div>
  <h1>🍽️ Restaurante FORJA</h1>

  <p>
    <?php foreach ($categorias as $cat): ?>
      <span class="chip fuego"><?= $cat ?></span>
    <?php endforeach; ?>
  </p>

  <div class="tarjeta fuego">
    <table>
      <tr><th>#</th><th>Plato</th><th>Precio</th><th></th></tr>
      <?php foreach ($menu as $i => $item): ?>
        <tr>
          <td><?= $i + 1 ?></td>
          <td><?= $item['plato'] ?></td>
          <td><?= $item['precio'] ?> Bs</td>
          <td><?php if ($item['picante']) { echo '🌶️ picante'; } ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
    <p>Hay <b><?= count($menu) ?></b> platos. Probar todo cuesta <b><?= $total ?> Bs</b>.</p>
  </div>

  <div class="tarjeta">
    <b>💡 Lo mágico:</b> la tabla tiene una sola fila escrita en el código… y PHP la repite por cada plato.
    Agregá un plato nuevo al array y recargá: aparece solo.
  </div>
</main>
</body>
</html>
