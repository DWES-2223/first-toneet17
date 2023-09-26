<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>204.php</title>
</head>
<body>
<?php

if (isset($_GET['edat'])) {

    $edad = $_GET['edat'];

    $anyoActual = date("Y");

    echo "<p>Edad en el año " .($anyoActual + 10).": ".($edad + 10)."</p>";
    echo "<p>Edad en el año " .($anyoActual - 10).": ".($edad - 10)." </p>";
    echo "<p>Año de jubilación a los 67 años: ".($anyoActual + (67 - $edad))."</p>";
} else {
    echo "<p>Posa la teu edat actual a la variable edat pel QueryString.</p>";
}
?>
</body>
</html>
