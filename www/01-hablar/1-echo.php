<?php
// =====================================================================
//  NIVEL 1 · HABLAR: echo y variables
//  Abrí este archivo en VS Code, leé los comentarios y cambiá cosas.
//  Guardá (Ctrl+S) y recargá el navegador (F5).
// =====================================================================

// Una VARIABLE es una cajita con nombre que guarda un dato.
// En PHP, TODAS las variables empiezan con el signo $
$nombre  = 'Juan Pablo';        // texto (string): va entre comillas
$materia = 'Tecnología Web I';  // otro texto
$anio    = 2026;                // número entero: sin comillas
$precio  = 12.50;               // número con decimales

// Cada instrucción termina con punto y coma ;
// (olvidarlo es el error número 1 del mundo: ver el Museo de Errores)
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Nivel 1 · echo</title>
  <link rel="stylesheet" href="/assets/fogon.css">
</head>
<body>
<main>
  <div class="migas"><a href="/">🔥 inicio</a> / <a href="/01-hablar/">nivel 1</a> / 1-echo.php</div>
  <div class="kicker">NIVEL 1 · HABLAR</div>
  <h1>echo: PHP escribe HTML por vos</h1>

  <div class="tarjeta fuego">
    <!-- echo "imprime" lo que le des, dentro del HTML -->
    <p>Hola, soy <b><?php echo $nombre; ?></b>.</p>

    <!-- El punto . une (concatena) textos -->
    <p><?php echo 'Estudio ' . $materia . ' en el año ' . $anio; ?>.</p>

    <!-- Con comillas DOBLES, PHP reemplaza las variables adentro -->
    <p><?php echo "El cafecito cuesta $precio bolivianos."; ?></p>

    <!-- Con comillas SIMPLES, NO las reemplaza (sale el texto tal cual) -->
    <p><?php echo 'Con comillas simples sale: $precio'; ?></p>

    <!-- PHP también hace cuentas -->
    <p>Tres cafecitos cuestan <b><?php echo $precio * 3; ?></b> Bs.</p>

    <!-- Atajo: < ?= es lo mismo que < ?php echo -->
    <p>Atajo <code>&lt;?= ?&gt;</code>: <b><?= strtoupper($nombre) ?></b> (en mayúsculas con <code>strtoupper</code>)</p>
  </div>

  <div class="tarjeta">
    <b>🎯 Misión (2 minutos):</b>
    <ol>
      <li>Cambiá <code>$nombre</code> por tu nombre. Guardá y recargá.</li>
      <li>Cambiá el precio a <code>15</code>. ¿Qué pasa con el total?</li>
      <li>Agregá una variable <code>$ciudad</code> y mostrala en un párrafo nuevo.</li>
    </ol>
  </div>
</main>
</body>
</html>
