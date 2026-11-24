<?php
// =====================================================================
//  NIVEL 0 · LA MISMA PÁGINA, PERO VIVA (PHP)
//  Todo lo que está dentro de la etiqueta PHP se ejecuta en el SERVIDOR.
//  Al navegador solo le llega el resultado: HTML puro.
// =====================================================================

session_start();                                  // memoria por visitante

$hora = (int) date('H');                          // la hora actual: 0 a 23

if ($hora < 12) {
    $saludo = '¡Buenos días!';
} elseif ($hora < 19) {
    $saludo = '¡Buenas tardes!';
} else {
    $saludo = '¡Buenas noches!';
}

$_SESSION['visitas'] = ($_SESSION['visitas'] ?? 0) + 1;   // contamos tus visitas
$ip = $_SERVER['REMOTE_ADDR'];                            // quién nos visita
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Página PHP · Nivel 0</title>
  <link rel="stylesheet" href="/assets/fogon.css">
</head>
<body>
<main>
  <div class="migas"><a href="/">🔥 inicio</a> / <a href="/00-gancho/">nivel 0</a> / hora.php</div>
  <div class="kicker">NIVEL 0 · PÁGINA PHP (DINÁMICA)</div>
  <h1><?php echo $saludo; ?></h1>

  <div class="tarjeta fuego">
    <p>Ahora mismo son las:</p>
    <p class="enorme"><?php echo date('H:i:s'); ?></p>
    <p>Sos la visita número <b><?php echo $_SESSION['visitas']; ?></b>.</p>
    <p>Tu dirección IP es: <b><?php echo $ip; ?></b></p>
  </div>

  <p class="nota">Recargá la página (F5). ¿Ahora sí cambia?<br>
  👉 Hacé <b>clic derecho → Ver código fuente</b>. Buscá el código PHP… <b>¿dónde está?</b></p>
</main>
</body>
</html>
