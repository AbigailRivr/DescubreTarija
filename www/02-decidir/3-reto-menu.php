<?php
// =====================================================================
//  NIVEL 2 · RETO: el menú del día
//  Completá los TODO. La solución está en /soluciones (¡intentá antes!).
// =====================================================================

$menu = [
    ['plato' => 'Ranga ranga',  'precio' => 32],
    ['plato' => 'Pique macho',  'precio' => 60],
    ['plato' => 'Api morado',   'precio' =>  9],
    // TODO 1: agregá 3 platos más (inventados o de tu ciudad)
];

$presupuesto = 40;   // TODO 2: cambiá tu presupuesto y mirá qué pasa
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Reto · Nivel 2</title>
  <link rel="stylesheet" href="/assets/fogon.css">
</head>
<body>
<main>
  <div class="migas"><a href="/">🔥 inicio</a> / <a href="/02-decidir/">nivel 2</a> / 3-reto-menu.php</div>
  <div class="kicker">NIVEL 2 · RETO</div>
  <h1>El menú del día</h1>
  <p>Tu presupuesto: <span class="chip verde"><?= $presupuesto ?> Bs</span></p>

  <div class="tarjeta fuego">
    <table>
      <tr><th>Plato</th><th>Precio</th><th>¿Me alcanza?</th></tr>
      <?php foreach ($menu as $item): ?>
        <tr>
          <td><?= $item['plato'] ?></td>
          <td><?= $item['precio'] ?> Bs</td>
          <td>
            <?php
              // TODO 3: si el precio es menor o igual al presupuesto, mostrá "✅ Sí".
              //         Si no, mostrá "❌ No".
              echo '¿?';
            ?>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
    <!-- TODO 4 (bonus): mostrá cuántos platos te alcanzan -->
  </div>
</main>
</body>
</html>
