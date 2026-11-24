<?php
// SOLUCIÓN · Nivel 2 · el menú del día
$menu = [
    ['plato' => 'Ranga ranga',     'precio' => 32],
    ['plato' => 'Pique macho',     'precio' => 60],
    ['plato' => 'Api morado',      'precio' =>  9],
    ['plato' => 'Saice tarijeño',  'precio' => 38],
    ['plato' => 'Tojorí',          'precio' => 12],
    ['plato' => 'Chancho a la cruz','precio' => 55],
];
$presupuesto = 40;
$alcanzan = 0;
?>
<!DOCTYPE html>
<html lang="es"><head><meta charset="utf-8"><title>Solución menú</title><link rel="stylesheet" href="/assets/fogon.css"></head>
<body><main>
  <div class="migas"><a href="/">🔥 inicio</a> / soluciones / 3-reto-menu-solucion.php</div>
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
              if ($item['precio'] <= $presupuesto) {
                  echo '✅ Sí';
                  $alcanzan++;              // lo mismo que $alcanzan = $alcanzan + 1
              } else {
                  echo '❌ No';
              }
            ?>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
    <p>Te alcanzan <b><?= $alcanzan ?></b> de <?= count($menu) ?> platos.</p>
  </div>
</main></body></html>
