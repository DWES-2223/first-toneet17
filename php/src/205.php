<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>205.php</title>
</head>
<body>
<?php

if (isset($_GET['quantitat'])) {
    $quantitat = (int)$_GET['quantitat'];
    $valors = [500, 200, 100, 50, 20, 10, 5, 2, 1];

    foreach ($valors as $valor) {
        if ($valor >= 5) {
            $cantidadBilletes = intdiv($quantitat, $valor);

            if ($cantidadBilletes > 0) {
                $tipo = 'bitllet';
                $plural = ($cantidadBilletes > 1) ? 's' : '';

                echo "$cantidadBilletes $tipo$plural de $valor<br>";
            }

            $quantitat %= $valor;
        } else {
            $cantidadMonedas = intdiv($quantitat, $valor);

            if ($cantidadMonedas > 0) {
                $tipo = 'moned';
                $plural = ($cantidadMonedas > 1) ? 'es' : 'a';

                echo "$cantidadMonedas $tipo$plural de $valor<br>";
            }

            $quantitat %= $valor;
        }
    }
} else {
    echo "<p>Posa la quantitat a la variable quantitat pel QueryString</p>";
}
?>
</body>
</html>
